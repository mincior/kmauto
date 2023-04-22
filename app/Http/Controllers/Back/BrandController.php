<?php

namespace App\Http\Controllers\Back;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Setting;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\BrandUpdateRequest;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {          
            $brands = Brand::select(sprintf('%s.*', (new Brand)->getTable()));
            return DataTables::of($brands)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }
        return view('back.brands.index_new');
    }

    public function create()
    {
        return view('back.brands.create');
    }


    public function getBrandTypes($brand_id)
    {
        $brands = Type::select("id", "name")->where('brand_id', '=', $brand_id)->get()->toArray();
        return $brands;
    }

    public function getBrandTypes1()
    {
        $brand_id = Setting::where('nume', 'brandId')->first()->valoare;
        $types = Type::with('brand')->where('brand_id', $brand_id)->select(sprintf('%s.*', (new Type)->getTable()));
        return DataTables::of($types)->toJson();

    }


    public function store(BrandStoreRequest $request)
    {
        $brand = Brand::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.brands.index')->with('notification', $notification);
    }

    public function show(Brand $brand)
    {
        return view('back.brands.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('back.brands.edit', compact('brand'));
    }

    public function update(BrandUpdateRequest $request, Brand $brand)
    {
        $brand->update($request->all());

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
