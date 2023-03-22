<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
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
            // 'car_last_name' => [
            //     'nullable',
            //     'required_without_all:car_first_name,company_name',
            //     'string',
            //     'max:50',
            // ],
            // 'car_first_name' => [
            //     'nullable',
            //     'required_without_all:car_last_name,company_name',
            //     'string',
            //     'max:50',
            // ],
            // 'company_name' => [
            //     'nullable',
            //     'required_without_all:car_last_name,car_first_name',
            //     'string',
            //     'max:50',
            // ],
            // 'email' => [
            //     'nullable',
            //     'string',
            //     'email',
            //     'max:191',
            //     'unique:cars',
            // ],
        ];
    }
}
