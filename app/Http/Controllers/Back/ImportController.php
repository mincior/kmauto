<?php

namespace App\Http\Controllers\Back;

use App\Imports\CarsImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
	public function uploadusers(Request $request)
    {
        $filenametostorepath =  public_path('storage/' . config('global.car_import_file') );
        $ex = Excel::import(new CarsImport, $filenametostorepath);
        dd('am intrat', $ex);

        return back()->with('massage', 'User Imported Successfully');
    }

    public function viewupload(Request $request)
    {
        return view('back/excel/fileupload');
    }

}
