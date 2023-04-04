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
            'numar' => [
                'unique:cars',
                'string',
                'max:15',
            ],
            'consum_mediu' => [
                'decimal:1',
            ],
            'carburant' => [
                'string',
                'max:10',
            ],
            'observatii' => [
                'nullable',
                'string',
                'max:255',
            ],
            'brand_id' => [
                'nullable',
                'integer',
                // 'exists:brands',
            ],
            'type_id' => [
                'nullable',
                'integer',
                // 'exists:types',
            ],
        ];
    }
}
