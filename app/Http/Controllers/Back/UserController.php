<?php

namespace App\Http\Controllers\Back;

use Countries;
use App\Models\Car;
use App\Models\User;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\CarFuel;
use App\Models\UserCar;
use App\Models\UserDep;
use App\Models\Interval;
use App\Models\UserPhone;
use App\Models\Department;
use App\Models\UserKmlimit;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use App\Models\Availableuser;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Database\Factories\UserKmlimitFactory;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $selectedInterval = config('global.selected_interval');
            $users = User::select(sprintf('%s.*', (new User)->getTable()))->orderBy('id', 'desc')->get();

            $arr_users_with_departments = AppHelper::get_last_target_values_array('user_id', 'department_id', 'user_deps', $selectedInterval);
            $arr_users_with_cars = AppHelper::get_last_target_values_array('user_id', 'car_id', 'user_cars', $selectedInterval);
            $arr_users_with_user_activ = AppHelper::get_last_target_values_array('user_id', 'id', 'availableusers', $selectedInterval);
            $arr_users_with_user_phones = AppHelper::get_last_target_values_array('user_id', 'id', 'user_phones', $selectedInterval);
            $arr_users_with_user_kmlimits = AppHelper::get_last_target_values_array('user_id', 'id', 'user_kmlimits', $selectedInterval);


            //in cars avem deja brand si type acum luam fiecare masina si-i adaugam departamentul, userul si consumul mediu (car_fuel)
            //asociate la momentul intervalului selectat
            foreach ($users as $user){
                @$user['departments'] = Department::where('id', $arr_users_with_departments[$user->id])->get();
                @$user['cars'] = Car::where('id', $arr_users_with_cars[$user->id])->get();
                @$user['activ'] = Availableuser::where('id', $arr_users_with_user_activ[$user->id])->get();
                @$user['phones'] = UserPhone::where('id', $arr_users_with_user_phones[$user->id])->get();
                @$user['kmlimits'] = UserKmlimit::where('id', $arr_users_with_user_kmlimits[$user->id])->get();
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
        $selectedInterval = config('global.selected_interval');

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        return view('back.users.create', compact('departments'))->with('selectedInterval', $selectedInterval);
    }


    public function store(UserStoreRequest $request)
    {
       $selectedInterval = config('global.selected_interval');
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
        if ($user->id){//daca s-a creat userul
            //aduaga departamentul, userul - optional, consumul mediu si activ in tabelele pivot
            UserDep::create(['department_id' => $department_id, 'user_id' => $user->id, 'interval_id' => $selectedInterval]);
            UserPhone::create(['valoare' => $telefon, 'user_id' => $user->id, 'interval_id' => $selectedInterval]);
            UserKmlimit::create(['valoare' => $kmlimit, 'user_id' => $user->id, 'interval_id' => $selectedInterval]);
            if($car_id !== 0) UserCar::create(['car_id' => $car_id, 'user_id' => $user->id, 'interval_id' => $selectedInterval]);
            Availableuser::create(['valoare' => $activ, 'user_id' => $user->id, 'interval_id' => $selectedInterval]);
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
        $selectedInterval = config('global.selected_interval');
        $user_id = @UserCar::where('user_id', $user->id)->where('interval_id', '>=', $selectedInterval)->first()->user_id;
        $user_name = @User::where('id', $user_id)->first()->name;
        $department_id = UserDep::where('user_id', $user->id)->where('interval_id', '>=', $selectedInterval)->first()->department_id;
        $department_name = Department::where('id', $department_id)->first()->name;
        $data['selectedInterval'] = $selectedInterval;
        $merged_data['user_name'] = $user_name;
        $merged_data['department_name'] = $department_name;


        return view('back.users.show', $data, $merged_data)->with(compact('user'));
    }

    public function edit(User $user)
    {
        $selectedInterval = config('global.selected_interval');

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $dep_id = UserDep::select('department_id', 'interval_id', 'user_id')
            ->where('user_id', $user->id)
            ->where('interval_id', '>=', $selectedInterval)
            ->orderBy('interval_id', 'desc')
            ->first()['department_id'];
        $users = Department::with('users')->where('id', '=', $dep_id)->get()[0]['users'];

        //usr_id = o masina poate sa nu aiba un user alocat (nici userul o masina) 
        //de aceea s-a pus @UserUser... sa nu dea eroare daca $usr_id este null
        $usr_id = @UserCar::select('car_id', 'interval_id', 'user_id')
            ->where('user_id', $user->id)
            ->where('interval_id', '>=', $selectedInterval)
            ->orderBy('interval_id', 'desc')
            ->first()['user_id'];

        return view('back.users.edit', compact('user'))
            ->with(compact('departments', 'users', 'brands', 'types'))
            ->with('dep_id', $dep_id)
            ->with('usr_id', $usr_id)
            ->with('selectedInterval', $selectedInterval);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        //In request avem campurile necesare (proprietatea name din html)
        //In UserStoreRequest se face validarea
        $data = $request->all();
        //scoate un numar de forma B-87-CLT din (B87CLT, B-87CLT, B#$%$%$87(*&^%^&*(cLt)), etc. )
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']);

        //scrie masina noua 
        $user->update($data);

        //scrie id-urile in tabelele pivot precum si intervalul curent (momentul crearii)
        $user->cars()->syncWithPivotValues([$data['car_id']],  ['interval_id' => intval($data['selected_interval'])]);
        $user->departments()->syncWithPivotValues([$data['department_id']],  ['interval_id' => intval($data['selected_interval'])]);

        $notification = [
            "type" => "success",
            "title" => 'Modificare ...',
            "message" => 'Masina a fost modificata cu succes!',
        ];

        return redirect()->route('back.users.index')->with('notification', $notification);
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
}
