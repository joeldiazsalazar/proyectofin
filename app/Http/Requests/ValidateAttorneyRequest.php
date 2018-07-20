<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAttorneyRequest extends FormRequest
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
    
            'nombres' => 'required|alpha',
            'apellidoPaterno' => 'required|alpha',
            'apellidoMaterno' => 'required|alpha',
            'dni' => 'numeric|required|unique:attorneys,dni|min:100000|max:99999999',
            'sexo' => 'required',
            'est_civil' => 'required',
            'direccion' => 'required',
            'celular' => 'numeric|required|unique:attorneys,celular|min:100000|max:999999999',
            'estado' => 'required'



        ];
    }
}
