<?php

namespace App\Http\Controllers\Back;

use App\Models\Car;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Country;
use App\MyHelpers\AppHelper;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class CarController extends Controller
{

    public function index(Request $request)
    {   
        if ($request->ajax()) {          
            // $cars = Car::with('brand','departments','type', 'user')->get();
            //     dd($cars[0]);
            $cars = Car::with('brand','type', 'departments', 'users')->select(sprintf('%s.*', (new Car)->getTable()))->orderBy('id', 'desc');
            return DataTables::of($cars)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                // ->editColumn('brand_id', function ($row) {
                //     return $row->brand->name;
                // })
                // ->editColumn('type_id', function ($row) {
                //     return $row->type->name;
                // })
                // ->editColumn('$data['user_id']', function ($row) {
                //     return @$row->user->name;
                //     // dd($row);
                //     // if (is_null($row->user->name)){
                //     //     return '';
                //     // }else{

                //     // }
                // })
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


    public function store(CarStoreRequest $request)
    {
        //In request avem campurile necesare (proprietatea name din html)
        //In CarStoreRequest se face validarea
        $data = $request->all();
        //scoate un numar de forma B-87-CLT din (B87CLT, B-87CLT, B#$%$%$87(*&^%^&*(cLt)), etc. )
        $data['numar'] = AppHelper::prelucrare_numar_masina($data['numar']); 
        
        //scrie masina noua 
        $car = Car::create($data);

        //scrie id-urile in tabelele pivot precum si intervalul curent (momentul crearii)
        $car->users()->syncWithPivotValues([$data['user_id']],  ['interval_id' => intval($data['selected_interval'])]);
        $car->departments()->syncWithPivotValues([$data['department_id']],  ['interval_id' => intval($data['selected_interval'])]);

        $notification = [
            "type" => "success",
            "title" => 'Adaugare ...',
            "message" => 'Masina a fost adaugata cu succes!',
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
