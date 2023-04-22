<?php

namespace App\Http\Controllers\Back;

use Countries;
use App\Models\Car;
use App\Models\Fuel;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\CarDep;
use App\Models\Setting;
use App\Models\UserCar;
use App\Models\Interval;
use App\Models\Department;
use App\Models\Availablecar;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use App\Models\CarDepartment;
use App\Models\CarConsumption;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\CarUpdateRequest;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Back\DepartmentController;

class CarController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autoComplete(Request $request)
    {

        $res = CarConsumption::select("valoare")
            ->where("valoare", "LIKE", "%{$request->term}%")
            ->get()->toArray();
        return response()->json($res);
    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            //aici poate ajunge din trei locuri. Daca vine din butonul din bara de navigare generala va afisa toate masinile
            //daca vine din foaia Departments sau din selectul Filala din Users, va afisa doar masinile filialei selectate
            $selectedInterval = config('global.selected_interval');
            $department_id = Setting::where('nume', 'departmentId')->where('interval_id', 1)->first()->valoare;
            $filtreazaDupaDepartament = Setting::where('nume', 'filtreazaDupaDepartament')->where('interval_id', 1)->first()->valoare;
            $cars = Car::with('fuel', 'brand', 'type')->select(sprintf('%s.*', (new Car)->getTable()))->orderBy('id', 'desc')->get();
            $arr_cars_with_departments = AppHelper::get_last_target_values_array('car_id', 'department_id', 'car_deps', $selectedInterval);
            $arr_cars_with_users = AppHelper::get_last_target_values_array('car_id', 'user_id', 'user_cars', $selectedInterval);
            $arr_cars_with_car_consumptions = AppHelper::get_last_target_values_array('car_id', 'id', 'car_consumptions', $selectedInterval);
            $arr_cars_with_car_activ = AppHelper::get_last_target_values_array('car_id', 'id', 'availablecars', $selectedInterval);

            //in cars avem deja brand si type acum luam fiecare masina si-i adaugam departamentul, userul, consumul mediu (car_consumption)
            //si activ,  asociate la momentul intervalului selectat
            foreach ($cars as $key=>$car) {
                @$car['departments'] = Department::where('id', $arr_cars_with_departments[$car->id])->get();
                @$car['users'] = User::where('id', $arr_cars_with_users[$car->id])->get();
                @$car['activ'] = Availablecar::where('id', $arr_cars_with_car_activ[$car->id])->get();
                @$car['car_consumptions'] = CarConsumption::where('id', $arr_cars_with_car_consumptions[$car->id])->get();
                //daca filtreaza dupa departament scoate celelalte masini
                if( @$arr_cars_with_departments[$car->id] != $department_id && $filtreazaDupaDepartament == 1){
                    unset($cars[$key]);
                }
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
        $fuels = Fuel::select('id', 'name')->orderBy('name')->get();
        return view('back.cars.create', compact('departments', 'brands', 'fuels'))->with('selectedInterval', $selectedInterval);
    }

    public function store(CarStoreRequest $request)
    {
        $selectedInterval = config('global.selected_interval');
        $data = $request->all();
        $consum_mediu = intval($data['consum_mediu']);
        $activ = intval($data['activ']);
        $user_id = intval($data['user_id']);
        $department_id = intval($data['department_id']);
        unset($data['consum_mediu']);
        unset($data['activ']);
        unset($data['user_id']);
        unset($data['department_id']);
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']);
        $car = Car::create($data);
        if ($car->id) { //daca s-a creat masina
            //aduaga departamentul, userul - optional, consumul mediu si activ in tabelele pivot
            CarDep::create(['department_id' => $department_id, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
            if ($user_id !== 0) UserCar::create(['user_id' => $user_id, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
            CarConsumption::create(['valoare' => $consum_mediu, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
            Availablecar::create(['valoare' => $activ, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
        }

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
        $fuel_name = Fuel::where('id', $car->fuel_id)->first()->name;
        $type_name = Type::where('id', $car->type_id)->first()->name;
        $activ= @Availablecar::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderBy('interval_id', 'desc')->first()->valoare;
        $user_id = @UserCar::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderBy('interval_id', 'desc')->first()->user_id;
        $user_name = @User::where('id', $user_id)->first()->name;
        $department_id = CarDep::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderBy('interval_id', 'desc')->first()->department_id;
        $department_name = Department::where('id', $department_id)->first()->name;
        $consum_mediu= @CarConsumption::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderBy('interval_id', 'desc')->first()->valoare;
        $data['selectedInterval'] = $selectedInterval;
        $data['brand_name'] = $brand_name;
        $data['fuel_name'] = $fuel_name;
        $data['type_name'] = $type_name;
        $data['activ'] = $activ;
        $merged_data['user_name'] = $user_name;
        $merged_data['consum_mediu'] = $consum_mediu;
        $merged_data['department_name'] = $department_name;


        return view('back.cars.show', $data, $merged_data)->with(compact('car'));
    }

    /**
     * Pregateste view pentru editare masina
     *
     * @param Car $car
     * @return void
     */
    public function edit(Car $car)
    {
        $selectedInterval = config('global.selected_interval');

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $dep_id = @CarDep::select('department_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '<=', $selectedInterval)
            ->orderBy('interval_id', 'desc')
            ->first()->department_id;
        //dd($dep_id);
        // $users = @Department::with('users')->where('id', '=', $dep_id)->get()[0]['users'];
        $users = @DepartmentController::getUsers($dep_id);

        //usr_id = o masina poate sa nu aiba un user alocat (nici userul o masina) 
        //de aceea s-a pus @UserCar... sa nu dea eroare daca $user_id este null
        $user_id = @UserCar::select('user_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '<=', $selectedInterval)
            ->orderBy('interval_id', 'desc')
            ->first()->user_id;
        $activ = @Availablecar::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'Desc')->first()->valoare;
        $consum_mediu = @CarConsumption::where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'Desc')->first()->valoare;
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        $fuels = Fuel::select('id', 'name')->orderBy('name')->get();
        $types = Type::where('brand_id', '=', $car->brand_id)->get();
        // dd($car->id, $dep_id, $user_id,  $activ, $consum_mediu);
        return view('back.cars.edit', compact('car'))
            ->with(compact('departments', 'users', 'brands', 'types', 'fuels'))
            ->with('dep_id', $dep_id)
            ->with('usr_id', $user_id)
            ->with('activ', $activ)
            ->with('consum_mediu', $consum_mediu)
            ->with('selectedInterval', $selectedInterval);
    }

    public function update(CarUpdateRequest $request, Car $car)
    {
        $selectedInterval = config('global.selected_interval');
        $data = $request->all();
        $consum_mediu = intval($data['consum_mediu']);
        $activ = intval($data['activ']);
        $user_id = intval($data['user_id']);
        $department_id = intval($data['department_id']);
        unset($data['consum_mediu']);
        unset($data['activ']);
        unset($data['user_id']);
        unset($data['department_id']);
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']);
        $succes = $car->update($data);
        // $car->users()->syncWithPivotValues([$data['user_id']],  ['interval_id' => intval($data['selected_interval'])]);
        // $car->departments()->syncWithPivotValues([$data['department_id']],  ['interval_id' => intval($data['selected_interval'])]);
        if ($succes) { //daca s-a modificat masina
            //proceseaza tabelele pivot
            //toate masinile sunt asignate unui departament atunci cand sunt create. Se verifica departamentul ultimului interval si daca difera de cel actual, il schimba
            if (!$department_id == 0) {
                $rec = CarDep::where('department_id', $department_id)->where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->department_id !== $department_id) { //s-a schimbat departamentul.
                        if ($rec->interval_id == $selectedInterval) { //s-a schimbat doar departamentul in intervalul curent
                            $rec->update(['department_id', $department_id]);
                        } else { // Creaza o noua inregistrare cu noul department_id dar cu intervalul curent
                            CarDep::create(['department_id' => $department_id, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
                        }
                    }
                } else {
                    CarDep::create(['department_id' => $department_id, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
                }
            }

            if ($user_id !== 0) {
                $rec = UserCar::where('user_id', $user_id)->where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->user_id !== $user_id) { //s-a schimbat userul.
                        if ($rec->interval_id == $selectedInterval) { //s-a schimbat doar departamentul in intervalul curent
                            $rec->update(['user_id', $user_id]);
                        } else { // Creaza o noua inregistrare cu noul user_id dar cu intervalul curent
                            UserCar::create(['user_id' => $user_id, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
                        }
                    }
                } else { //userul nu exista deloc
                    UserCar::create(['user_id' => $user_id, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
                }
            }

            if ($consum_mediu !== 0) {
                $rec = CarConsumption::where('valoare', $consum_mediu)->where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->valoare !== $consum_mediu) { //s-a schimbat consumul_mediu.
                        if ($rec->interval_id == $selectedInterval) { //s-a schimbat doar consumul_mediu in intervalul curent
                            $rec->update(['valoare', $consum_mediu]);
                        } else { // Creaza o noua inregistrare cu noul valoare dar cu intervalul curent
                            CarConsumption::create(['valoare' => $consum_mediu, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
                        }
                    }
                } else { //consumul_mediu nu exista deloc
                    CarConsumption::create(['valoare' => $consum_mediu, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
                }
            }

            $rec = Availablecar::where('valoare', $activ)->where('car_id', $car->id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'Desc')->first();
            if (!is_null($rec)) {
                if ($rec->valoare !== $activ) { //s-a schimbat consumul_mediu.
                    if ($rec->interval_id == $selectedInterval) { //s-a schimbat doar consumul_mediu in intervalul curent
                        $rec->update(['valoare', $activ]);
                    } else { // Creaza o noua inregistrare cu noul valoare dar cu intervalul curent
                        Availablecar::create(['valoare' => $activ, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
                    }
                }
            } else { //consumul_mediu nu exista deloc
                Availablecar::create(['valoare' => $activ, 'car_id' => $car->id, 'interval_id' => $selectedInterval]);
            }
        }

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
            if ($kmlog == null) { //masina se poate sterge
                //dar mai intai se sterg legaturile din tabelele pivot
                UserCar::where('car_id', $id)->delete();
                CarDep::where('car_id', $id)->delete();
                Availablecar::where('car_id', $id)->delete();
                CarConsumption::where('car_id', $id)->delete();

                //ar fi trebuit sa sterg si KmLog dar nu aici. Nu pot sterge o masina daca are inregistrari in Kmlog
                //De aceea stergerile din Kmlog se fac separat si numai daca este cazul.
                //si acum se sterge masina
                Car::where('id', $id)->delete();
            }
        }
        return response()->noContent();
    }
    public function getDepartmentCars(){
        // $department_id = Setting::where('nume', 'departmentId')->where('interval_id', 1)->first()->valoare;
        // $cars = DepartmentController::getCars($department_id);
        return view('back.cars.index');

    }

}
