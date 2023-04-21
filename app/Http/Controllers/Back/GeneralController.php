<?php

namespace App\Http\Controllers\Back;

use App\Models\Month;
use App\Models\Setting;
use App\Models\Interval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;
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
        //sterge selectul pentru toate lunile
        $query = Month::select('select')->update(array('select' => 0));

        //si seteaza selectul doar pentru luna month_id
        $query= Month::where('id', $request->month_id)->update(array('select' => 1));

        //scrie o singura data luna selectata in config
        $interval_selectat= @Interval::where('month_id', $request->month_id)->where('select', 1)->first()->id;
        if(!$interval_selectat){
            $interval_selectat= Interval::where('month_id', $request->month_id)->orderby('id', 'desc')->first()->id;
        }
        File::put( env('APP_PATH', '/var/www/kmauto') . '/config/global.php', "<?php return ['selected_month' => $request->month_id, 'selected_interval' => $interval_selectat];");
        return response()->noContent();
    }

     public function setValueIntervalSelect(Request $request)
    {
        //sterge selectul pentru toate intervalele lunii selectate
        $query = Interval::select('select', 'month_id')->where('month_id', $request->month_id)->update(array('select' => 0));

        //si seteaza selectul doar pentru intervalul selectat al lunii selectate
        $query= Interval::where('month_id', $request->month_id)->where('id', $request->interval_id)->update(array('select' => 1));
        
        //scrie o singura data intervalul selectat in config
        File::put( env('APP_PATH', '/var/www/kmauto') . '/config/global.php', "<?php return ['selected_month' => $request->month_id, 'selected_interval' => $request->interval_id];");
        return response()->noContent();
    }

    public function setButonSelectat(Request $request){
        $query= Setting::where('nume', "butonSelectat")->update(array('valoare' => $request->valoare));

    }
    public function setMonthId(Request $request){
        $query= Setting::where('nume', "monthId")->where('interval_id', 1)->update(array('valoare' => $request->valoare));

    }

    public function getMonthIntervals($month_id)
    {
        //returneaza toate intervalele lunii selectate
        $intervale = Interval::Select('id', 'interval', 'select')->where('month_id', '=', $month_id)->get()->toArray();
        return $intervale;
    }

    public function getDatatablesHelp()
    {
        return view('back.components.datatables-help')->render();
    }
}
