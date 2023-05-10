<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarAsigStoreRequest;
use App\Http\Requests\CarAsigUpdateRequest;
use App\Models\Country;
use App\Models\CarAsig;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarAsigController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $carAsigs = CarAsig::select(sprintf('%s.*', (new CarAsig)->getTable()));
            return DataTables::of($carAsigs)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carAsig_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigs.carAsig_last_name, ' ', carAsigs.carAsig_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigs.address_street, ' ', carAsigs.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigs.address_postal_code, ' ', carAsigs.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.car_asigs.index');
    }

    public function create()
    {
        $carAsigs = CarAsig::query()->get();

        return view('back.car_asigs.create')->with(compact('carAsigs'));
    }

    public function store(CarAsigStoreRequest $request)
    {
        $carAsig = CarAsig::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.car-asigs.index')->with('notification', $notification);
    }

    public function show(CarAsig $carAsig)
    {

        return view('back.car_asigs.show', compact('carAsig'));
    }

    public function edit(CarAsig $carAsig)
    {

        return view('back.car_asigs.edit', compact('carAsig'));
    }

    public function update(CarAsigUpdateRequest $request, CarAsig $carAsig)
    {
        $carAsig->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-asigs.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        CarAsig::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
