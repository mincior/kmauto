<?php

namespace App\Http\Controllers\Back;

use App\Models\CarConsumption;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarConsumptionStoreRequest;
use App\Http\Requests\CarConsumptionUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class CarConsumptionController extends Controller
{
    public function getCarConsumptions() 
    {
        $car_consumptions = CarConsumption::select("id", "valoare")->get()->toArray();
        return $car_consumptions;
    }

    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {          
    //         $types = CarConsumption::with(['brand', 'type', 'department'])->select(sprintf('%s.*', (new CarConsumption)->getTable()));
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

    // public function store(CarConsumptionStoreRequest $request)
    // {
    //     $type = CarConsumption::create($request->all());

    //     $notification = [
    //         "type" => "success",
    //         "title" => 'Add ...',
    //         "message" => 'Item added.',
    //     ];

    //     return redirect()->route('back.types.index')->with('notification', $notification);
    // }

    // public function show(CarConsumption $type)
    // {
    //     $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

    //     return view('back.types.show', compact('type'))->with(compact('countries'));
    // }

    // public function edit(CarConsumption $type)
    // {
    //     $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

    //     return view('back.types.edit', compact('type'))->with(compact('countries'));
    // }

    // public function update(CarConsumptionUpdateRequest $request, CarConsumption $type)
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
    //     CarConsumption::whereIn('id', request('ids'))->delete();

    //     return response()->noContent();
    // }
}
