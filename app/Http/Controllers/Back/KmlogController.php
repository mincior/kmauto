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
use App\Models\CarDep;
use DateTimeImmutable;
use DateTimeInterface;
use App\Models\Setting;
use App\Models\UserCar;
use App\Models\UserDep;
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
use App\Http\Requests\KmlogStoreOrUpdateRequest;

class KmlogController extends Controller
{
    /**
     * afiseaza indexul
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);

        if ($request->ajax()) {
            //in $selected_interval exista un array numit 'arr_ids' doar daca intervalul selectat este de tip Toate
            $selected_interval = \App\MyHelpers\AppHelper::getSelectedInterval();
            $selected_interval_id = $selected_interval->id;
            $selected_user_id = Setting::where('nume', 'userId')->where('interval_id', 1)->first()->valoare;
            $selected_car_id = Setting::where('nume', 'carId')->where('interval_id', 1)->first()->valoare;
            $selected_department_id = Setting::where('nume', 'departmentId')->where('interval_id', 1)->first()->valoare;
            // dd($selected_interval_id, $selected_user_id, $selected_car_id);
            $kmlogs = Kmlog::with('stat', 'user', 'car', 'interval', 'department')->orderby('interval_id', 'asc')->orderby('user_id', 'asc')->orderby('km', 'asc')->select(sprintf('%s.*', (new Kmlog)->getTable()))->get();
            foreach ($kmlogs as $key => $kmlog) {
                $kmlog['month'] = Month::where('id', Interval::where('id', $kmlog->interval_id)->first()->month_id)->first();
                if ($selected_department_id > 0 && $kmlog->department_id != $selected_department_id) {
                    unset($kmlogs[$key]);
                }
                if ($selected_user_id > 0 && $kmlog->user_id != $selected_user_id) {
                    unset($kmlogs[$key]);
                }
                if ($selected_car_id > 0 && $kmlog->car_id != $selected_car_id) {
                    unset($kmlogs[$key]);
                }
                if ($selected_interval->arr_ids) {//sunt selectate Toate    
                    if (!in_array($kmlog->interval_id, $selected_interval->arr_ids)) {
                        unset($kmlogs[$key]);
                    }
                } else {
                    if ($kmlog->interval_id != $selected_interval_id) {
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

    /**
     * Afiseaza formularul pentru creare
     *
     * @return void
     */
    public function create()
    {
        //cand se alege o masina sau un user in Index, se va transmite la create prin tabelul settings
        $selected_user_id = Setting::where('nume', 'userId')->where('interval_id', 1)->first()->valoare;
        $selected_car_id = Setting::where('nume', 'carId')->where('interval_id', 1)->first()->valoare;
        $selected_interval = \App\MyHelpers\AppHelper::getSelectedInterval();


        $department_id = 0;
        if ($selected_user_id != '0') {
            $department_id = UserDep::where('user_id', $selected_user_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->department_id;
            $selected_car_id = @UserCar::where('user_id', $selected_user_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->car_id;
        } else {
            if ($selected_car_id != '0') {
                $department_id = CarDep::where('car_id', $selected_car_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->department_id;
                $selected_user_id = @UserCar::where('car_id', $selected_car_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->user_id;
            }
        }

        $stats = Stat::get();
        //nu se poate introduce un index mai mic decat cel mai mare index din intervalul anterior(daca exista) si nici decat cel mai mic din intervalul urmator (daca exista)
        $idx_ant_max = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id','<', $selected_interval->id )->orderby('km', 'desc')->first()->km;
        $idx_crt_min = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id', $selected_interval->id )->orderby('km', 'asc')->first()->km;
        $idx_crt_max = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id', $selected_interval->id )->orderby('km', 'desc')->first()->km;
        $idx_post_min = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id','>', $selected_interval->id)->orderby('km', 'asc')->first()->km;
        if(!$idx_post_min){
            $idx_post_min = 99999999;
        }
        if(!$idx_ant_max){
            $idx_ant_max = 0;
        }
        if(!$idx_crt_min){
            $idx_crt_min = $idx_post_min;
        }
        if(!$idx_crt_max){
            $idx_crt_max = $idx_crt_min;
        }
        return view('back.kmlogs.create', compact('stats'))->with(
            [
                'user_id' => $selected_user_id, 
                'car_id' => $selected_car_id,
                'department_id' => $department_id,
                'user_name' => @User::where('id',$selected_user_id)->first()->name, 
                'car_number' => @Car::where('id', $selected_car_id)->first()->numar, 
                'department_name' => @Department::where('id', $department_id)->first()->name,
                'idx_ant_max' => $idx_ant_max,
                'idx_crt_min' => $idx_crt_min,
                'idx_crt_max' => $idx_crt_max,
                'idx_post_min' => $idx_post_min
            ]);
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



    /**
     * Salveaza in baza de date noul obiect
     *
     * @param KmlogStoreRequest $request
     * @return void
     */
    public function store(KmlogStoreOrUpdateRequest $request)
    {
        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval()->id;

        $data = $request->all();
        $data['interval_id'] =  \App\MyHelpers\AppHelper::getSelectedInterval()->id;
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
        $kmlog->update(['is_first' => AppHelper::isFirsRowOfInterval($kmlog->id, $kmlog->user_id, $kmlog->car_id)]);
        // //sterge masina si utilizatorul selectat
        // if ($kmlog) {
        //     Setting::where('nume', "userId")->where('interval_id', 1)->update(array('valoare' => 0));
        //     Setting::where('nume', "carId")->where('interval_id', 1)->update(array('valoare' => 0));
        // }
        $notification = [
            "type" => "success",
            "title" => 'Add ...',
            "message" => 'Item added.',
        ];

        return redirect()->route('back.kmlogs.index')->with('notification', $notification);
    }

    /**
     * Afiseaza inregistrarea selectata
     *
     * @param Kmlog $kmlog
     * @return void
     */
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

    /**
     * Afiseaza formularul de modificare
     *
     * @param Kmlog $kmlog
     * @return void
     */
    public function edit(Kmlog $kmlog)
    {
        // //cand se alege o masina sau un user in Index, se va transmite la create prin tabelul settings
        // $selected_user_id = Setting::where('nume', 'userId')->where('interval_id', 1)->first()->valoare;
        // $selected_car_id = Setting::where('nume', 'carId')->where('interval_id', 1)->first()->valoare;
        // //aici interval id este cel din kmlog->interval_id si nu cel din tabelul settings
        $selected_interval = \App\MyHelpers\AppHelper::getSelectedInterval($kmlog->interval_id);
        // $department_id = 0;
        // if ($selected_user_id != '0') {
        //     $department_id = UserDep::where('user_id', $selected_user_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->department_id;
        //     $selected_car_id = @UserCar::where('user_id', $selected_user_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->car_id;
        // } else {
        //     if ($selected_car_id != '0') {
        //         $department_id = CarDep::where('car_id', $selected_car_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->department_id;
        //         $selected_user_id = @UserCar::where('car_id', $selected_car_id)->where('interval_id', '<=', $selected_interval->id)->orderby('interval_id', 'desc')->first()->user_id;
        //     }
        // }

        $department_name = Department::where('id', $kmlog->department_id)->first()->name;
        // $users = DepartmentController::getUsers($kmlog->department_id);
        // $cars = DepartmentController::getCars($kmlog->department_id);
        $stats = Stat::get();

        //nu se poate introduce un index mai mic decat cel mai mare index din intervalul anterior(daca exista) si nici decat cel mai mic din intervalul urmator (daca exista)
        $idx_ant_max = @Kmlog::where('department_id', $kmlog->department_id)->where('user_id', $kmlog->user_id)->where('car_id', $kmlog->car_id)->where('interval_id','<', $selected_interval->id )->orderby('km', 'desc')->first()->km;
        $idx_crt_min = @Kmlog::where('department_id', $kmlog->department_id)->where('user_id', $kmlog->user_id)->where('car_id', $kmlog->car_id)->where('interval_id', $selected_interval->id )->orderby('km', 'asc')->first()->km;
        $idx_crt_max = @Kmlog::where('department_id', $kmlog->department_id)->where('user_id', $kmlog->user_id)->where('car_id', $kmlog->car_id)->where('interval_id', $selected_interval->id )->orderby('km', 'desc')->first()->km;
        $idx_post_min = @Kmlog::where('department_id', $kmlog->department_id)->where('user_id', $kmlog->user_id)->where('car_id', $kmlog->car_id)->where('interval_id','>', $selected_interval->id)->orderby('km', 'asc')->first()->km;
        if(!$idx_post_min){
            $idx_post_min = 99999999;
        }
        if(!$idx_ant_max){
            $idx_ant_max = 0;
        }
        if(!$idx_crt_min){
            $idx_crt_min = $idx_post_min;
        }
        if(!$idx_crt_max){
            $idx_crt_max = $idx_crt_min;
        }

        return view('back.kmlogs.edit', compact('kmlog', 'stats'))->with(
            [
                'user_id' => $kmlog->user_id, 
                'car_id' => $kmlog->car_id,
                'department_id' => $kmlog->department_id,
                'user_name' => @User::where('id', $kmlog->user_id)->first()->name, 
                'car_number' => @Car::where('id', $kmlog->car_id)->first()->numar, 
                'department_name' => @Department::where('id', $kmlog->department_id)->first()->name,
                'idx_ant_max' => $idx_ant_max,
                'idx_crt_min' => $idx_crt_min,
                'idx_crt_max' => $idx_crt_max,
                'idx_post_min' => $idx_post_min
            ]);
    }

    /**
     * Modifica in baza de date inregistrarea 
     *
     * @param KmlogUpdateRequest $request
     * @param Kmlog $kmlog
     * @return void
     */
    public function update(KmlogStoreOrUpdateRequest $request, Kmlog $kmlog)
    {

        $datetime = new DateTime();
        $timezone = new DateTimeZone('Europe/Bucharest');
        $datetime->setTimezone($timezone);
        //aici intervalul vine din Kmlog->interval_id si nu din tabelul settings
        $selected_interval_id = \App\MyHelpers\AppHelper::getSelectedInterval($kmlog->interval_id)->id;
        $data = $request->all();

        $data['interval_id'] =  $selected_interval_id;
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
        $kmlog->update(['is_first' => AppHelper::isFirsRowOfInterval($kmlog->id, $kmlog->user_id, $kmlog->car_id)]);

        $notification = [
            "type" => "success",
            "title" => 'Edit ...',
            "message" => 'Item updated.',
        ];

        return redirect()->route('back.kmlogs.index')->with('notification', $notification);
    }

    /**
     * Sterge in masa
     *
     * @param Request $request
     * @return void
     */
    public function massDestroy(Request $request)
    {
        Kmlog::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
