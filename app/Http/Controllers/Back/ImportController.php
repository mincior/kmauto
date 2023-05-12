<?php

namespace App\Http\Controllers\Back;

use App\Imports\CarsImport;
use Illuminate\Http\Request;
use App\Imports\ExpiresImport;
use App\Imports\CarStatsImport;
use App\Imports\CarsecondsImport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
	public function excelUpload(Request $request)
	{
		/*Atentie. Setati in Config/excel.conf: 
		    'ignore_empty' => true,
			'heading_row' => [
				'formatter' => 'none',//in loc de 'slug' - la slug pune el snake_case pentru fiecare denumire de coloana din header
			],

		 */

		//Importul direct in baza de date poate fi periculos. Aici am comentat stergerea si scrierea tabelelor.
		//Se creaza un fisier in radacina pentru fiecare operatie cu secventa de seed ce trebuie copiata manual intr-un seeder.
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
		switch ($request->action_id) {
			case 0: //masini
				$excelFile =  public_path('storage/' . config('global.cars_import_file'));
				//pentru a putea aplica truncate(stergere cu  aducerea id-ului de pornire la valoarea 1) pe Car trebuie sa nu se mai verifice cheile straine
				//totusi cheile straine vor ramane orfane daca nu se sterg
				// Availablecar::truncate();
				// CarAsig::truncate();
				// CarConsumption::truncate();
				// CarDep::truncate();
				// CarProp::truncate();
				// CarStatValue::truncate();
				// CarStat::truncate();
				// Kmlog::truncate();
				// Revision::truncate();
				// Carsecond::truncate();
				// UserCar::truncate();
				// Expire::truncate();
				//sterge toate masinile
				//Car::truncate();
				//face importul
				$ex = Excel::import(new CarsImport, $excelFile);
				$excelFile =  public_path('storage/' . config('global.cars_import_file'));
				$ex = Excel::import(new ExpiresImport, $excelFile);
				//reactiveaza verificarea cheilor straine
				//reincarca tabelele care au seeder (tabele mici, usor de completat)
				// $seeder = new CarStatValuesTableSeeder;
				// $seeder->run();
				// $seeder = new RevisionsTableSeeder;
				// $seeder->run();
				break;
			case 1: //expirari
				//Expire::truncate(); //sterge cu resetare id
				$excelFile =  public_path('storage/' . config('global.cars_import_file'));
				$ex = Excel::import(new ExpiresImport, $excelFile); //importa
				break;
			case 2: //car stat
				//CarStat::truncate();
				$excelFile =  public_path('storage/' . config('global.cars_import_file'));
				$ex = Excel::import(new CarStatsImport, $excelFile); //importa
				break;
			case 3: //masini detalii
				//Carsecond::truncate(); //sterge cu resetare id
				$excelFile =  public_path('storage/' . config('global.cars_import_file'));
				$ex = Excel::import(new CarsecondsImport, $excelFile); //importa
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
