<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeStoreRequest extends FormRequest
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
            // 'type_last_name' => [
            //     'nullable',
            //     'required_without_all:type_first_name,company_name',
            //     'string',
            //     'max:50',
            // ],
            // 'type_first_name' => [
            //     'nullable',
            //     'required_without_all:type_last_name,company_name',
            //     'string',
            //     'max:50',
            // ],
            // 'company_name' => [
            //     'nullable',
            //     'required_without_all:type_last_name,type_first_name',
            //     'string',
            //     'max:50',
            // ],
            // 'email' => [
            //     'nullable',
            //     'string',
            //     'email',
            //     'max:191',
            //     'unique:types',
            // ],
        ];
    }
}
