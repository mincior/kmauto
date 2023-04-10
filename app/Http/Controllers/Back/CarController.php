<?php

namespace App\Http\Controllers\Back;

use Countries;
use App\Models\Car;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\CarDep;
use App\Models\CarFuel;
use App\Models\CarUser;
use App\Models\UserCar;
use App\Models\Interval;
use App\Models\Department;
use App\Models\Availablecar;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use App\Models\CarDepartment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\CarUpdateRequest;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class CarController extends Controller
{
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autoComplete(Request $request)
    {
        
        $res = CarFuel::select("valoare")
                ->where("valoare","LIKE","%{$request->term}%")
                ->get()->toArray();  
        return response()->json($res);
    }

    public function index(Request $request)
    {

        
        if ($request->ajax()) {
            $selectedInterval = config('global.selected_interval');
            $cars =Car:: with('brand', 'type')->select(sprintf('%s.*', (new Car)->getTable()))->orderBy('id', 'desc')->get();

            $arr_cars_with_departments = AppHelper::get_last_target_values_array('car_id', 'department_id', 'car_deps', $selectedInterval);
            $arr_cars_with_users = AppHelper::get_last_target_values_array('car_id', 'user_id', 'user_cars', $selectedInterval);
            $arr_cars_with_car_fuels = AppHelper::get_last_target_values_array('car_id', 'id', 'car_fuels', $selectedInterval);
            $arr_cars_with_car_activ = AppHelper::get_last_target_values_array('car_id', 'id', 'availablecars', $selectedInterval);

            //in cars avem deja brand si type acum luam fiecare masina si-i adaugam departamentul, userul, consumul mediu (car_fuel)
            //si activ,  asociate la momentul intervalului selectat
            foreach ($cars as $car){
                 @$car['departments'] = Department::where('id', $arr_cars_with_departments[$car->id])->get();
                 @$car['users'] = User::where('id', $arr_cars_with_users[$car->id])->get();
                 @$car['car_fuels'] = CarFuel::where('id', $arr_cars_with_car_fuels[$car->id])->get();
                 @$car['activ'] = Availablecar::where('id', $arr_cars_with_car_activ[$car->id])->get();
            }
            //Data tables poate functiona si pe eloquent si pe query normal dar si pe collection
            // (cazul de fata, adica s-a aplicat get() pe query si s-a obtinut o colectie)
            return DataTables::of($cars)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                // ->editColumn('brand_id', function ($row) {
                //     return $row->brand->name;
                // })
                // ->editColumn('type_id', function ($row) {
                //     return $row->type->name;
                // })
                // ->editColumn('$data['user_id']', function ($row) {
                //     return @$row->user->name;
                //     // dd($row);
                //     // if (is_null($row->user->name)){
                //     //     return '';
                //     // }else{

                //     // }
                // })
                ->toJson();
        }
        return view('back.cars.index');
    }

    public function create()
    {
        $selectedInterval = config('global.selected_interval');

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        return view('back.cars.create', compact('departments', 'brands'))->with('selectedInterval', $selectedInterval);
    }

    public function store(CarStoreRequest $request)
    {
        $selectedMonth =config('global.selected_month');
        $selectedInterval = config('global.selected_interval');
        //In request avem campurile necesare (proprietatea name din html)
        //In CarStoreRequest se face validarea
        $data = $request->all();
        //config('global.current.month')
        // Config::set('global.current.month', 34);
          //dd( $selectedMonth, $selectedInterval);
        //scoate un numar de forma B-87-CLT din (B87CLT, B-87CLT, B#$%$%$87(*&^%^&*(cLt)), etc. )
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']);

        //scrie masina noua 
        $car = Car::create($data);

        //scrie id-urile in tabelele pivot precum si intervalul curent (momentul crearii)
        @$car->users()->syncWithPivotValues([$data['user_id']],  ['interval_id' => intval($data['selected_interval'])]);
        $car->departments()->syncWithPivotValues([$data['department_id']],  ['interval_id' => intval($data['selected_interval'])]);

        $notification = [
            "type" => "success",
            "title" => 'Adaugare ...',
            "message" => 'Masina a fost adaugata cu succes!',
        ];

        return redirect()->route('back.cars.index')->with('notification', $notification);
    }

    public function show(Car $car)
    {
        $data = [];
        $selectedInterval = config('global.selected_interval');

        $brand_name = Brand::where('id', $car->brand_id)->first()->name;
        $type_name = Type::where('id', $car->type_id)->first()->name;
        $user_id = @UserCar::where('car_id', $car->id)->where('interval_id', '>=', $selectedInterval)->first()->user_id;
        $user_name = @User::where('id', $user_id)->first()->name;
        $department_id = CarDep::where('car_id', $car->id)->where('interval_id', '>=', $selectedInterval)->first()->department_id;
        $department_name = Department::where('id', $department_id)->first()->name;
        $data['selectedInterval'] = $selectedInterval;
        $data['brand_name'] = $brand_name;
        $data['type_name'] = $type_name;
        $merged_data['user_name'] = $user_name;
        $merged_data['department_name'] = $department_name;


        return view('back.cars.show', $data, $merged_data)->with(compact('car'));
    }

    public function edit(Car $car)
    {
        $selectedInterval = config('global.selected_interval');

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $dep_id = CarDep::select('department_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '>=', $selectedInterval)
            ->orderBy('interval_id', 'desc')
            ->first()['department_id'];
        $users = Department::with('users')->where('id', '=', $dep_id)->get()[0]['users'];

        //usr_id = o masina poate sa nu aiba un user alocat (nici userul o masina) 
        //de aceea s-a pus @CarUser... sa nu dea eroare daca $usr_id este null
        $usr_id = @UserCar::select('user_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '>=', $selectedInterval)
            ->orderBy('interval_id', 'desc')
            ->first()['user_id'];
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        $types = Type::where('brand_id', '=', $car->brand_id)->get();

        return view('back.cars.edit', compact('car'))
            ->with(compact('departments', 'users', 'brands', 'types'))
            ->with('dep_id', $dep_id)
            ->with('usr_id', $usr_id)
            ->with('selectedInterval', $selectedInterval);
    }

    public function update(CarUpdateRequest $request, Car $car)
    {
        //In request avem campurile necesare (proprietatea name din html)
        //In CarStoreRequest se face validarea
        $data = $request->all();
        //scoate un numar de forma B-87-CLT din (B87CLT, B-87CLT, B#$%$%$87(*&^%^&*(cLt)), etc. )
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']);

        //scrie masina noua 
        $car->update($data);

        //scrie id-urile in tabelele pivot precum si intervalul curent (momentul crearii)
        $car->users()->syncWithPivotValues([$data['user_id']],  ['interval_id' => intval($data['selected_interval'])]);
        $car->departments()->syncWithPivotValues([$data['department_id']],  ['interval_id' => intval($data['selected_interval'])]);

        $notification = [
            "type" => "success",
            "title" => 'Modificare ...',
            "message" => 'Masina a fost modificata cu succes!',
        ];

        return redirect()->route('back.cars.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        $car_for_delete_ids = $request->ids;
        foreach ($car_for_delete_ids as $id) {
            $kmlog = Kmlog::where('car_id', $id)->first();
            if ($kmlog == null) {//masina se poate sterge
                //dar mai intai se sterg legaturile din tabelele pivot
                CarUser::where('car_id', $id)->delete();
                CarDepartment::where('car_id', $id)->delete();
                Car::where('id', $id)->delete();
            }
        }
        return response()->noContent();
    }
}
