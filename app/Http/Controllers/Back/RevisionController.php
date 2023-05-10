<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\RevisionStoreRequest;
use App\Http\Requests\RevisionUpdateRequest;
use App\Models\Country;
use App\Models\Revision;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RevisionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $revisions = Revision::select(sprintf('%s.*', (new Revision)->getTable()));
            return DataTables::of($revisions)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('revision_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(revisions.revision_last_name, ' ', revisions.revision_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(revisions.address_street, ' ', revisions.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(revisions.address_postal_code, ' ', revisions.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.revisions.index');
    }

    public function create()
    {
        $revisions = Revision::query()->get();

        return view('back.revisions.create')->with(compact('revisions'));
    }

    public function store(RevisionStoreRequest $request)
    {
        $revision = Revision::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.revisions.index')->with('notification', $notification);
    }

    public function show(Revision $revision)
    {

        return view('back.revisions.show', compact('revision'));
    }

    public function edit(Revision $revision)
    {

        return view('back.revisions.edit', compact('revision'));
    }

    public function update(RevisionUpdateRequest $request, Revision $revision)
    {
        $revision->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.revisions.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Revision::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
