<?php

namespace App\Http\Controllers\Back;

use DateTime;
use Exception;
use DateTimeZone;
use App\Models\Car;
use App\Models\Stat;
use App\Models\Type;
use App\Models\User;
use App\Models\Kmlog;
use App\Models\Month;
use DateTimeImmutable;
use DateTimeInterface;
use App\Models\Setting;
use App\Models\Interval;
use App\Models\Department;
use App\MyHelpers\AppHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\KmlogStoreRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\KmlogUpdateRequest;

class KmlogController extends Controller
{
    public function index(Request $request)
    {
        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);

        if ($request->ajax()) {
            $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id; 
            $selected_interval_interval = \App\MyHelpers\AppHelper::getSelectedInterval()->interval; 
            if($selected_interval_interval == 'Toate' ){
                $arr_ids = \App\MyHelpers\AppHelper::getSelectedToateIntervalIds($selected_interval_id);
            }
            $selected_user_id = Setting::where('nume', 'userId')->where('interval_id', 1)->first()->valoare;
            $selected_car_id = Setting::where('nume', 'carId')->where('interval_id', 1)->first()->valoare;
            $filtreaza_dupa_interval = Setting::where('nume', 'filtreazaDupaInterval')->where('interval_id', 1)->first()->valoare;
            // dd($selected_interval_id, $selected_user_id, $selected_car_id);
            $kmlogs = Kmlog::with('stat', 'user', 'car', 'interval', 'department')->orderby('id', 'desc')->select(sprintf('%s.*', (new Kmlog)->getTable()))->get();
            foreach ($kmlogs as $key => $kmlog) {
                $kmlog['month'] = Month::where('id', Interval::where('id', $kmlog->interval_id)->first()->month_id)->first();
                if ($selected_user_id > 0 && $kmlog->user_id != $selected_user_id) {
                    unset($kmlogs[$key]);
                }
                if ($selected_car_id > 0 && $kmlog->car_id != $selected_car_id) {
                    unset($kmlogs[$key]);
                }
                if($selected_interval_interval == 'Toate'){
                    if ($filtreaza_dupa_interval = 1 && !in_array($kmlog->interval_id, $arr_ids)) {
                        unset($kmlogs[$key]);
                    }

                }else{
                    if ($filtreaza_dupa_interval = 1 && $kmlog->interval_id != $selected_interval_id) {
                        unset($kmlogs[$key]);
                    }

                }
            }
            return DataTables::of($kmlogs)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })->toJson();
        }

        return view('back.kmlogs.index');
    }

    public function create(Request $request)
    {
        dd($request->all());
        //Aici se selecteaza mai intai departamentul urmand ca prin ajax sa se completeze lista cu masini si utilizatori
        $departments = Department::get();
        $stats = Stat::get();
        return view('back.kmlogs.create', compact('departments', 'stats'));
    }


    public function getKmlogTypes($kmlog_id)
    {
        $kmlogs = Type::select("id", "name")->where('kmlog_id', '=', $kmlog_id)->get()->toArray();
        return $kmlogs;
    }

    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    public function createThumbnail($path, $width, $height)
    {
        try {
            $img = @Image::make($path)->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($path);
        } catch (Exception $e) {
        }
    }




    public function store(KmlogStoreRequest $request)
    {
        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;

        $data = $request->all();
        $data['interval_id'] =  \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $data['ordine'] = 1;
        $data['created_at'] = $datetime->format('y-m-d H:i:s');
        $data['updated_at'] = $datetime->format('y-m-d H:i:s');


        // $department = Department::where('id', $data['department_id'])->first()->name;
        $user = User::where('id', $data['user_id'])->first()->name;
        $car = Car::where('id', $data['car_id'])->first()->numar;
        $interval = Interval::where('id', $selected_interval_id)->first()->interval;
        $luna = Month::where('id', Interval::where('id', $selected_interval_id)->first()->month_id)->first()->anul_luna;
        $image_path = '/' . $car . ' - ' . $user  . "/" . $luna .  "/" . $interval;

        if (array_key_exists("picture", $request->all())) {
            if ($request->file('picture')->getClientOriginalName()) {
                //pregateste calea pentru poze
                //get filename with extension
                $filenamewithextension = $request->file('picture')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('picture')->getClientOriginalExtension();

                $time = time();

                //filename to store
                $filenametostore = $filename . '_' . $time . '.' . $extension;

                //small thumbnail name
                $smallthumbnail = $filename . '_small_' . $time . '.' . $extension;

                //medium thumbnail name
                $mediumthumbnail = $filename . '_medium_' . $time . '.' . $extension;

                //large thumbnail name
                $largethumbnail = $filename . '_large_' . $time . '.' . $extension;

                //Upload File
                $request->file('picture')->storeAs('public/pictures' . $image_path, $filenametostore);
                $request->file('picture')->storeAs('public/pictures/thumbnail' . $image_path, $smallthumbnail);
                $request->file('picture')->storeAs('public/pictures/thumbnail' . $image_path, $mediumthumbnail);
                $request->file('picture')->storeAs('public/pictures/thumbnail' . $image_path, $largethumbnail);

                $filenametostorepath =  public_path('storage/pictures' . $image_path . '/' . $filenametostore);
                $this->createThumbnail($filenametostorepath, 1020, 760);
                //create small thumbnail
                $smallthumbnailpath = public_path('storage/pictures/thumbnail' . $image_path . '/' . $smallthumbnail);
                $this->createThumbnail($smallthumbnailpath, 150, 93);

                //create medium thumbnail
                $mediumthumbnailpath = public_path('storage/pictures/thumbnail' . $image_path . '/' . $mediumthumbnail);
                $this->createThumbnail($mediumthumbnailpath, 300, 185);

                //create large thumbnail
                $largethumbnailpath = public_path('storage/pictures/thumbnail' . $image_path . '/' . $largethumbnail);
                $this->createThumbnail($largethumbnailpath, 550, 340);
                $data['picture'] =   $image_path  . "/" . $filenametostore;
            }
        }
        // @mkdir($image_path , 0777, true);
        // $image_name = $car . ' - ' . $user  . "_" . time() . "." . $request->picture->extension();
        // $request->picture->move("/storage/pictures/thumbnail".$image_path, $image_name);

        $kmlog = Kmlog::create($data);
        //sterge masina si utilizatorul selectat
        if ($kmlog) {
            Setting::where('nume', "userId")->where('interval_id', 1)->update(array('valoare' => 0));
            Setting::where('nume', "carId")->where('interval_id', 1)->update(array('valoare' => 0));
        }
        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.kmlogs.index')->with('notification', $notification);
    }

    public function show(Kmlog $kmlog)
    {

        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $department_name = Department::where('id', $kmlog->department_id)->first()->name;
        $user_name = User::where('id', $kmlog->user_id)->first()->name;
        $car_numar = Car::where('id', $kmlog->car_id)->first()->numar;
        $stat_name = Stat::where('id', $kmlog->stat_id)->first()->name;
        $luna = Month::where('id', Interval::where('id', $selected_interval_id)->first()->month_id)->first()->anul_luna;
        $interval = Interval::where('id', $selected_interval_id)->first()->interval;
        $image_path = '/' . $car_numar . ' - ' . $user_name  . "/" . $luna .  "/" . $interval;

        return view('back.kmlogs.show', compact('kmlog'))
            ->with('department_name', $department_name)
            ->with('user_name', $user_name)
            ->with('car_numar', $car_numar)
            ->with('stat_name', $stat_name)
            ->with('image_path', $image_path);
    }

    public function edit(Kmlog $kmlog)
    {
        $departments = Department::get();
        $department_name = Department::where('id', $kmlog->department_id)->first()->name;
        $users = DepartmentController::getUsers($kmlog->department_id);
        $cars = DepartmentController::getCars($kmlog->department_id);
        $stats = Stat::get();
        return view('back.kmlogs.edit', compact('kmlog', 'users', 'cars', 'stats', 'departments'))->with('department_name', $department_name);
    }

    public function update(KmlogUpdateRequest $request, Kmlog $kmlog)
    {

        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;
        $data = $request->all();

        $data['interval_id'] =  $selected_interval_id;
        $data['ordine'] = 1;
        $data['updated_at'] = $datetime->format('y-m-d H:i:s');
        $user = User::where('id', $data['user_id'])->first()->name;
        $car = Car::where('id', $data['car_id'])->first()->numar;
        $interval = Interval::where('id', $selected_interval_id)->first()->interval;
        $luna = Month::where('id', Interval::where('id', $selected_interval_id)->first()->month_id)->first()->anul_luna;
        $image_path = '/' . $car . ' - ' . $user  . "/" . $luna .  "/" . $interval;

        if ($request->picture) {
            if ($request->file('picture')->getClientOriginalName()) {
                //pregateste calea pentru poze
                //get filename with extension
                $filenamewithextension = $request->file('picture')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('picture')->getClientOriginalExtension();

                $time = time();

                //filename to store
                $filenametostore = $filename . '_' . $time . '.' . $extension;

                //small thumbnail name
                $smallthumbnail = $filename . '_small_' . $time . '.' . $extension;

                //medium thumbnail name
                $mediumthumbnail = $filename . '_medium_' . $time . '.' . $extension;

                //large thumbnail name
                $largethumbnail = $filename . '_large_' . $time . '.' . $extension;

                //Upload File
                $request->file('picture')->storeAs('public/pictures' . $image_path, $filenametostore);
                $request->file('picture')->storeAs('public/pictures/thumbnail' . $image_path, $smallthumbnail);
                $request->file('picture')->storeAs('public/pictures/thumbnail' . $image_path, $mediumthumbnail);
                $request->file('picture')->storeAs('public/pictures/thumbnail' . $image_path, $largethumbnail);

                $filenametostorepath =  public_path('storage/pictures' . $image_path . '/' . $filenametostore);
                $this->createThumbnail($filenametostorepath, 1020, 760);
                //create small thumbnail
                $smallthumbnailpath = public_path('storage/pictures/thumbnail' . $image_path . '/' . $smallthumbnail);
                $this->createThumbnail($smallthumbnailpath, 150, 93);

                //create medium thumbnail
                $mediumthumbnailpath = public_path('storage/pictures/thumbnail' . $image_path . '/' . $mediumthumbnail);
                $this->createThumbnail($mediumthumbnailpath, 300, 185);

                //create large thumbnail
                $largethumbnailpath = public_path('storage/pictures/thumbnail' . $image_path . '/' . $largethumbnail);
                $this->createThumbnail($largethumbnailpath, 550, 340);
                $data['picture'] =   $image_path  . "/" . $filenametostore;
            }
        }
        $kmlog->update($data);

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.kmlogs.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        Kmlog::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
