<?php

namespace App\Http\Controllers\Back;

use App\Models\Interval;
use App\Models\Month;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\IntervalStoreRequest;
use App\Http\Requests\IntervalUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class IntervalController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $intervals = Interval::with('month')->select(sprintf('%s.*', (new Interval)->getTable()));
            return DataTables::of($intervals)->toJson();
        }
        return view('back.intervals.index');
    }

    public function create()
    {
        $months = Month::orderBy('id')->get();
        return view('back.intervals.create', compact( 'months'));
    }


    public function getIntervalMonth($interval_id)
    {
        $month = Month::select("id", "anul_luna")->where('interval_id', '=', $interval_id)->get()->toArray();
        return $month;
    }

    public function store(IntervalStoreRequest $request)
    {
        $interval = Interval::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.intervals.index')->with('notification', $notification);
    }

    public function show(Interval $interval)
    {
        $interval->with('month');
        return view('back.intervals.show', compact('interval'));
    }

    public function edit(Interval $interval)
    {
        $months = Month::get();
        $interval->with('month');
        return view('back.intervals.edit', compact('interval'))->with(compact('months'));
    }

    public function update(IntervalUpdateRequest $request, Interval $interval)
    {
        $interval->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.intervals.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        $arr_luni_neinchise = Month::where('inchisa', 0)->get()->toArray();
        $intervals = Interval::whereIn('id', request('ids'));
        foreach($intervals as $interval){
            if(in_array($interval->month_id , $arr_luni_neinchise)){
                $interval->delete();
            }
        }

        return response()->noContent();
    }
}
