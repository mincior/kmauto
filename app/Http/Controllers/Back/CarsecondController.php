<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarsecondStoreRequest;
use App\Http\Requests\CarsecondUpdateRequest;
use App\Models\Country;
use App\Models\Carsecond;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarsecondController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $carseconds = Carsecond::select(sprintf('%s.*', (new Carsecond)->getTable()));
            return DataTables::of($carseconds)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carsecond_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carseconds.carsecond_last_name, ' ', carseconds.carsecond_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carseconds.address_street, ' ', carseconds.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carseconds.address_postal_code, ' ', carseconds.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.carseconds.index');
    }

    public function create()
    {
        $carseconds = Carsecond::query()->get();

        return view('back.carseconds.create')->with(compact('carseconds'));
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
