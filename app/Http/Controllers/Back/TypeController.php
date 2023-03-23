<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeStoreRequest;
use App\Http\Requests\TypeUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class TypeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $types = Type::with(['brand', 'type', 'department'])->select(sprintf('%s.*', (new Type)->getTable()));
            return DataTables::of($types)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->editColumn('brand_id', function ($row) {
                    return $row->brand->name;
                })
                ->editColumn('type_id', function ($row) {
                    return $row->type->name;
                })
                ->editColumn('department_id', function ($row) {
                    return $row->department->name;
                })
                ->toJson();
        }
        return view('back.types.index');
    }

    public function create()
    {
        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        return view('back.types.create', compact('departments', 'brands'));
    }

    public function getDepartmentTypes($department_id)
    {
        $departments = Type::select("id", "numar")->where('department_id', '=', $department_id)->get()->toArray();
        return $departments;
    }

    public function getBrandTypes($brand_id)
    {
        $brands = Type::select("id", "name")->where('brand_id', '=', $brand_id)->get()->toArray();
        dd($brands);
        return $brands;
    }

    public function store(TypeStoreRequest $request)
    {
        $type = Type::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.types.index')->with('notification', $notification);
    }

    public function show(Type $type)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.types.show', compact('type'))->with(compact('countries'));
    }

    public function edit(Type $type)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.types.edit', compact('type'))->with(compact('countries'));
    }

    public function update(TypeUpdateRequest $request, Type $type)
    {
        $type->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.types.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Type::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
