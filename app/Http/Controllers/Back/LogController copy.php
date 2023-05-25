<?php

namespace App\Http\Controllers\Back;

use DateTime;
use Exception;
use DateTimeZone;
use Carbon\Carbon;
use App\Models\Log;
use App\Models\User;
use App\Models\Country;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\LogStoreRequest;
use App\Http\Requests\LogUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class LogController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->ajax()) {
            $logs = Log::with('user')->select(sprintf('%s.*', (new Log)->getTable()));
            return DataTables::of($logs)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                ->editColumn('created_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('Y-m-d H:i:s'); return $formatedDate; })
                ->editColumn('updated_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at)->format('Y-m-d H:i:s'); return $formatedDate; })
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('log_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(logs.log_last_name, ' ', logs.log_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(logs.address_street, ' ', logs.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(logs.address_postal_code, ' ', logs.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.logs.index');
    }//end function index

    public function create()
	{
		$users = \App\Models\User::select('id', 'name')->orderBy('name')->get();
		 return view('back.logs.create', compact('users')); 
	}
	//end function create


    public function store(LogStoreRequest $request)
    {
        $log = Log::create( $request->all() );
        $notification = ["type" => "success", "title" => 'Add ...', "message" => 'Item added.',];

        return redirect()->route('back.logs.index')->with('notification', $notification);
    }//end function store

    public function show(Log $log)
    {

        return view('back.logs.show', compact('log'));
    }//end function show

    public function edit(Log $log)

									{
		$users = \App\Models\User::select('id', 'name')->orderBy('name')->get();
		return view('back.logs.edit', compact('log', 'users')); 
	}

	//end function edit

    public function update(LogUpdateRequest $request, Log $log)
    {
        $log->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.logs.index')->with('notification', $notification);
    }//end function update

    public function massDestroy(Request $request)
    {
        Log::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }//end function massDestroy
}
