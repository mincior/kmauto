<?php

namespace App\Http\Requests;

use App\Models\Kmlog;
use App\MyHelpers\AppHelper;
use Illuminate\Foundation\Http\FormRequest;

class KmlogStoreRequest extends FormRequest
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
        $selected_interval_id = AppHelper::getSelectedInterval()->id;
        //nu se poate introduce un index mai mic decat cel mai mare index din intervalul anterior
        $min = @Kmlog::where('car_id', $this->car_id)->where('user_id', $this->user_id)->where('department_id', $this->department_id)->where('interval_id', '<' , $selected_interval_id)->orderby('interval_id', 'desc')->first()->km;
        if(!$min) $min = 0;
        // dd($min);
       return [
            'km' => [
                'numeric',
                'max: 999999', 
                "min: $min"
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
        $selected_interval_id = AppHelper::getSelectedInterval()->id;
        $min = @Kmlog::where('car_id', $this->car_id)->where('user_id', $this->user_id)->where('department_id', $this->department_id)->where('interval_id', '<' , $selected_interval_id)->orderby('interval_id', 'desc')->first()->km;
        if(!$min) $min = 0;

        return [
            'km' => 'Ultimul index este ' . $min . '. Introduceti un index mai mare sau egal.' ,
        ];
    }
}
