<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\FuelPrice;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuelPriceStoreRequest;
use App\Http\Requests\FuelPriceUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class FuelPriceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $fuel_prices = FuelPrice::select(sprintf('%s.*', (new FuelPrice)->getTable()));
            return DataTables::of($fuel_prices)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.fuels.index');
    }

    public function create()
    {
        return view('back.fuels.create');
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
