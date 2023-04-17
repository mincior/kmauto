<?php

namespace App\Http\Controllers\Back;

use App\Models\Stat;
use App\Models\Brand;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StatStoreRequest;
use App\Http\Requests\StatUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class StatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $stats = Stat::select(sprintf('%s.*', (new Stat)->getTable()));
            return DataTables::of($stats)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.stats.index');
    }

    public function create()
    {
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        return view('back.stats.create', compact( 'brands'));
    }


    public function getStatStats($stat_id)
    {
        $stats = Stat::select("id", "name")->where('stat_id', '=', $stat_id)->get()->toArray();
        return $stats;
    }

    public function store(StatStoreRequest $request)
    {
        $stat = Stat::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.stats.index')->with('notification', $notification);
    }

    public function show(Stat $stat)
    {
        $stat->with('brand');
        return view('back.stats.show', compact('stat'));
    }

    public function edit(Stat $stat)
    {   
        $brands = Brand::get();
        $stat->with('brand');
        return view('back.stats.edit', compact('stat'))->with(compact('brands'));
    }

    public function update(StatUpdateRequest $request, Stat $stat)
    {
        $stat->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.stats.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Stat::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
