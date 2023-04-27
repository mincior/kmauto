<?php

namespace App\Http\Requests;

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
        return [
            'km' => [
                'numeric',
                'max: 999999'
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
}
