<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarPropStoreRequest;
use App\Http\Requests\CarPropUpdateRequest;
use App\Models\Country;
use App\Models\CarProp;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarPropController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $carProps = CarProp::with('car_prop_interval', 'car_prop_car', 'car_prop_value')->select(sprintf('%s.*', (new CarProp)->getTable()));
            return DataTables::of($carProps)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carProp_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carProps.carProp_last_name, ' ', carProps.carProp_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carProps.address_street, ' ', carProps.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carProps.address_postal_code, ' ', carProps.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.car_props.index');
    }//end function index

    public function create()
	{
		$intervals = \App\Models\Interval::select('id', 'interval')->orderBy('interval')->get();
		$cars = \App\Models\Car::select('id', 'numar')->orderBy('numar')->get();
		$carPropValues = \App\Models\CarPropValue::select('id', 'name')->orderBy('name')->get();
		 return view('back.car_props.create', compact('intervals', 'cars', 'carPropValues')); 
	}
	//end function create

    public function store(CarPropStoreRequest $request)
    {
        $carProp = CarProp::create($request->all());
        $notification = ["type" => "success", "title" => 'Add ...', "message" => 'Item added.',];

        return redirect()->route('back.car-props.index')->with('notification', $notification);
    }//end function store

    public function show(CarProp $carProp)
    {

        return view('back.car_props.show', compact('carProp'));
    }//end function show

    public function edit()
	{
		$carProp = \App\Models\CarProp::query()->get();
		$intervals = \App\Models\Interval::select('id', 'interval')->orderBy('interval')->get();
		$cars = \App\Models\Car::select('id', 'numar')->orderBy('numar')->get();
		$carPropValues = \App\Models\CarPropValue::select('id', 'name')->orderBy('name')->get();
		return view('back.car_props.create', compact('carProp', 'intervals', 'cars', 'carPropValues')); 
	}

	//end function edit

    public function update(CarPropUpdateRequest $request, CarProp $carProp)
    {
        $carProp->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-props.index')->with('notification', $notification);
    }//end function update

    public function massDestroy(Request $request)
    {
        CarProp::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }//end function massDestroy
}
