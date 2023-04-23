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
use App\Models\Interval;
use App\Models\Department;
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
        //dd($datetime, $datetime->format('y-m-d H:i:s'));


        if ($request->ajax()) {
            //aici se aduc toti userii si masinile. Asocierea nu se face in index ci in create sau update    
            $kmlogs = Kmlog::with('stat', 'user', 'car', 'interval', 'department')->orderby('id', 'desc')->select(sprintf('%s.*', (new Kmlog)->getTable()))->get();
            foreach ($kmlogs as $kmlog) {
                @$kmlog['month'] = Month::where('id', Interval::where('id', $kmlog->interval_id)->first()->month_id)->first()->anul_luna;
            }

            return DataTables::of($kmlogs)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })->toJson();
        }
        return view('back.kmlogs.index');
    }

    public function create()
    {
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
        $selectedInterval = config('global.selected_interval');

        $data = $request->all();
        $data['interval_id'] =  config('global.selected_interval');
        $data['ordine'] = 1;
        $data['created_at'] = $datetime->format('y-m-d H:i:s');
        $data['updated_at'] = $datetime->format('y-m-d H:i:s');


        // $department = Department::where('id', $data['department_id'])->first()->name;
        $user = User::where('id', $data['user_id'])->first()->name;
        $car = Car::where('id', $data['car_id'])->first()->numar;
        $interval = Interval::where('id', $selectedInterval)->first()->interval;
        $luna = Month::where('id', Interval::where('id', $selectedInterval)->first()->month_id)->first()->anul_luna;
        $image_path = '/' . $car . ' - ' . $user  . "/" . $luna .  "/" . $interval;

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

        // @mkdir($image_path , 0777, true);
        // $image_name = $car . ' - ' . $user  . "_" . time() . "." . $request->picture->extension();
        // $request->picture->move("/storage/pictures/thumbnail".$image_path, $image_name);

        $kmlog = Kmlog::create($data);

        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.kmlogs.index')->with('notification', $notification);
    }

    public function show(Kmlog $kmlog)
    {

        $selectedInterval = config('global.selected_interval');
        $department_name = Department::where('id', $kmlog->department_id)->first()->name;
        $user_name = User::where('id', $kmlog->user_id)->first()->name;
        $car_numar = Car::where('id', $kmlog->car_id)->first()->numar;
        $stat_name = Stat::where('id', $kmlog->stat_id)->first()->name;
        $luna = Month::where('id', Interval::where('id', $selectedInterval)->first()->month_id)->first()->anul_luna;
        $interval = Interval::where('id', $selectedInterval)->first()->interval;
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
        $selectedInterval = config('global.selected_interval');
        $data = $request->all();

        $data['interval_id'] =  $selectedInterval;
        $data['ordine'] = 1;
        $data['updated_at'] = $datetime->format('y-m-d H:i:s');
        $user = User::where('id', $data['user_id'])->first()->name;
        $car = Car::where('id', $data['car_id'])->first()->numar;
        $interval = Interval::where('id', $selectedInterval)->first()->interval;
        $luna = Month::where('id', Interval::where('id', $selectedInterval)->first()->month_id)->first()->anul_luna;
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
