<?php

namespace App\Http\Requests;

use App\Models\Kmlog;
use App\Models\CarDep;
use App\Models\Setting;
use App\Models\UserCar;
use App\Models\UserDep;
use App\MyHelpers\AppHelper;
use Illuminate\Foundation\Http\FormRequest;

class KmlogStoreOrUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $selected_user_id = Setting::where('nume', 'userId')->where('interval_id', 1)->first()->valoare;
        $selected_car_id = Setting::where('nume', 'carId')->where('interval_id', 1)->first()->valoare;
        $selected_interval = AppHelper::getSelectedInterval();

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

        //nu se poate introduce un index mai mic decat cel mai mare index din intervalul anterior(daca exista) si nici decat cel mai mic din intervalul urmator (daca exista)
        $idx_ant_max = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id','<', $selected_interval->id )->orderby('km', 'desc')->first()->km;
        $idx_post_min = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id','>', $selected_interval->id)->orderby('km', 'asc')->first()->km;
        if(!$idx_post_min){
            $idx_post_min = 99999999;
        }
        if(!$idx_ant_max){
            $idx_ant_max = 0;
        }
        // dd($min);
       return [
            'km' => [
                'numeric',
                "max: $idx_post_min", 
                "min: $idx_ant_max"
            ],
            'stat_id' => [
                'integer',
            ],
            'car_id' => [
                'integer',
            ],
            'user_id' => [
                'integer',
            ],
            'department_id' => [
                'integer',
            ],
    ];
    }
    public function messages(){
        $selected_user_id = Setting::where('nume', 'userId')->where('interval_id', 1)->first()->valoare;
        $selected_car_id = Setting::where('nume', 'carId')->where('interval_id', 1)->first()->valoare;
        $selected_interval = AppHelper::getSelectedInterval();

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

        //nu se poate introduce un index mai mic decat cel mai mare index din intervalul anterior(daca exista) si nici decat cel mai mic din intervalul urmator (daca exista)
        $idx_ant_max = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id','<', $selected_interval->id )->orderby('km', 'desc')->first()->km;
        $idx_post_min = @Kmlog::where('department_id', $department_id)->where('user_id', $selected_user_id)->where('car_id', $selected_car_id)->where('interval_id','>', $selected_interval->id)->orderby('km', 'asc')->first()->km;
        if(!$idx_post_min){
            $idx_post_min = 99999999;
        }
        if(!$idx_ant_max){
            $idx_ant_max = 0;
        }

        return [
            'km' => 'Introduceti un index intre ' . $idx_ant_max . ' si ' . $idx_post_min . '. Aveti alte inregistrari in alte weekenduri ale caror indexe nu va permit sa puneti aici orice index.'
        ];
    }
}
