<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'id' => 'numeric|min:7|required',
            'nombre' => 'min:4|max:30|required',
            'apellido' => 'min:4|max:20|required',
            'password' => 'min:6|max:12|required',
            'email' => 'unique:users|required'
        ];
    }
}
