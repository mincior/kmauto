<?php

namespace App\Http\Controllers\Back;

use App\Models\CarFuel;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarFuelStoreRequest;
use App\Http\Requests\CarFuelUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class CarFuelController extends Controller
{
    public function getCarFuels() 
    {
        $car_fuels = CarFuel::select("id", "valoare")->get()->toArray();
        return $car_fuels;
    }

    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {          
    //         $types = CarFuel::with(['brand', 'type', 'department'])->select(sprintf('%s.*', (new CarFuel)->getTable()));
    //         return DataTables::of($types)
    //             ->addColumn('DT_RowId', function ($row) {
    //                 return $row->id;
    //             })
    //             ->editColumn('brand_id', function ($row) {
    //                 return $row->brand->name;
    //             })
    //             ->editColumn('type_id', function ($row) {
    //                 return $row->type->name;
    //             })
    //             ->editColumn('department_id', function ($row) {
    //                 return $row->department->name;
    //             })
    //             ->toJson();
    //     }
    //     return view('back.types.index');
    // }

    // public function create()
    // {
    //     $departments = Department::select('id', 'name')->orderBy('name')->get();
    //     $brands = Brand::select('id', 'name')->orderBy('name')->get();
    //     return view('back.types.create', compact('departments', 'brands'));
    // }

    // public function store(CarFuelStoreRequest $request)
    // {
    //     $type = CarFuel::create($request->all());

    //     $notification = [
    //         "type" => "success",
    //         "title" => 'Add ...',
    //         "message" => 'Item added.',
    //     ];

    //     return redirect()->route('back.types.index')->with('notification', $notification);
    // }

    // public function show(CarFuel $type)
    // {
    //     $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

    //     return view('back.types.show', compact('type'))->with(compact('countries'));
    // }

    // public function edit(CarFuel $type)
    // {
    //     $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

    //     return view('back.types.edit', compact('type'))->with(compact('countries'));
    // }

    // public function update(CarFuelUpdateRequest $request, CarFuel $type)
    // {
    //     $type->update($request->all());

    //     $notification = [
    //         "type" => "success",
    //         "title" => 'Edit ...',
    //         "message" => 'Item updated.',
    //     ];

    //     return redirect()->route('back.types.index')->with('notification', $notification);
    // }

    // public function massDestroy(Request $request)
    // {
    //     CarFuel::whereIn('id', request('ids'))->delete();

    //     return response()->noContent();
    // }
}
