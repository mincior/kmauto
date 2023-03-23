<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use App\Http\Requests\BrandUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $brands = Brand::with([ 'type'])->select(sprintf('%s.*', (new Brand)->getTable()));
            return DataTables::of($brands)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->editColumn('type_id', function ($row) {
                    return $row->type->name;
                })
                ->toJson();
        }
        return view('back.brands.index');
    }

    public function create()
    {
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        return view('back.brands.create', compact( 'brands'));
    }


    public function getBrandTypes($brand_id)
    {
        $brands = Type::select("id", "name")->where('brand_id', '=', $brand_id)->get()->toArray();
        return $brands;
    }

    public function store(BrandStoreRequest $request)
    {
        $crand = Brand::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.brands.index')->with('notification', $notification);
    }

    public function show(Brand $crand)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.brands.show', compact('crand'))->with(compact('countries'));
    }

    public function edit(Brand $crand)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.brands.edit', compact('crand'))->with(compact('countries'));
    }

    public function update(BrandUpdateRequest $request, Brand $crand)
    {
        $crand->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.brands.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Brand::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
