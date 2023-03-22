<?php

namespace App\Http\Controllers\Back;

use App\Models\Car;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class CarController extends Controller
{
    public function index(Request $request)
    {   
        if ($request->ajax()) {          
            // $cars = Car::with('brand','departments','type', 'user')->get();
            //     dd($cars[0]);
            $cars = Car::with('brand','departments','type', 'user')->select(sprintf('%s.*', (new Car)->getTable()));
            return DataTables::of($cars)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->editColumn('brand_id', function ($row) {
                    return $row->brand->name;
                })
                ->editColumn('type_id', function ($row) {
                    return $row->type->name;
                })
                ->editColumn('user_id', function ($row) {
                        return @$row->user->name;
                    // dd($row);
                    // if (is_null($row->user->name)){
                    //     return '';
                    // }else{

                    // }
                })
                ->toJson();
        }
        return view('back.cars.index');
    }

    public function create()
    {
        $departments = Department::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        $users = User::select('id', 'name')->orderBy('name')->get();
        return view('back.cars.create', compact('departments', 'brands', 'users'));
    }

    public function getDepartmentCars($department_id)
    {
        $departments = Department::with('cars')->where('id', '=', $department_id)->get()[0]['cars'];
        //dd($departments);
        return $departments;
    }

    public function getDepartmentUsers($department_id)
    {
        $departments = Department::with('users')->where('id', '=', $department_id)->get()[0]['users'];
        return $departments;
    }

    public function getBrandTypes($brand_id)
    {
        $brands = Type::select("id", "name")->where('brand_id', '=', $brand_id)->get()->toArray();
        return $brands;
    }

    public function store(CarStoreRequest $request)
    {
        $car = Car::create($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.cars.index')->with('notification', $notification);
    }

    public function show(Car $car)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.cars.show', compact('car'))->with(compact('countries'));
    }

    public function edit(Car $car)
    {
        $countries = Country::where('is_eu', 1)->orderBy('name', 'asc')->get();

        return view('back.cars.edit', compact('car'))->with(compact('countries'));
    }

    public function update(CarUpdateRequest $request, Car $car)
    {
        $car->update($request->all());

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.cars.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Car::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
