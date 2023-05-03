<?php

namespace App\Http\Controllers\Back;

use App\Models\Car;
use App\Models\User;
use App\Models\Brand;
use App\Models\Month;
use App\Models\Country;
use App\Models\UserCar;
use App\Models\Interval;
use App\Models\Department;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\DepartmentStoreRequest;
use App\Http\Requests\DepartmentUpdateRequest;

class DepartmentController extends Controller
{
    public static function getUsers($department_id)
    {
        if (!($department_id == null)) {
            $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;

            $users_id = AppHelper::get_last_target_values_array('user_id', 'department_id', 'user_deps', $selected_interval_id, "department_id = $department_id");
            $user_ids = array_keys($users_id);
            $useri_asociati_ids = UserCar::where('interval_id', '<=', $selected_interval_id)->get()->pluck('user_id')->toArray();
            $users = User::whereIn('id', $user_ids);
            //$users= $users->whereNotIn('id', $useri_asociati_ids);
            $users = $users->get();
            return $users;
        }
    }

    public static function getCars($department_id)
    {
        if (!($department_id == null)) {
            $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;

            $cars_id = AppHelper::get_last_target_values_array('car_id', 'department_id', 'car_deps', $selected_interval_id, "department_id = $department_id");
            $car_ids = array_keys($cars_id);
            $masini_asociate_ids = UserCar::where('interval_id', '<=', $selected_interval_id)->get()->pluck('car_id')->toArray();
            $cars = Car::whereIn('id', $car_ids);
            //$cars = $cars->whereNotIn('id', $masini_asociate_ids);
            $cars=$cars->get();
            return $cars;
        }
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $departments = Department::select(sprintf('%s.*', (new Department)->getTable()));
            return DataTables::of($departments)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.departments.index');
    }

    public function create()
    {
        return view('back.departments.create');
    }


    public function store(DepartmentStoreRequest $request)
    {
        Department::create($request->all());
        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.departments.index')->with('notification', $notification);
    }

    public function show(Department $department)
    {
        return view('back.departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('back.departments.edit', compact('department'));
    }

    public function update(DepartmentUpdateRequest $request, Department $department)
    {
        $department->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.departments.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Department::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
