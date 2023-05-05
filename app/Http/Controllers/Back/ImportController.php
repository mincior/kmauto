<?php

namespace App\Http\Controllers\Back;

use App\Imports\CarsImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
	public function excelUpload(Request $request)
    {
		switch($request->action_id){
			case 0://masini
				$filenametostorepath =  public_path('storage/' . config('global.car_import_file') );
				$ex = Excel::import(new CarsImport, $filenametostorepath);
				dd($ex);
			case 1://masini detalii
				dd('incarca aici masini detalii');

			case 2://utilizatori
				dd('incarca aici utilizatori');
		}

        return back()->with('massage', 'Excel file imported successfully');
    }

    public function viewUploadForm(Request $request)
    {
        return view('back/excel/fileupload');
    }

}
