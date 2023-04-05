<?php

namespace App\Http\Controllers\Back;

use App\Models\Car;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Month;
use App\Models\CarUser;
use App\Models\Country;
use App\Models\Interval;
use App\Models\Department;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use App\Models\CarDepartment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class CarController extends Controller
{

    public function index(Request $request)
    {   
        if ($request->ajax()) {          
            // $cars = Car::with('brand','departments','type', 'user')->get();
            //     dd($cars[0]);
            $cars = Car::with('brand','type', 'departments', 'users')->select(sprintf('%s.*', (new Car)->getTable()))->orderBy('id', 'desc');
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
        $selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();
    
        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        // $users = User::select('id', 'name')->orderBy('name')->get();
        return view('back.cars.create', compact('departments', 'brands'))->with('selectedMonth', $selectedMonth)->with('selectedInterval', $selectedInterval);
    }


    public function store(CarStoreRequest $request)
    {
        //In request avem campurile necesare (proprietatea name din html)
        //In CarStoreRequest se face validarea
        $data = $request->all();
        //scoate un numar de forma B-87-CLT din (B87CLT, B-87CLT, B#$%$%$87(*&^%^&*(cLt)), etc. )
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']); 
        
        //scrie masina noua 
        $car = Car::create($data);

        //scrie id-urile in tabelele pivot precum si intervalul curent (momentul crearii)
        $car->users()->syncWithPivotValues([$data['user_id']],  ['interval_id' => intval($data['selected_interval'])]);
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
        $data=[];
        $data1=[];
        $selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();
        $brand_name = Brand::where('id', $car->brand_id)->first()->name;
        $type_name = Type::where('id', $car->type_id)->first()->name;
        $user_id = CarUser::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval->id)->first()->user_id;
        $user_name = User::where('id', $user_id)->first()->name;
        $department_id = CarDepartment::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval->id)->first()->department_id;
        $department_name = Department::where('id', $department_id)->first()->name;
        $data['selectedMonth'] = $selectedMonth->id;
        $data['selectedInterval'] = $selectedInterval->id;
        $data['brand_name'] = $brand_name;
        $data['type_name'] = $type_name;
        $merged_data['user_name'] = $user_name;
        $merged_data['department_name'] = $department_name;


        return view('back.cars.show', $data, $merged_data)->with(compact('car'));
    }

    public function edit(Car $car)
    {
        $selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $dep_id = CarDepartment::select('department_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '<=', $selectedInterval->id)
            ->orderBy('interval_id', 'desc')
            ->first()['department_id'];
        $users = Department::with('users')->where('id', '=', $dep_id)->get()[0]['users'];

        //usr_id = o masina poate sa nu aiba un user alocat (nici userul o masina) 
        //de aceea s-a pus @CarUser... sa nu dea eroare daca $usr_id este null
        $usr_id = @CarUser::select('user_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '<=', $selectedInterval->id)
            ->orderBy('interval_id', 'desc')
            ->first()['user_id'];
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        $types = Type::where('brand_id', '=', $car->brand_id)->get();

        return view('back.cars.edit', compact('car'))
        ->with(compact('departments', 'users','brands', 'types'))
        ->with('dep_id', $dep_id)
        ->with('usr_id', $usr_id)
        ->with('selectedMonth', $selectedMonth)
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
        Car::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
