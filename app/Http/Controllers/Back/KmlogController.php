<?php

namespace App\Http\Controllers\Back;

use DateTime;
use DateTimeZone;
use App\Models\Stat;
use App\Models\Type;
use App\Models\Kmlog;
use App\Models\Month;
use DateTimeImmutable;
use DateTimeInterface;
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
        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);
    //dd($datetime, $datetime->format('y-m-d H:i:s'));


        if ($request->ajax()) {    
            //aici se aduc toti userii si masinile. Asocierea nu se face in index ci in create sau update    
            $kmlogs = Kmlog::with('stat', 'user', 'car', 'interval', 'department')->select(sprintf('%s.*', (new Kmlog)->getTable()))->get();
            foreach($kmlogs as $kmlog){
                @$kmlog['month'] = Month::where('id', Interval::where('id', $kmlog->interval_id)->first()->month_id)->first()->anul_luna;
            }

            return DataTables::of($kmlogs)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })->toJson();
        }
        return view('back.kmlogs.index');
    }

    public function create()
    {
        //Aici se selecteaza mai intai departamentul urmand ca prin ajax sa se completeze lista cu masini si utilizatori
        $departments = Department::get();
        $stats = Stat::get();
        return view('back.kmlogs.create', compact('departments', 'stats'));
    }


    public function getKmlogTypes($kmlog_id)
    {
        $kmlogs = Type::select("id", "name")->where('kmlog_id', '=', $kmlog_id)->get()->toArray();
        return $kmlogs;
    }

    public function store(KmlogStoreRequest $request)
    {
        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);
        // dd($datetime->format('F d, Y H:i'));

        $data = $request->all();
        $data['interval_id'] =  config('global.selected_interval');
        $data['ordine'] = 1;
        $data['created_at']= $datetime->format('y-m-d H:i:s');
        $data['updated_at']= $datetime->format('y-m-d H:i:s');
        
        $kmlog = Kmlog::create($data);

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
        $department_name = Department::where('id', $kmlog->department_id)->first()->name;
        $users = DepartmentController::getUsers($kmlog->department_id);
        $cars = DepartmentController::getCars($kmlog->department_id);
        $stats = Stat::get();
        return view('back.kmlogs.edit', compact('kmlog', 'users', 'cars', 'stats'))->with('department_name', $department_name);
    }

    public function update(KmlogUpdateRequest $request, Kmlog $kmlog)
    {

        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);
        // dd($datetime->format('F d, Y H:i'));
        $data = $request->all();
        $data['interval_id'] =  config('global.selected_interval');
        $data['ordine'] = 1;
        $data['updated_at']= $datetime->format('y-m-d H:i:s');
        $kmlog->update($data);

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
