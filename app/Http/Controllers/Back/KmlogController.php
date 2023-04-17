<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\Interval;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\KmlogStoreRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\KmlogUpdateRequest;

class KmlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $kmlogs = Kmlog::with('stat', 'user', 'car', 'interval')->select(sprintf('%s.*', (new Kmlog)->getTable()))->get();
            foreach($kmlogs as $kmlog){
                @$kmlog['month'] = Month::where('id', Interval::where('id', $kmlog->interval_id)->first()->month_id)->first()->anul_luna;
            }

            return DataTables::of($kmlogs)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.kmlogs.index');
    }

    public function create()
    {
        return view('back.kmlogs.create');
    }


    public function getKmlogTypes($kmlog_id)
    {
        $kmlogs = Type::select("id", "name")->where('kmlog_id', '=', $kmlog_id)->get()->toArray();
        return $kmlogs;
    }

    public function store(KmlogStoreRequest $request)
    {
        $kmlog = Kmlog::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.kmlogs.index')->with('notification', $notification);
    }

    public function show(Kmlog $kmlog)
    {
        return view('back.kmlogs.show', compact('kmlog'));
    }

    public function edit(Kmlog $kmlog)
    {
        return view('back.kmlogs.edit', compact('kmlog'));
    }

    public function update(KmlogUpdateRequest $request, Kmlog $kmlog)
    {
        $kmlog->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.kmlogs.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Kmlog::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
