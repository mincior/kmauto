<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpireStoreRequest;
use App\Http\Requests\ExpireUpdateRequest;
use App\Models\Country;
use App\Models\Expire;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ExpireController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $expires = Expire::select(sprintf('%s.*', (new Expire)->getTable()));
            return DataTables::of($expires)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('expire_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(expires.expire_last_name, ' ', expires.expire_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(expires.address_street, ' ', expires.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(expires.address_postal_code, ' ', expires.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.expires.index');
    }

    public function create()
    {
        $expires = Expire::query()->get();

        return view('back.expires.create')->with(compact('expires'));
    }

    public function store(ExpireStoreRequest $request)
    {
        $expire = Expire::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.expires.index')->with('notification', $notification);
    }

    public function show(Expire $expire)
    {

        return view('back.expires.show', compact('expire'));
    }

    public function edit(Expire $expire)
    {

        return view('back.expires.edit', compact('expire'));
    }

    public function update(ExpireUpdateRequest $request, Expire $expire)
    {
        $expire->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.expires.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Expire::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
