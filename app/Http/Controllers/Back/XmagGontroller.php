<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\XmagStoreRequest;
use App\Http\Requests\XmagUpdateRequest;
use App\Models\Country;
use App\Models\Xmag;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class XmagController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $xmags = Xmag::select(sprintf('%s.*', (new Xmag)->getTable()));
            return DataTables::of($xmags)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('xmag_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(xmags.xmag_last_name, ' ', xmags.xmag_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(xmags.address_street, ' ', xmags.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(xmags.address_postal_code, ' ', xmags.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.xmags.index');
    }

    public function create()
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.xmags.create')->with(compact('countries'));
    }

    public function store(XmagStoreRequest $request)
    {
        $xmag = Xmag::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.xmags.index')->with('notification', $notification);
    }

    public function show(Xmag $xmag)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.xmags.show', compact('xmag'))->with(compact('countries'));
    }

    public function edit(Xmag $xmag)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.xmags.edit', compact('xmag'))->with(compact('countries'));
    }

    public function update(XmagUpdateRequest $request, Xmag $xmag)
    {
        $xmag->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.xmags.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Xmag::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
