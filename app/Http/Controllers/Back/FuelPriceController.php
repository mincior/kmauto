<?php

namespace App\Http\Controllers\Back;

use App\Models\Fuel;
use App\Models\Type;
use App\Models\Month;
use App\Models\Interval;
use App\Models\FuelPrice;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\FuelPriceStoreRequest;
use App\Http\Requests\FuelPriceUpdateRequest;

class FuelPriceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {    
            $fuel_prices = FuelPrice::with('fuel', 'interval')->select(sprintf('%s.*', (new FuelPrice)->getTable()))->get();
            //adauga luna intervalului
            foreach($fuel_prices as $fuel_price){
                @$fuel_price['month'] = Month::where('id', Interval::where('id', $fuel_price->interval_id)->first()->month_id)->first()->anul_luna;
            }
            return DataTables::of($fuel_prices)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.fuel_prices.index');
    }

    public function create()
    {
        $fuels = Fuel::get();
        return view('back.fuel_prices.create', compact('fuels'));
    }


    public function getFuelPriceTypes($fuel_price_id)
    {
        $fuel_prices = Type::select("id", "name")->where('fuel_id', '=', $fuel_price_id)->get()->toArray();
        return $fuel_prices;
    }

    public function store(FuelPriceStoreRequest $request)
    {
        $fuel_price = FuelPrice::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.fuels.index')->with('notification', $notification);
    }

    public function show(FuelPrice $fuel_price)
    {
        return view('back.fuels.show', compact('fuel'));
    }

    public function edit(FuelPrice $fuel_price)
    {
        return view('back.fuels.edit', compact('fuel'));
    }

    public function update(FuelPriceUpdateRequest $request, FuelPrice $fuel_price)
    {
        $fuel_price->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.fuels.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        FuelPrice::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
