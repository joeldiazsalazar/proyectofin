<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateStudentRequest extends FormRequest
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
             'email' => 'required|unique:students,email',
             'dni' =>  'numeric|required|unique:students,dni|min:100000|max:99999999',
             'sexo' => 'required',
             'fecha_nacimiento' => 'required',
             'direccion' => 'required',
             'distrito' => 'required',
             'departamento' => 'required',
             'estado' => 'required',
             'attorney_id' => 'required'

        ];
    }
}
