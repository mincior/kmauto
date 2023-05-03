<?php

namespace App\Http\Controllers\Back;

use Countries;
use App\Models\Car;
use App\Models\User;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\Setting;
use App\Models\UserCar;
use App\Models\UserDep;
use App\Models\Interval;
use App\Models\UserPhone;
use App\Models\Department;
use App\Models\UserKmlimit;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use App\Models\Availableuser;
use App\Models\CarConsumption;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Database\Factories\UserKmlimitFactory;

class UserController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            //aici poate ajunge din trei locuri. Daca vine din butonul din bara de navigare generala va afisa toti userii
            //daca vine din foaia Departments sau din selectul Filala din Users, va afisa doar userii filialei selectate
            $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
            $department_id = Setting::where('nume', 'departmentId')->where('interval_id', 1)->first()->valoare;
            $users = User::select(sprintf('%s.*', (new User)->getTable()))->orderBy('id', 'desc')->get();
            $arr_users_with_departments = AppHelper::get_last_target_values_array('user_id', 'department_id', 'user_deps', $selected_interval_id);
            $arr_users_with_cars = AppHelper::get_last_target_values_array('user_id', 'car_id', 'user_cars', $selected_interval_id);
            $arr_users_with_user_activ = AppHelper::get_last_target_values_array('user_id', 'id', 'availableusers', $selected_interval_id);
            $arr_users_with_user_phones = AppHelper::get_last_target_values_array('user_id', 'id', 'user_phones', $selected_interval_id);
            $arr_users_with_user_kmlimits = AppHelper::get_last_target_values_array('user_id', 'id', 'user_kmlimits', $selected_interval_id);

            //in cars avem deja brand si type acum luam fiecare masina si-i adaugam departamentul, userul si consumul mediu (car_consumption)
            //asociate la momentul intervalului selectat
            foreach ($users as $key=>$user){
                @$user['departments'] = Department::where('id', $arr_users_with_departments[$user->id])->get();
                @$user['cars'] = Car::where('id', $arr_users_with_cars[$user->id])->get();
                @$user['activ'] = Availableuser::where('id', $arr_users_with_user_activ[$user->id])->get();
                @$user['phones'] = UserPhone::where('id', $arr_users_with_user_phones[$user->id])->get();
                @$user['kmlimits'] = UserKmlimit::where('id', $arr_users_with_user_kmlimits[$user->id])->get();
                //daca filtreaza dupa departament scoate ceilalti useri
                if( @$arr_users_with_departments[$user->id] != $department_id && $department_id>0){
                    unset($users[$key]);
                }
           }
               
            return DataTables::of($users)
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
        return view('back.users.index');
    }

    public function create()
    {
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        return view('back.users.create', compact('departments'))->with('selected_interval', $selected_interval_id);
    }


    public function store(UserStoreRequest $request)
    {
       $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $data = $request->all();
        $activ = intval($data['activ']);
        $car_id = intval($data['car_id']);
        $department_id = intval($data['department_id']);
        $kmlimit = intval($data['kmlimit']);
        $telefon = intval($data['telefon']);
        unset($data['telefon']);
        unset($data['activ']);
        unset($data['car_id']);
        unset($data['department_id']);
        unset($data['kmlimit']);
        $data['name'] = ucwords($data['name']);

        $user = User::create($data);
        $user_name = @User::where('id', $user->id)->first()->name;
        $car_number = @Car::where('id', $car_id)->first()->numar;

        if ($user->id){//daca s-a creat userul
            //aduaga departamentul, userul - optional, consumul mediu si activ in tabelele pivot
            UserDep::create(['department_id' => $department_id, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
            UserPhone::create(['valoare' => $telefon, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
            UserKmlimit::create(['valoare' => $kmlimit, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
            if ($car_id !== 0) { //daca este specificat un car
                //verifica daca acel car are asociata o alta masina pe intervalul selectat
                $asociat_id = @UserCar::where('car_id', $car_id)->where('interval_id', $selected_interval_id)->first()->id;
                if ($asociat_id) { //daca da, schimba id-ul masinii asociate deja cu id-ul masinii create
                    UserCar::where('id', $asociat_id)->update(['user_id' => $user->id, 'masina' => $car_number, 'masina' => $user_name]);
                } else {
                    UserCar::create(['car_id' => $car_id, 'user_id' => $user->id, 'interval_id' => $selected_interval_id, 'observatii' => 'asociere la creare masina', 'masina' => $car_number, 'masina' => $user_name]);
                }
            }
            Availableuser::create(['valoare' => $activ, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
        }
        $notification = [
            "type" => "success",
            "title" => 'Adaugare ...',
            "message" => 'Masina a fost adaugata cu succes!',
        ];

        return redirect()->route('back.users.index')->with('notification', $notification);
    }

    public function show(User $user)
    {
        $data = [];
        $data1 = [];
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $car_id = @UserCar::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->car_id;
        $numar = @Car::where('id', $car_id)->first()->numar;
        $department_id = @UserDep::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->department_id;
        $department_name = Department::where('id', $department_id)->first()->name;
        $telefon= @UserPhone::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->valoare;
        $kmlimit= @UserKmlimit::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->valoare;
        $activ= @Availableuser::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderBy('interval_id', 'desc')->first()->valoare;
        $department_name = Department::where('id', $department_id)->first()->name;
        $data['selected_interval'] = $selected_interval_id;
        $merged_data['numar'] = $numar;
        $merged_data['telefon'] = $telefon;
        $merged_data['kmlimit'] = $kmlimit;
        $merged_data['activ'] = $activ;
        $merged_data['department_name'] = $department_name;


        return view('back.users.show', $data, $merged_data)->with(compact('user'));
    }

    public function edit(User $user)
    {
        //pune in source pagina de unde a venit request-ul pentru a se intoarce tot acolo dupa update
        $edit_source = redirect()->back()->getTargetUrl();
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $dep_id = @UserDep::select('department_id', 'interval_id', 'user_id')
            ->where('user_id', $user->id)
            ->where('interval_id', '<=', $selected_interval_id)
            ->orderBy('interval_id', 'desc')
            ->first()->department_id;
        // $cars = @Department::with('cars')->where('id', '=', $dep_id)->get()[0]['cars'];
        $cars = @DepartmentController::getCars($dep_id);
        $activ = @Availableuser::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first()->valoare;
        $telefon = @UserPhone::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first()->valoare;
        $kmlimit = @UserKmlimit::where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first()->valoare;

        //usr_id = o masina poate sa nu aiba un user alocat (nici userul o masina) 
        //de aceea s-a pus @UserUser... sa nu dea eroare daca $usr_id este null
        $car_id = @UserCar::select('car_id', 'interval_id', 'user_id')
            ->where('user_id', $user->id)
            ->where('interval_id', '<=', $selected_interval_id)
            ->orderBy('interval_id', 'desc')
            ->first()->car_id;
        return view('back.users.edit', compact('user'))
            ->with(compact('departments', 'cars'))
            ->with('dep_id', $dep_id)
            ->with('car_id', $car_id)
            ->with('activ', $activ)
            ->with('telefon', $telefon)
            ->with('kmlimit', $kmlimit)
            ->with('selected_interval', $selected_interval_id)
            ->with('edit_source', $edit_source);
            
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        //poate ajunge aici din User/edit sau kmlog/index/[asociaza masina]
        //$edit_source tine pagina care a trimis aici si catre care se face la final (dupa update) redirect
        //$edit_source e transmis din sursa prin pagina de edit printr-un input type='hidden'
        $edit_source = $request->edit_source;

        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $data = $request->all();
        $activ = intval($data['activ']);
        $car_id = intval($data['car_id']);
        $department_id = intval($data['department_id']);
        $kmlimit = intval($data['kmlimit']);
        $telefon = $data['telefon'];

        unset($data['activ']);
        unset($data['car_id']);
        unset($data['department_id']);
        unset($data['kmlimit']);
        unset($data['telefon']);
        $succes = $user->update($data);
        if ($succes){
            if (!$department_id == 0) {
                $rec = UserDep::where('department_id', $department_id)->where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->department_id !== $department_id) { //s-a schimbat departamentul.
                        if ($rec->interval_id == $selected_interval_id) { //s-a schimbat doar departamentul in intervalul curent
                            $rec->update(['department_id', $department_id]);
                        } else { // Creaza o noua inregistrare cu noul department_id dar cu intervalul curent
                            UserDep::create(['department_id' => $department_id, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
                        }
                    }
                } else {
                    UserDep::create(['department_id' => $department_id, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
                }
            }

            //verifica daca exista o asociere a masinii editate in intervalul curent
            $utilizatorul_asociat_crt_id =  @UserCar::where('user_id', $user->id)->where('interval_id',  $selected_interval_id)->first()->id;
            $car_number = @Car::where('id', $car_id)->first()->numar;
            $user_name = @User::where('id', $user->id)->first()->name;
            if ($car_id !== 0) { //daca este specificat un car
                //verifica daca masina specificat este deja asociata la alta utilizatorul
                $masina_asociata_crt_id =  @UserCar::where('car_id', $car_id)->where('interval_id',  $selected_interval_id)->first()->id;
                //returneaza id-ul masinaui ultimei asocieri a masinii editate
                $masina_la_ultima_asociere_a_masinii_id = @UserCar::where('user_id', $user->id)->where('interval_id', '<', $selected_interval_id)->orderby('interval_id', 'desc')->first()->car_id;
                if (!$utilizatorul_asociat_crt_id) {//nu exista o asociere a masinii editate
                    if(!$masina_asociata_crt_id ){//dar masina selectat nu este deja asociata
                        UserCar::create(['car_id' => $car_id, 'user_id' => $user->id, 'interval_id' => $selected_interval_id, 'observatii' => 'asociere noua la modifiusere utilizatorul', 'masina' => $car_number, 'user' => $user_name]);
                    }else{
                        UserCar::where('id', $masina_asociata_crt_id)->update(['user_id' => $user->id, 'observatii' => 'asociere utilizatorul la car la modifiusere utilizatorul', 'masina' => $car_number, 'user' => $user_name]);
                    }
                    
                }else{//exista o asociere pe utilizatorul editata
                    if(!$masina_asociata_crt_id ){//dar masina selectat nu este deja asociata
                        UserCar::where('id', $utilizatorul_asociat_crt_id)->update(['car_id' => $car_id, 'observatii' => 'asociere car la utilizatorul la modifiusere utilizatorul', 'masina' => $car_number, 'user' => $user_name]);
                    }else{
                        if ($utilizatorul_asociat_crt_id != $masina_asociata_crt_id){
                            UserCar::where('id', $masina_asociata_crt_id)->update(['user_id' => $user->id, 'observatii' => 'asociere utilizatorul cu stergere la modifiusere utilizatorul', 'masina' => $car_number, 'user' => $user_name]);
                            UserCar::where('id', $utilizatorul_asociat_crt_id)->delete();
                        }else{
                            UserCar::where('id', $utilizatorul_asociat_crt_id)->update(['car_id' => $car_id, 'observatii' => 'asociere car la modifiusere utilizatorul', 'masina' => $car_number, 'user' => $user_name]);
                        }
                    }
                }
            }else{//nu este specificat un car
                if($utilizatorul_asociat_crt_id ) {
                    UserCar::where('id', $utilizatorul_asociat_crt_id )->delete();
                }
            }

            $rec = Availableuser::where('valoare', $activ)->where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first();
            if (!is_null($rec)) {
                if ($rec->valoare !== $activ) { //s-a schimbat consumul_mediu.
                    if ($rec->interval_id == $selected_interval_id) { //s-a schimbat doar consumul_mediu in intervalul curent
                        $rec->update(['valoare', $activ]);
                    } else { // Creaza o noua inregistrare cu noul valoare dar cu intervalul curent
                        Availableuser::create(['valoare' => $activ, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
                    }
                }
            } else { //consumul_mediu nu exista deloc
                Availableuser::create(['valoare' => $activ, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
            }

            if ($telefon !== 0) {
                $rec = UserPhone::where('valoare', $telefon)->where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->valoare !== $telefon) { //s-a schimbat consumul_mediu.
                        if ($rec->interval_id == $selected_interval_id) { //s-a schimbat doar consumul_mediu in intervalul curent
                            $rec->update(['valoare', $telefon]);
                        } else { // Creaza o noua inregistrare cu noul valoare dar cu intervalul curent
                            UserPhone::create(['valoare' => $telefon, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
                        }
                    }
                } else { //consumul_mediu nu exista deloc
                    UserPhone::create(['valoare' => $telefon, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
                }
            }

            if ($kmlimit !== 0) {
                $rec = UserKmlimit::where('valoare', $kmlimit)->where('user_id', $user->id)->where('interval_id', '<=', $selected_interval_id)->orderby('interval_id', 'Desc')->first();
                if (!is_null($rec)) {
                    if ($rec->valoare !== $kmlimit) { //s-a schimbat consumul_mediu.
                        if ($rec->interval_id == $selected_interval_id) { //s-a schimbat doar consumul_mediu in intervalul curent
                            $rec->update(['valoare', $kmlimit]);
                        } else { // Creaza o noua inregistrare cu noul valoare dar cu intervalul curent
                            UserKmlimit::create(['valoare' => $kmlimit, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
                        }
                    }
                } else { //consumul_mediu nu exista deloc
                    UserKmlimit::create(['valoare' => $kmlimit, 'user_id' => $user->id, 'interval_id' => $selected_interval_id]);
                }
            }


        }

        $notification = [
            "type" => "success",
            "title" => 'Modificare ...',
            "message" => 'Utilizatorul a fost modificat cu succes!',
        ];

        //redirectul se face catre pagina care a trimis
        return redirect($edit_source)->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        $user_for_delete_ids = $request->ids;
        foreach ($user_for_delete_ids as $id) {
            $kmlog = Kmlog::where('user_id', $id)->first();
            if ($kmlog == null) {//masina se poate sterge
                //dar mai intai se sterg legaturile din tabelele pivot
                UserCar::where('user_id', $id)->delete();
                UserDep::where('user_id', $id)->delete();
                UserPhone::where('user_id', $id)->delete();
                UserKmlimit::where('user_id', $id)->delete();
                Availableuser::where('user_id', $id)->delete();

                //Ar fi trebuit sa sterg si Kmlog aici Nu pot sterge un user daca are inregistrari in kmlog
                //De aceea stergerile din Kmlog se fac separat si numai daca este cazul.
                //si acum se sterge userul
                User::where('id', $id)->delete();
            }
        }
        return response()->noContent();
    }
    public function getDepartmentUsers(){
        $department_id = Setting::where('nume', 'departmentId')->where('interval_id', 1)->first()->valoare;
        $users = DepartmentController::getUsers($department_id);

        return view('back.users.index', $users);

    }
}
