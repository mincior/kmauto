<?php

namespace App\Http\Controllers\Back;

use App\Models\Car;
use App\Models\Kmlog;
use App\Models\CarDep;
use App\Models\Expire;
use App\Models\CarAsig;
use App\Models\CarProp;
use App\Models\CarStat;
use App\Models\UserCar;
use App\Models\Revision;
use App\Models\Carsecond;
use App\Imports\CarsImport;
use App\Models\Availablecar;
use App\Models\CarStatValue;
use Illuminate\Http\Request;
use App\Imports\ExpiresImport;
use App\Models\CarConsumption;
use App\Imports\CarsImportToModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Database\Seeders\RevisionsTableSeeder;
use Database\Seeders\CarStatValuesTableSeeder;
use App\Imports\CarsImportToCollectionAndSeeder;


class ImportController extends Controller
{
	public function excelUpload(Request $request)
	{
		//Anumite tabele sunt mai convenabil de importat direct dintr-un excel. Scrierea unui seeder poate fi destul de anevoioasa.
		//Totusi daca tabelul are multe chei straine, tabelele legate trebuiesc mai intai sterse si apoi recreate fie prin import
		//tot din excel sau folosind seedere deja create.
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
		switch ($request->action_id) {
			case 0: //masini
				$excelFile =  public_path('storage/' . config('global.cars_import_file'));
				//pentru a putea aplica truncate(stergere cu  aducerea id-ului de pornire la valoarea 1) pe Car trebuie sa nu se mai verifice cheile straine
				//totusi cheile straine vor ramane orfane daca nu se sterg
				Availablecar::truncate();
				CarAsig::truncate();
				CarConsumption::truncate();
				CarDep::truncate();
				CarProp::truncate();
				CarStatValue::truncate();
				CarStat::truncate();
				Kmlog::truncate();
				Revision::truncate();
				Carsecond::truncate();
				UserCar::truncate();
				Expire::truncate();
				//sterge toate masinile
				Car::truncate();
				//face importul
				$ex = Excel::import(new CarsImport, $excelFile);
				$excelFile =  public_path('storage/' . config('global.expires_import_file'));
				$ex = Excel::import(new ExpiresImport, $excelFile);
				//reactiveaza verificarea cheilor straine
				//reincarca tabelele care au seeder (tabele mici, usor de completat)
				$seeder = new CarStatValuesTableSeeder;
				$seeder->run();
				$seeder = new RevisionsTableSeeder;
				$seeder->run();
				dd($ex);
				break;
			case 1: //expirari
				Expire::truncate(); //sterge cu resetare id
				$excelFile =  public_path('storage/' . config('global.expires_import_file'));
				$ex = Excel::import(new ExpiresImport, $excelFile); //importa
				break;
			case 2: //masini detalii
				dd('incarca aici masini detalii');
				break;
			case 3: //utilizatori
				dd('incarca aici masini detalii');
				break;
		}
		DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

		return back()->with('massage', 'Excel file imported successfully');
	}

	public function viewUploadForm(Request $request)
	{
		return view('back/excel/fileupload');
	}
}
