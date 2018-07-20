<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        if (auth()->check()){
                    
                if (auth()->user()->hasRoles(['admin'])) {
                    

                        return [
                                    'name' => '',
                                    'avatar' => 'image',
                                    'username' => 'unique:users,username,'.$this->route('id'),
                                    'password' =>'confirmed'
                                ];

                }elseif (auth()->user()->hasRoles(['alumno'])) {
                     return [
                                    'name' => '',
                                    'avatar' => 'image',
                                    'username' => 'unique:users,username,'.$this->route('id'),
                                    'password' =>'required|confirmed'
                                ];
                }
                elseif (auth()->user()->hasRoles(['docente'])) {
                    return [
                                    'name' => '',
                                    'avatar' => 'image',
                                    'username' => 'unique:users,username,'.$this->route('id'),
                                    'password' =>'required|confirmed'
                                ];
                }
                elseif (auth()->user()->hasRoles(['apoderado'])) {
                    return [
                                    'name' => '',
                                    'avatar' => 'image',
                                    'username' => 'unique:users,username,'.$this->route('id'),
                                    'password' =>'required|confirmed'
                                ];
                }
            }
        
    }
}
