<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'email' => [
                'string',
                'email',
                Rule::unique('users', 'email')->ignore($this->user),
            ],

            'name' => [
                'required',
                'string',
                'max:101',
                Rule::unique('users', 'name')->ignore($this->user),
            ],

            'is_admin' => [
                'required',
                'string',
                'min:1',
                'max:1',
            ],
        ];
    }
}
