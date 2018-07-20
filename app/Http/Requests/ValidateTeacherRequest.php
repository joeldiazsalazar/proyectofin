<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTeacherRequest extends FormRequest
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
             'correo' => 'required|unique:teachers,correo',
             'dni' =>  'numeric|required|unique:teachers,dni|min:100000|max:99999999',
             'sexo' => 'required',
             'profesion' => 'required',
             'estado' => 'required',
             'documentos' => 'required|mimes:pdf|max:10000'
        ];
    }
}
