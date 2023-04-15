<?php

namespace App\Http\Controllers\Back;

use App\Models\Interval;
use App\Models\Month;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\MonthStoreRequest;
use App\Http\Requests\MonthUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class MonthController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $months = Month::select(sprintf('%s.*', (new Month)->getTable()));
            return DataTables::of($months)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.months.index');
    }

    public function create()
    {
        return view('back.months.create');
    }


    public function getMonthIntervals($month_id)
    {
        $intervas = Interval::where('month_id', '=', $month_id)->get()->toArray();
        return $intervas;
    }

    public function store(MonthStoreRequest $request)
    {
        $month = Month::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.months.index')->with('notification', $notification);
    }

    public function show(Month $month)
    {
        return view('back.months.show', compact('month'));
    }

    public function edit(Month $month)
    {
        return view('back.months.edit', compact('month'));
    }

    public function update(MonthUpdateRequest $request, Month $month)
    {
        $month->update($request->all());

        $notification = [
            "interval" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.months.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Month::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
