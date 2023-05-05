<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\Carsecond;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarsecondStoreRequest;
use App\Http\Requests\CarsecondUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class CarsecondController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {   
            $carseconds = Carsecond::with('car')->select(sprintf('%s.*', (new Carsecond)->getTable()));
            return DataTables::of($carseconds)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.carseconds.index');
    }

    public function create()
    {
        return view('back.carseconds.create');
    }


    public function getCarsecondTypes($carsecond_id)
    {
        $carseconds = Type::select("id", "name")->where('carsecond_id', '=', $carsecond_id)->get()->toArray();
        return $carseconds;
    }

    public function store(CarsecondStoreRequest $request)
    {
        $carsecond = Carsecond::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.carseconds.index')->with('notification', $notification);
    }

    public function show(Carsecond $carsecond)
    {
        return view('back.carseconds.show', compact('carsecond'));
    }

    public function edit(Carsecond $carsecond)
    {
        return view('back.carseconds.edit', compact('carsecond'));
    }

    public function update(CarsecondUpdateRequest $request, Carsecond $carsecond)
    {
        $carsecond->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.carseconds.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Carsecond::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
