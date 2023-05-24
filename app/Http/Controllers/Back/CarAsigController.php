<?php

namespace App\Http\Controllers\Back;

use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarAsigStoreRequest;
use App\Http\Requests\CarAsigUpdateRequest;
use App\Models\Country;
use App\Models\CarAsig;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class CarAsigController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->ajax()) {
            $carAsigs = CarAsig::with('car_asig_value', 'car_asig_interval', 'car_asig_car')->select(sprintf('%s.*', (new CarAsig)->getTable()));
            return DataTables::of($carAsigs)
                ->addColumn('DT_RowId', function ($row) {return $row->id;})
                // ->editColumn('address_street', function ($row) {return $row->address;})
                // ->editColumn('address_place', function ($row) {return $row->place;})
                // ->filterColumn('carAsig_last_name', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigs.carAsig_last_name, ' ', carAsigs.carAsig_first_name) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_street', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigs.address_street, ' ', carAsigs.address_number) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                // ->filterColumn('address_place', function ($query, $keyword) {
                //     $sql = "CONCAT(carAsigs.address_postal_code, ' ', carAsigs.address_place) like ?";
                //     $query->whereRaw($sql, ["%{$keyword}%"]);
                // })
                ->toJson();
        }

        return view('back.car_asigs.index');
    }//end function index

    public function create()
	{
		$carAsigValues = \App\Models\CarAsigValue::select('id', 'name')->orderBy('name')->get();
		$intervals = \App\Models\Interval::select('id', 'interval')->orderBy('interval')->get();
		$cars = \App\Models\Car::select('id', 'numar')->orderBy('numar')->get();
		 return view('back.car_asigs.create', compact('carAsigValues', 'intervals', 'cars')); 
	}
	//end function create


    public function store(CarAsigStoreRequest $request)
	{
		$data = $request->all();
		
		$last_part_poza_amenda_path = '/poza_amenda';//modifica aici pentru a stabili o cale mai buna (foloseste un foreign id din request pentru a obtine un nume)
		if (array_key_exists("poza_amenda", $data)) {
			if ($data['poza_amenda']->getClientOriginalName()) {
				$data['poza_amenda'] =   \App\MyHelpers\AppHelper::prelPicture($data['poza_amenda'], $last_part_poza_amenda_path);
			}
		}
		$last_part_poza_sofer_path = '/poza_sofer';//modifica aici pentru a stabili o cale mai buna (foloseste un foreign id din request pentru a obtine un nume)
		if (array_key_exists("poza_sofer", $data)) {
			if ($data['poza_sofer']->getClientOriginalName()) {
				$data['poza_sofer'] =   \App\MyHelpers\AppHelper::prelPicture($data['poza_sofer'], $last_part_poza_sofer_path);
			}
		}

		$carAsig = CarAsig::create($data);
		$notification = ["type" => "success", "title" => 'Add ...', "message" => 'Item added.',];

		return redirect()->route('back.car-asigs.index')->with('notification', $notification);
	}//end function store


	//end function store

    public function show(CarAsig $carAsig)
    {

        return view('back.car_asigs.show', compact('carAsig'));
    }//end function show

    public function edit(CarAsig $carAsig)

									{
		$carAsigValues = \App\Models\CarAsigValue::select('id', 'name')->orderBy('name')->get();
		$intervals = \App\Models\Interval::select('id', 'interval')->orderBy('interval')->get();
		$cars = \App\Models\Car::select('id', 'numar')->orderBy('numar')->get();
		return view('back.car_asigs.edit', compact('carAsig', 'carAsigValues', 'intervals', 'cars')); 
	}

	//end function edit

    public function update(CarAsigUpdateRequest $request, CarAsig $carAsig )
	{
		$data = $request->all();
		
		$last_part_poza_amenda_path = '/poza_amenda';//modifica aici pentru a stabili o cale mai buna (foloseste un foreign id din request pentru a obtine un nume)
		if (array_key_exists("poza_amenda", $data)) {
			if ($data['poza_amenda']->getClientOriginalName()) {
				$data['poza_amenda'] =   \App\MyHelpers\AppHelper::prelPicture($data['poza_amenda'], $last_part_poza_amenda_path);
			}
		}
		$last_part_poza_sofer_path = '/poza_sofer';//modifica aici pentru a stabili o cale mai buna (foloseste un foreign id din request pentru a obtine un nume)
		if (array_key_exists("poza_sofer", $data)) {
			if ($data['poza_sofer']->getClientOriginalName()) {
				$data['poza_sofer'] =   \App\MyHelpers\AppHelper::prelPicture($data['poza_sofer'], $last_part_poza_sofer_path);
			}
		}

		$carAsig->update($data);
		$notification = ["type" => "success", "title" => 'Add ...', "message" => 'Item added.',];

		return redirect()->route('back.car-asigs.index')->with('notification', $notification);
	}//end function update


	//end function update

    public function massDestroy(Request $request)
    {
        CarAsig::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }//end function massDestroy
}
