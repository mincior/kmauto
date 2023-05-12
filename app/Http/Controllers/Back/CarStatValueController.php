<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarStatValueStoreRequest;
use App\Http\Requests\CarStatValueUpdateRequest;
use App\Models\Country;
use App\Models\CarStatValue;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarStatValueController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $carStatValues = CarStatValue::select(sprintf('%s.*', (new CarStatValue)->getTable()));
            return DataTables::of($carStatValues)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carStatValue_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carStatValues.carStatValue_last_name, ' ', carStatValues.carStatValue_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carStatValues.address_street, ' ', carStatValues.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carStatValues.address_postal_code, ' ', carStatValues.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.car_stat_values.index');
    }

    public function create()
    {
        $carStatValues = CarStatValue::query()->get();

        return view('back.car_stat_values.create')->with(compact('carStatValues'));
    }

    public function store(CarStatValueStoreRequest $request)
    {
        $carStatValue = CarStatValue::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.car-stat-values.index')->with('notification', $notification);
    }

    public function show(CarStatValue $carStatValue)
    {

        return view('back.car_stat_values.show', compact('carStatValue'));
    }

    public function edit(CarStatValue $carStatValue)
    {

        return view('back.car_stat_values.edit', compact('carStatValue'));
    }

    public function update(CarStatValueUpdateRequest $request, CarStatValue $carStatValue)
    {
        $carStatValue->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-stat-values.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        CarStatValue::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
