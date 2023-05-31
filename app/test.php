<?php

namespace App\Http\Controllers\Back;

use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarAsigStoreRequest;
use App\Http\Requests\CarAsigUpdateRequest;
use App\Models\Country;
use App\Models\CarAsig;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class CarAsigController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->ajax()) {
            $carAsigs = CarAsig::with('car_asig_value', 'car_asig_interval', 'car_asig_car')->select(sprintf('%s.*', (new CarAsig)->getTable()));
            return DataTables::of($carAsigs)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                //formated date placeholder
                ->toJson();
        }

        return view('back.car_asigs.index');
    }//end function index

    public function create()
	{
		$carAsigValues = \App\Models\CarAsigValue::select('id', 'name')->orderBy('name')->get();
		$intervals = \App\Models\Interval::select('id', 'interval')->orderBy('interval')->get();
		$cars = \App\Models\Car::select('id', 'numar')->orderBy('numar')->get();
		 return view('back.car_asigs.create', compact('carAsigValues', 'intervals', 'cars')); 
	}
	//end function create


    public function store(CarAsigStoreRequest $request)
    {
        $carAsig = CarAsig::create($request->all());
        $notification = ["type" => "success", "title" => 'Add ...', "message" => 'Item added.',];

        return redirect()->route('back.car-asigs.index')->with('notification', $notification);
    }//end function store

    public function show(CarAsig $carAsig)
    {

        return view('back.car_asigs.show', compact('carAsig'));
    }//end function show

    public function edit(CarAsig $carAsig)
    {

        return view('back.car_asigs.edit', compact('carAsig'));
    }//end function edit

    public function update(CarAsigUpdateRequest $request, CarAsig $carAsig)
    {
        $carAsig->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-asigs.index')->with('notification', $notification);
    }//end function update

    public function massDestroy(Request $request)
    {
        foreach (CarAsig::whereIn('id', request('ids'))->get() as $delete) {
            $delete->delete();
         }

        return response()->noContent();
    }//end function massDestroy
}
