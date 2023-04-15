<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeStoreRequest;
use App\Http\Requests\TypeUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class TypeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $types = Type::with('brand')->select(sprintf('%s.*', (new Type)->getTable()));
            return DataTables::of($types)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.types.index');
    }

    public function create()
    {
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        return view('back.types.create', compact( 'brands'));
    }


    public function getTypeTypes($type_id)
    {
        $types = Type::select("id", "name")->where('type_id', '=', $type_id)->get()->toArray();
        return $types;
    }

    public function store(TypeStoreRequest $request)
    {
        $type = Type::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.types.index')->with('notification', $notification);
    }

    public function show(Type $type)
    {
        $type->with('brand');
        return view('back.types.show', compact('type'));
    }

    public function edit(Type $type)
    {   
        $brands = Brand::get();
        $type->with('brand');
        return view('back.types.edit', compact('type'))->with(compact('brands'));
    }

    public function update(TypeUpdateRequest $request, Type $type)
    {
        $type->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.types.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Type::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
