<?php

namespace App\Http\Controllers\Back;

use App\Models\Month;
use App\Models\Setting;
use App\Models\Interval;
use App\Models\Department;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\MonthStoreRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\MonthUpdateRequest;

class MonthController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $months = Month::select(sprintf('%s.*', (new Month)->getTable()));
            return DataTables::of($months)->toJson();
        }
        return view('back.months.index_new');
    }

    public function create()
    {
        return view('back.months.create');
    }

    /**
     * Adauga prima luna nescrisa din viitor
     *
     * @return void
     */
    public function addNextMonth()
    {
        /*calculeaza si adauga urmatoarea luna in tabelul cu luni, cu tot cu intervalele normale (de weekend)
        Daca luna incepe cu o zi de luni, sambata sau duminica se cauta prima zi de vineri din luna

        */
        $luni = ['ianuarie', 'februarie', 'martie', 'aprilie', 'mai', 'iunie', 'iulie', 'august', 'septembrie', 'octombrie', 'noiembrie', 'decembrie'];
        //dd(AppHelper::leadzero('2', 2));
        //extrage in format obiect(data) ultima luna din tabelul months din baza de date.
        $ultima_luna = date_create(Month::orderby('data_raportarii', 'desc')->first()->data_raportarii);
        $m = date_create(Month::orderby('data_raportarii', 'desc')->first()->data_raportarii);
        //adauga la ultima luna, inca o luna
        date_add($m, date_interval_create_from_date_string("1 month"));
        $str_luna = date_format($ultima_luna, 'Y-m-d');
        $arr_luna = getDate(strtotime($str_luna));
        $anul_luna = $luni[$arr_luna['mon'] - 1] . ' ' . strval($arr_luna['year']);
        $data = ['data_raportarii' => date_format($m, 'Y-m-d'), 'anul_luna' => $anul_luna, 'inchisa' => 0];
        $nr_zile_luna =  cal_days_in_month(CAL_GREGORIAN, $arr_luna['mon'], $arr_luna['year']);

        //itereaza zilele din noua luna pentru a afla intervalele
        $month = Month::create($data);
        if ($month) {
            //creaza si intervalele de weekend
            $data_intervale = [];
            $start = false;
            $inceput = '';
            $sfarsit = '';
            $interval = '';
            for ($zi = 1; $zi <= $nr_zile_luna; $zi++) {
                $ln = strval($arr_luna['year'] . '-' .  AppHelper::leadzero(strval($arr_luna['mon']), 2) . '-' . AppHelper::leadzero(strval($zi), 2));
                $arr_ln = [];
                $arr_ln = getDate(strtotime($ln));

                //pune start = true daca luna incepe cu o zi de la marti pana la vineri, altfel va sari peste zilele de samabata, duminica, luni
                if ($start == false && ($arr_ln['weekday'] == "Monday" || $arr_ln['weekday'] == "Tuesday"  || $arr_ln['weekday'] == "Wednesday"  || $arr_ln['weekday'] == "Thursday")) {
                    $start = true;
                }

                //sunt pe o zi care trebuie sa conteze la luna curenta. Daca luna incepea cu sambata, duminica, luni, intervalul 
                //ar fi fost in luna anterioara.
                if ($start == true) {
                    if ($inceput == '' && $sfarsit == '' && $arr_ln['weekday'] == "Friday") {
                        $inceput = $ln;
                    }
                    if ($inceput != '' && $sfarsit == '' && $arr_ln['weekday'] == "Monday") {
                        $sfarsit = $ln;
                        //tocmai am aflat un interval
                        $data_intervale['data_inceput'] = $inceput;
                        $data_intervale['data_sfarsit'] = $sfarsit;
                        $arr_inceput = getDate(strtotime($inceput));
                        $arr_sfarsit = getDate(strtotime($sfarsit));
                        if ($arr_inceput['month'] != $arr_sfarsit['month']) {
                            $interval = AppHelper::leadzero($arr_inceput['mday'], 2) . '.' .  AppHelper::leadzero($arr_inceput['mon'], 2) . ' - ' . AppHelper::leadzero($arr_sfarsit['mday'], 2) . '.' .  AppHelper::leadzero($arr_sfarsit['mon'], 2);
                        } else {
                            $interval = AppHelper::leadzero($arr_inceput['mday'], 2) . ' - ' . AppHelper::leadzero($arr_sfarsit['mday'], 2) . '.' .  AppHelper::leadzero($arr_sfarsit['mon'], 2);
                        }
                        $data_intervale['interval'] = $interval;
                        $data_intervale['select'] = 0;
                        $data_intervale['inchis'] = 0;
                        $data_intervale['month_id'] = $month->id;
                        Interval::create($data_intervale);

                        $inceput = '';
                        $sfarsit = '';
                        $interval = '';
                    }
                }
            }

            //daca sunt la sfarsitul lunii si n-am gasit o zi de luni, o caut
            //adauga la ultima luna, inca o luna
            date_add($ultima_luna, date_interval_create_from_date_string("1 month"));
            $str_luna = date_format($ultima_luna, 'Y-m-d');
            $arr_luna = getDate(strtotime($str_luna));
            $zi = 1;
            if ($inceput != '' && $sfarsit == '') {
                do {
                    $ln = strval($arr_luna['year'] . '-' .  AppHelper::leadzero(strval($arr_luna['mon']), 2) . '-' . AppHelper::leadzero(strval($zi), 2));
                    $arr_ln = [];
                    $arr_ln = getDate(strtotime($ln));
                    if ($arr_ln['weekday'] == "Monday") {
                        $sfarsit = $ln;
                        //tocmai am aflat un interval
                        $data_intervale['data_inceput'] = $inceput;
                        $data_intervale['data_sfarsit'] = $sfarsit;
                        $arr_inceput = getDate(strtotime($inceput));
                        $arr_sfarsit = getDate(strtotime($sfarsit));
                        $interval = AppHelper::leadzero($arr_inceput['mday'], 2) . '.' .  AppHelper::leadzero($arr_inceput['mon'], 2) . ' - ' . AppHelper::leadzero($arr_sfarsit['mday'], 2) . '.' .  AppHelper::leadzero($arr_sfarsit['mon'], 2);
                        $data_intervale['interval'] = $interval;
                        break; //a gasit ziua de luni si iese
                    }
                    $zi += 1;
                } while (1);
                $data_intervale['select'] = 0;
                $data_intervale['inchis'] = 0;
                $data_intervale['month_id'] = $month->id;
                Interval::create($data_intervale);
            }
        }
    }

    public function getMonthIntervals()
    {
        $month_id = Setting::where('nume', 'monthId')->where('interval_id', 1)->first()->valoare;
        $intervals = Interval::where('month_id', $month_id)->select(sprintf('%s.*', (new Interval)->getTable()));
        return DataTables::of($intervals)->toJson();

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
        Interval::whereIn('month_id', request('ids'))->delete();//sterge mai intai intervalele
        Month::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
