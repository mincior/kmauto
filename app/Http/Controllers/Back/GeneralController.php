<?php

namespace App\Http\Controllers\Back;

use App\Models\Month;
use App\Models\Interval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function setValueDB(Request $request)
    {
        try {
            DB::table($request->table)->where('id', $request->id)->update([$request->key => $request->value]);

            $notification = [
                "type" => "success",
                "title" => 'Editing ...',
                "message" => 'Item updated.',
            ];

        } catch (QueryException $e) {
            $notification = [
                "type" => "error",
                "title" => 'Editing ...',
                "message" => $e->getMessage(),
            ];
        }

        return response()->json($notification);
    }

    public function setValueMonthSelect(Request $request)
    {
        $months = Month::select('select')->update(array('select' => 0));
        $months= Month::where('id', $request->value)->update(array('select' => 1));
        return response()->noContent();
    }

     public function setValueIntervalSelect(Request $request)
    {
        $months = Interval::select('select')->update(array('select' => 0));
        $months= Interval::where('id', $request->value)->update(array('select' => 1));
        return response()->noContent();
    }
   public function getMonthIntervals($month_id)
    {
        $intervale = Interval::Select('id', 'interval')->where('month_id', '=', $month_id)->get()->toArray();
        return $intervale;
    }

    public function getDatatablesHelp()
    {
        return view('back.components.datatables-help')->render();
    }
}
