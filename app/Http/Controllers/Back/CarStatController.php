<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarStatStoreRequest;
use App\Http\Requests\CarStatUpdateRequest;
use App\Models\Country;
use App\Models\CarStat;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarStatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $carStats = CarStat::select(sprintf('%s.*', (new CarStat)->getTable()));
            return DataTables::of($carStats)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carStat_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carStats.carStat_last_name, ' ', carStats.carStat_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carStats.address_street, ' ', carStats.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carStats.address_postal_code, ' ', carStats.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.car_stats.index');
    }

    public function create()
    {
        $carStats = CarStat::query()->get();

        return view('back.car_stats.create')->with(compact('carStats'));
    }

    public function store(CarStatStoreRequest $request)
    {
        $carStat = CarStat::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.car-stats.index')->with('notification', $notification);
    }

    public function show(CarStat $carStat)
    {

        return view('back.car_stats.show', compact('carStat'));
    }

    public function edit(CarStat $carStat)
    {

        return view('back.car_stats.edit', compact('carStat'));
    }

    public function update(CarStatUpdateRequest $request, CarStat $carStat)
    {
        $carStat->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.car-stats.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        CarStat::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
