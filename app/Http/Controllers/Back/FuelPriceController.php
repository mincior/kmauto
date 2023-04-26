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
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $data = $request->all();
        $data['interval_id'] = $selected_interval_id;
        $fuel_price = FuelPrice::create($data);

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.fuel-prices.index')->with('notification', $notification);
    }

    public function show(FuelPrice $fuel_price)
    {
        $fuel_name = Fuel::where('id', $fuel_price->fuel_id)->first()->name;
        $interval = Interval::where('id', $fuel_price->interval_id)->first()->interval;
        $month_interval = Month::where('id',  $fuel_price->interval_id)->first()->anul_luna . " : ". $interval;
        return view('back.fuel_prices.show', compact('fuel_name', 'fuel_price', 'month_interval'));
    }

    public function edit(FuelPrice $fuel_price)
    {
        $fuel_name = Fuel::where('id', $fuel_price->fuel_id)->first()->name;
        $interval = Interval::where('id', $fuel_price->interval_id)->first()->interval;
        $month_interval = Month::where('id',  $fuel_price->interval_id)->first()->anul_luna . " : ". $interval;
        return view('back.fuel_prices.edit', compact('fuel_name', 'fuel_price', 'month_interval'));
    }

    public function update(FuelPriceUpdateRequest $request, FuelPrice $fuel_price)
    {
        $data= $request->all();
        //$data['fuel_id'] = Fuel::where('name', $data['fuel_id'])->first()->id;
        $fuel_price->update($data);
        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.fuel-prices.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        FuelPrice::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
