<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarStatFormRequest extends FormRequest
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
        $id = $this->carStat->id ?? 0;

        $sometimes = ($this->method() === 'PUT') ? 'sometimes|' : ''; //la update avem put si vrem ca email-ul si parola sa poata fi ignorate
        return [
        //Begin craft placeholder #1
		//End craft placeholder #1
        ];
    }
        /**
     *
     */
    public function messages()
    {
        //si da un mesaj de eroare daca nu se indeplineste validarea pentru fiecarState camp
        return [];
    }

}
