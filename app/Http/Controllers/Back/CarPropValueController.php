<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarPropValueStoreRequest;
use App\Http\Requests\CarPropValueUpdateRequest;
use App\Models\Country;
use App\Models\CarPropValue;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarPropValueController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $carPropValues = CarPropValue::select(sprintf('%s.*', (new CarPropValue)->getTable()));
            return DataTables::of($carPropValues)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carPropValue_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carPropValues.carPropValue_last_name, ' ', carPropValues.carPropValue_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carPropValues.address_street, ' ', carPropValues.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carPropValues.address_postal_code, ' ', carPropValues.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.car_prop_values.index');
    }

    public function create()
    {
        $carPropValues = CarPropValue::query()->get();

        return view('back.car_prop_values.create')->with(compact('carPropValues'));
    }

    public function store(CarPropValueStoreRequest $request)
    {
        $carPropValue = CarPropValue::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.car-prop-values.index')->with('notification', $notification);
    }

    public function show(CarPropValue $carPropValue)
    {

        return view('back.car_prop_values.show', compact('carPropValue'));
    }

    public function edit(CarPropValue $carPropValue)
    {

        return view('back.car_prop_values.edit', compact('carPropValue'));
    }

    public function update(CarPropValueUpdateRequest $request, CarPropValue $carPropValue)
    {
        $carPropValue->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-prop-values.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        CarPropValue::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
