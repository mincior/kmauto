<?php

namespace App\Http\Controllers\Back;

use App\Models\Month;
use App\Models\Setting;
use App\Models\UserCar;
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
        $query = Month::where('id', $request->month_id)->update(array('select' => 1));

        //scrie o singura data luna selectata in config
        $interval_selectat = @Interval::where('month_id', $request->month_id)->where('select', 1)->first()->id;
        if (!$interval_selectat) {
            $interval_selectat = Interval::where('month_id', $request->month_id)->orderby('id', 'desc')->first()->id;
        }
        File::put(env('APP_PATH', '/var/www/kmauto') . '/config/global.php', "<?php return ['selected_month' => $request->month_id, 'selected_interval' => $interval_selectat];");
        return response()->noContent();
    }

    public function setValueIntervalSelect(Request $request)
    {
        //sterge selectul pentru toate intervalele lunii selectate
        $query = Interval::select('select', 'month_id')->where('month_id', $request->month_id)->update(array('select' => 0));

        //si seteaza selectul doar pentru intervalul selectat al lunii selectate
        $query = Interval::where('month_id', $request->month_id)->where('id', $request->interval_id)->update(array('select' => 1));

        //scrie o singura data intervalul selectat in config
        File::put(env('APP_PATH', '/var/www/kmauto') . '/config/global.php', "<?php return ['selected_month' => $request->month_id, 'selected_interval' => $request->interval_id];");
        return response()->noContent();
    }

    public function setButonSelectat(Request $request)
    {
        $query = Setting::where('nume', "butonSelectat")->update(array('valoare' => $request->valoare));
    }
    public function setMonthId(Request $request)
    {
        $query = Setting::where('nume', "monthId")->where('interval_id', 1)->update(array('valoare' => $request->valoare));
    }
    public function setBrandId(Request $request)
    {
        $query = Setting::where('nume', "brandId")->where('interval_id', 1)->update(array('valoare' => $request->valoare));
    }
    public function setDepartmentId(Request $request)
    {
        if ($request->valoare == "0") {
            //daca vine din butoanele de navigare User si Car atunci pune filtreazaDupaDepartament pe 0 si in controlerele User si Car, metoda index va afisa tot
            Setting::where('nume', "departmentId")->where('interval_id', 1)->update(array('valoare' => 1));
            Setting::where('nume', "filtreazaDupaDepartament")->where('interval_id', 1)->update(array('valoare' => 0));
        } else {
            //daca vine din tabelul departments, unde avem doua butoane sus (User si Car) va pune filtreazaDupaDepartament pe 1 si va afisa doar User si Car pentru departamentul selectat
            Setting::where('nume', "departmentId")->where('interval_id', 1)->update(array('valoare' => $request->valoare));
            Setting::where('nume', "filtreazaDupaDepartament")->where('interval_id', 1)->update(array('valoare' => 1));
        }
    }

    /**
     * @param Request $request
     * @return void
     */
    public function setCarId(Request $request)
    {
        $selectedInterval = config('global.selected_interval');

        if ($request->valoare == "0") {
            Setting::where('nume', "carId")->where('interval_id', 1)->update(array('valoare' => 0));
            $car_id = 0;
        } else {
            Setting::where('nume', "carId")->where('interval_id', 1)->update(array('valoare' => $request->valoare));
            Setting::where('nume', "userId")->where('interval_id', 1)->update(array('valoare' => 0));
            $car_id = $request->valoare;
        }
        $user_id = @UserCar::where('car_id', $car_id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'desc')->first()->user_id;
        return response()->json($user_id);
    }

    /**
     *
     * @param Request $request
     * @return void
     */
    public function setUserId(Request $request)
    {
        $selectedInterval = config('global.selected_interval');

        if ($request->valoare == "0") {
            Setting::where('nume', "userId")->where('interval_id', 1)->update(array('valoare' => 0));
            $user_id = 0;
        } else {
            Setting::where('nume', "userId")->where('interval_id', 1)->update(array('valoare' => $request->valoare));
            Setting::where('nume', "carId")->where('interval_id', 1)->update(array('valoare' => 0));
            $user_id = $request->valoare;
        }
        $car_id = @UserCar::where('user_id', $user_id)->where('interval_id', '<=', $selectedInterval)->orderby('interval_id', 'desc')->first()->car_id;
        return response()->json($car_id);
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
