<?php

namespace App\Http\Controllers\Back;

use Countries;
use App\Models\Fuel;
use App\Models\User;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\CarUser;
use App\Models\Interval;
use App\Models\Department;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use App\Models\UserDepartment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::with( 'departments', 'cars')->select(sprintf('%s.*', (new User)->getTable()))->orderBy('id', 'desc');
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
        $selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        return view('back.users.create', compact('departments'))->with('selectedMonth', $selectedMonth)->with('selectedInterval', $selectedInterval);
    }


    public function store(UserStoreRequest $request)
    {
        //In request avem campurile necesare (proprietatea name din html)
        //In UserStoreRequest se face validarea
        $data = $request->all();
        //scoate un numar de forma B-87-CLT din (B87CLT, B-87CLT, B#$%$%$87(*&^%^&*(cLt)), etc. )
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']);

        //scrie masina noua 
        $user = User::create($data);

        //scrie id-urile in tabelele pivot precum si intervalul curent (momentul crearii)
        @$user->cars()->syncWithPivotValues([$data['car_id']],  ['interval_id' => intval($data['selected_interval'])]);
        $user->departments()->syncWithPivotValues([$data['department_id']],  ['interval_id' => intval($data['selected_interval'])]);

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
        $selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();
        $user_id = @CarUser::where('user_id', $user->id)->where('interval_id', '>=', $selectedInterval->id)->first()->user_id;
        $user_name = @User::where('id', $user_id)->first()->name;
        $department_id = UserDepartment::where('user_id', $user->id)->where('interval_id', '>=', $selectedInterval->id)->first()->department_id;
        $department_name = Department::where('id', $department_id)->first()->name;
        $data['selectedMonth'] = $selectedMonth->id;
        $data['selectedInterval'] = $selectedInterval->id;
        $merged_data['user_name'] = $user_name;
        $merged_data['department_name'] = $department_name;


        return view('back.users.show', $data, $merged_data)->with(compact('user'));
    }

    public function edit(User $user)
    {
        $selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();

        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $dep_id = UserDepartment::select('department_id', 'interval_id', 'user_id')
            ->where('user_id', $user->id)
            ->where('interval_id', '>=', $selectedInterval->id)
            ->orderBy('interval_id', 'desc')
            ->first()['department_id'];
        $users = Department::with('users')->where('id', '=', $dep_id)->get()[0]['users'];

        //usr_id = o masina poate sa nu aiba un user alocat (nici userul o masina) 
        //de aceea s-a pus @UserUser... sa nu dea eroare daca $usr_id este null
        $usr_id = @CarUser::select('car_id', 'interval_id', 'user_id')
            ->where('user_id', $user->id)
            ->where('interval_id', '>=', $selectedInterval->id)
            ->orderBy('interval_id', 'desc')
            ->first()['user_id'];

        return view('back.users.edit', compact('user'))
            ->with(compact('departments', 'users', 'brands', 'types'))
            ->with('dep_id', $dep_id)
            ->with('usr_id', $usr_id)
            ->with('selectedMonth', $selectedMonth)
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
                CarUser::where('user_id', $id)->delete();
                UserDepartment::where('user_id', $id)->delete();
                User::where('id', $id)->delete();
            }
        }
        return response()->noContent();
    }
}
