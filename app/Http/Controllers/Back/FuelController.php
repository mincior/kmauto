<?php

namespace App\Http\Controllers\Back;

use App\Models\Fuel;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuelStoreRequest;
use App\Http\Requests\FuelUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class FuelController extends Controller
{
    public function getFuels() 
    {
        $fuels = Fuel::select("id", "valoare")->get()->toArray();
        return $fuels;
    }

    public function saveFuels(Request $request) 
    {
        $valoare =$request->all();
        $exista = @Fuel::where('valoare', $valoare)->first()->valoare;
        if(!(is_null($exista) == false)){
            Fuel::create($valoare);
            return 'Consum mediu salvat.';
        }else{
            return 'Valoarea exista deja.';
            
        }
    }

    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {          
    //         $types = Fuel::with(['brand', 'type', 'department'])->select(sprintf('%s.*', (new Fuel)->getTable()));
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

    // public function store(FuelStoreRequest $request)
    // {
    //     $type = Fuel::create($request->all());

    //     $notification = [
    //         "type" => "success",
    //         "title" => 'Add ...',
    //         "message" => 'Item added.',
    //     ];

    //     return redirect()->route('back.types.index')->with('notification', $notification);
    // }

    // public function show(Fuel $type)
    // {
    //     $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

    //     return view('back.types.show', compact('type'))->with(compact('countries'));
    // }

    // public function edit(Fuel $type)
    // {
    //     $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

    //     return view('back.types.edit', compact('type'))->with(compact('countries'));
    // }

    // public function update(FuelUpdateRequest $request, Fuel $type)
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
    //     Fuel::whereIn('id', request('ids'))->delete();

    //     return response()->noContent();
    // }
}
