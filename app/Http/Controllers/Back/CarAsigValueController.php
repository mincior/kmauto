<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarAsigValueStoreRequest;
use App\Http\Requests\CarAsigValueUpdateRequest;
use App\Models\Country;
use App\Models\CarAsigValue;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarAsigValueController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $carAsigValues = CarAsigValue::select(sprintf('%s.*', (new CarAsigValue)->getTable()));
            return DataTables::of($carAsigValues)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carAsigValue_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigValues.carAsigValue_last_name, ' ', carAsigValues.carAsigValue_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigValues.address_street, ' ', carAsigValues.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigValues.address_postal_code, ' ', carAsigValues.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.car_asig_values.index');
    }

    public function create()
    {
        $carAsigValues = CarAsigValue::query()->get();

        return view('back.car_asig_values.create')->with(compact('carAsigValues'));
    }

    public function store(CarAsigValueStoreRequest $request)
    {
        $carAsigValue = CarAsigValue::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.car-asig-values.index')->with('notification', $notification);
    }

    public function show(CarAsigValue $carAsigValue)
    {

        return view('back.car_asig_values.show', compact('carAsigValue'));
    }

    public function edit(CarAsigValue $carAsigValue)
    {

        return view('back.car_asig_values.edit', compact('carAsigValue'));
    }

    public function update(CarAsigValueUpdateRequest $request, CarAsigValue $carAsigValue)
    {
        $carAsigValue->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-asig-values.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        CarAsigValue::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
