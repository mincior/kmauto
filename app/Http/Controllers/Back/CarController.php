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
            $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
            $department_id = Setting::where('nume', 'departmentId')->where('interval_id', 1)->first()->valoare;
            $cars = Car::with('fuel', 'brand', 'type')->select(sprintf('%s.*', (new Car)->getTable()))->orderBy('id', 'desc')->get();
            $arr_cars_with_departments = AppHelper::get_last_target_values_array('car_id', 'department_id', 'car_deps', $selected_interval_id);
            $arr_cars_with_users = AppHelper::get_last_target_values_array('car_id', 'user_id', 'user_cars', $selected_interval_id);
            $arr_cars_with_car_consumptions = AppHelper::get_last_target_values_array('car_id', 'id', 'car_consumptions', $selected_interval_id);
            $arr_cars_with_car_activ = AppHelper::get_last_target_values_array('car_id', 'id', 'availablecars', $selected_interval_id);

            //in cars avem deja brand si type acum luam fiecare masina si-i adaugam departamentul, userul, consumul mediu (car_consumption)
            //si activ,  asociate la momentul intervalului selectat
            foreach ($cars as $key => $car) {
                @$car['departments'] = Department::where('id', $arr_cars_with_departments[$car->id])->get();
                @$car['users'] = User::where('id', $arr_cars_with_users[$car->id])->get();
                @$car['activ'] = Availablecar::where('id', $arr_cars_with_car_activ[$car->id])->get();
                @$car['car_consumptions'] = CarConsumption::where('id', $arr_cars_with_car_consumptions[$car->id])->get();
                //daca filtreaza dupa departament scoate celelalte masini
                if (@$arr_cars_with_departments[$car->id] != $department_id && $department_id > 0) {
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
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        $fuels = Fuel::select('id', 'name')->orderBy('name')->get();
        return view('back.cars.create', compact('departments', 'brands', 'fuels'))->with('selected_interval', $selected_interval_id);
    }

    public function store(CarStoreRequest $request)
    {
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
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
        $user_name = @User::where('id', $user_id)->first()->name;
        $car_number = @Car::where('id', $car->id)->first()->numar;
    
        if ($car->id) { //daca s-a creat masina
            //aduaga departamentul, userul - optional, consumul mediu si activ in tabelele pivot
            CarDep::create(['department_id' => $department_id, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
            if ($user_id !== 0) { //daca este specificat un user
                //verifica daca acel user are asociata o alta masina pe intervalul selectat
                $asociat_id = @UserCar::where('user_id', $user_id)->where('interval_id', $selected_interval_id)->first()->id;
                if ($asociat_id) { //daca da, schimba id-ul masinii asociate deja cu id-ul masinii create
                    UserCar::where('id', $asociat_id)->update(['car_id' => $car->id, 'user' => $user_name, 'masina' => $car_number]);
                } else {
                    UserCar::create(['user_id' => $user_id, 'car_id' => $car->id, 'interval_id' => $selected_interval_id, 'observatii' => 'asociere la creare masina', 'user' => $user_name, 'masina' => $car_number]);
                }
            }
            CarConsumption::create(['valoare' => $consum_mediu, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
            Availablecar::create(['valoare' => $activ, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
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
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;

        $brand_name = Brand::where('id', $car->brand_id)->first()->name;
        $fuel_name = Fuel::where('id', $car->fuel_id)->first()->name;
        $type_name = Type::where('id', $car->type_id)->first()->name;
        $activ = @Availablecar::where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->valoare;
        $user_id = @UserCar::where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->user_id;
        $user_name = @User::where('id', $user_id)->first()->name;
        $department_id = CarDep::where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->department_id;
        $department_name = Department::where('id', $department_id)->first()->name;
        $consum_mediu = @CarConsumption::where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->valoare;
        $data['selected_interval'] = $selected_interval_id;
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
        //pune in source pagina de unde a venit request-ul pentru a se intoarce tot acolo dupa update
        $edit_source = redirect()->back()->getTargetUrl();
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $dep_id = @CarDep::select('department_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '<=', $selected_interval_id)
            ->orderBy('interval_id', 'desc')
            ->first()->department_id;
        //dd($dep_id);
        // $users = @Department::with('users')->where('id', '=', $dep_id)->get()[0]['users'];
        $users = @DepartmentController::getUnAssociatedUsers($dep_id);

        //usr_id = o masina poate sa nu aiba un user alocat (nici userul o masina) 
        //de aceea s-a pus @UserCar... sa nu dea eroare daca $user_id este null
        $user_id = @UserCar::select('user_id', 'interval_id', 'car_id')
            ->where('car_id', $car->id)
            ->where('interval_id', '<=', $selected_interval_id)
            ->orderBy('interval_id', 'desc')
            ->first()->user_id;
        $activ = @Availablecar::where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first()->valoare;
        $consum_mediu = @CarConsumption::where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first()->valoare;
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
            ->with('selected_interval', $selected_interval_id)
            ->with('edit_source', $edit_source);
    }

    public function update(CarUpdateRequest $request, Car $car)
    {
        //poate ajunge aici din Car/edit sau kmlog/index/[asociaza utilizatorul]
        //$edit_source tine pagina care a trimis aici si catre care se face la final (dupa update) redirect
        //$edit_source e transmis din sursa prin pagina de edit printr-un input type='hidden'
        $edit_source = $request->edit_source;

        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
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
                $rec = CarDep::where('department_id', $department_id)->where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->department_id !== $department_id) { //s-a schimbat departamentul.
                        if ($rec->interval_id == $selected_interval_id) { //s-a schimbat doar departamentul in intervalul curent
                            $rec->update(['department_id', $department_id]);
                        } else { // Creaza o noua inregistrare cu noul department_id dar cu intervalul curent
                            CarDep::create(['department_id' => $department_id, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
                        }
                    }
                } else {
                    CarDep::create(['department_id' => $department_id, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
                }
            }

            //verifica daca exista o asociere a masinii editate in intervalul curent
            $masina_asociata_crt_id =  @UserCar::where('car_id', $car->id)->where('interval_id',  $selected_interval_id)->first()->id;
            $user_name = @User::where('id', $user_id)->first()->name;
            $car_number = @Car::where('id', $car->id)->first()->numar;
            if ($user_id !== 0) { //daca este specificat un user
                //verifica daca userul specificat este deja asociat la alta masina
                $userul_asociat_crt_id =  @UserCar::where('user_id', $user_id)->where('interval_id',  $selected_interval_id)->first()->id;
                //returneaza id-ul userului ultimei asocieri a masinii editate
                $userul_la_ultima_asociere_a_masinii_id = @UserCar::where('car_id', $car->id)->where('interval_id', '<', $selected_interval_id)->orderby('interval_id', 'desc')->first()->user_id;
                if (!$masina_asociata_crt_id) {//nu exista o asociere a masinii editate
                    if(!$userul_asociat_crt_id ){//dar userul selectat nu este deja asociat
                        UserCar::create(['user_id' => $user_id, 'car_id' => $car->id, 'interval_id' => $selected_interval_id, 'observatii' => 'asociere noua la modificare masina', 'user' => $user_name, 'masina' => $car_number]);
                    }else{
                        UserCar::where('id', $userul_asociat_crt_id)->update(['car_id' => $car->id, 'observatii' => 'asociere masina la user la modificare masina', 'user' => $user_name, 'masina' => $car_number]);
                    }
                    
                }else{//exista o asociere pe masina editata
                    if(!$userul_asociat_crt_id ){//dar userul selectat nu este deja asociat
                        UserCar::where('id', $masina_asociata_crt_id)->update(['user_id' => $user_id, 'observatii' => 'asociere user la masina la modificare masina', 'user' => $user_name, 'masina' => $car_number]);
                    }else{
                        if ($masina_asociata_crt_id != $userul_asociat_crt_id){
                            UserCar::where('id', $userul_asociat_crt_id)->update(['car_id' => $car->id, 'observatii' => 'asociere masina cu stergere la modificare masina', 'user' => $user_name, 'masina' => $car_number]);
                            UserCar::where('id', $masina_asociata_crt_id)->delete();
                        }else{
                            UserCar::where('id', $masina_asociata_crt_id)->update(['user_id' => $user_id, 'observatii' => 'asociere user la modificare masina', 'user' => $user_name, 'masina' => $car_number]);
                        }
                    }
                }
            }else{//nu este specificat un user
                if($masina_asociata_crt_id ) {
                    UserCar::where('id',$masina_asociata_crt_id )->delete();
                }
            }

            if ($consum_mediu !== 0) {
                $rec = CarConsumption::where('valoare', $consum_mediu)->where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->valoare !== $consum_mediu) { //s-a schimbat consumul_mediu.
                        if ($rec->interval_id == $selected_interval_id) { //s-a schimbat doar consumul_mediu in intervalul curent
                            $rec->update(['valoare', $consum_mediu]);
                        } else { // Creaza o noua inregistrare cu noul valoare dar cu intervalul curent
                            CarConsumption::create(['valoare' => $consum_mediu, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
                        }
                    }
                } else { //consumul_mediu nu exista deloc
                    CarConsumption::create(['valoare' => $consum_mediu, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
                }
            }

            $rec = Availablecar::where('valoare', $activ)->where('car_id', $car->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first();
            if (!is_null($rec)) {
                if ($rec->valoare !== $activ) { //s-a schimbat consumul_mediu.
                    if ($rec->interval_id == $selected_interval_id) { //s-a schimbat doar consumul_mediu in intervalul curent
                        $rec->update(['valoare', $activ]);
                    } else { // Creaza o noua inregistrare cu noul valoare dar cu intervalul curent
                        Availablecar::create(['valoare' => $activ, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
                    }
                }
            } else { //consumul_mediu nu exista deloc
                Availablecar::create(['valoare' => $activ, 'car_id' => $car->id, 'interval_id' => $selected_interval_id]);
            }
        }

        $notification = [
            "type" => "success",
            "title" => 'Modificare ...',
            "message" => 'Masina a fost modificata cu succes!',
        ];
        //redirectul se face catre pagina care a trimis
        return redirect($edit_source)->with('notification', $notification);
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
    public function getDepartmentCars()
    {
        // $department_id = Setting::where('nume', 'departmentId')->where('interval_id', 1)->first()->valoare;
        // $cars = DepartmentController::getUnAssociatedCars($department_id);
        return view('back.cars.index');
    }
}
