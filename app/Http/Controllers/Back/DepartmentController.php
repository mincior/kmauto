<?php

namespace App\Http\Controllers\Back;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentStoreRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class DepartmentController extends Controller
{
    public function getUsers($department_id)
    {
        
        //trebuie rezolvat sa returneze userii functie de interval Se pune ->where('interval_id', '>=' , $interval_id) dar trebuie adus $interval_id
        $users = Department::with('users')->where('id', '=', $department_id)->get()[0]['users'];
        return $users;
    }

    public function getCars($department_id)
    {
        //trebuie rezolvat sa returneze masinile functie de interval
        $cars = Department::with('cars')->where('id', '=', $department_id)->get()[0]['cars'];
        return $cars;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $departments = Department::with(['brand', 'department', 'department'])->select(sprintf('%s.*', (new Department)->getTable()));
            return DataTables::of($departments)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->editColumn('brand_id', function ($row) {
                    return $row->brand->name;
                })
                ->editColumn('department_id', function ($row) {
                    return $row->department->name;
                })
                ->toJson();
        }
        return view('back.departments.index');
    }

    public function create()
    {
        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        return view('back.departments.create', compact('departments', 'brands'));
    }


    public function store(DepartmentStoreRequest $request)
    {
        $department = Department::create($request->all());

        $notification = [
            "department" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.departments.index')->with('notification', $notification);
    }

    public function show(Department $department)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.departments.show', compact('department'))->with(compact('countries'));
    }

    public function edit(Department $department)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.departments.edit', compact('department'))->with(compact('countries'));
    }

    public function update(DepartmentUpdateRequest $request, Department $department)
    {
        $department->update($request->all());

        $notification = [
            "department" => "success",
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
