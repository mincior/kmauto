<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\Fuel;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuelStoreRequest;
use App\Http\Requests\FuelUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class FuelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {   
            $fuels = Fuel::select(sprintf('%s.*', (new Fuel)->getTable()));
            return DataTables::of($fuels)
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


    public function getFuelTypes($fuel_id)
    {
        $fuels = Type::select("id", "name")->where('fuel_id', '=', $fuel_id)->get()->toArray();
        return $fuels;
    }

    public function store(FuelStoreRequest $request)
    {
        $fuel = Fuel::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.fuels.index')->with('notification', $notification);
    }

    public function show(Fuel $fuel)
    {
        return view('back.fuels.show', compact('fuel'));
    }

    public function edit(Fuel $fuel)
    {
        return view('back.fuels.edit', compact('fuel'));
    }

    public function update(FuelUpdateRequest $request, Fuel $fuel)
    {
        $fuel->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.fuels.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Fuel::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
