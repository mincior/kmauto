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
    }

    public function create()
    {
        $carProps = CarProp::query()->get();

        return view('back.car_props.create')->with(compact('carProps'));
    }

    public function store(CarPropStoreRequest $request)
    {
        $carProp = CarProp::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.car-props.index')->with('notification', $notification);
    }

    public function show(CarProp $carProp)
    {

        return view('back.car_props.show', compact('carProp'));
    }

    public function edit(CarProp $carProp)
    {

        return view('back.car_props.edit', compact('carProp'));
    }

    public function update(CarPropUpdateRequest $request, CarProp $carProp)
    {
        $carProp->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-props.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        CarProp::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
