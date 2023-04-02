<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DepartmentUpdateRequest extends FormRequest
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
            // 'department_last_name' => [
            //     'nullable',
            //     'required_without_all:department_first_name,company_name',
            //     'string',
            //     'max:50',
            // ],
            // 'department_first_name' => [
            //     'nullable',
            //     'required_without_all:department_last_name,company_name',
            //     'string',
            //     'max:50',
            // ],
            // 'company_name' => [
            //     'nullable',
            //     'required_without_all:department_last_name,department_first_name',
            //     'string',
            //     'max:50',
            // ],
            // 'email' => [
            //     'nullable',
            //     'string',
            //     'email',
            //     'max:191',
            //     Rule::unique('departments', 'email')->whereNull('deleted_at')->ignore($this->department),
            // ],
        ];
    }
}
