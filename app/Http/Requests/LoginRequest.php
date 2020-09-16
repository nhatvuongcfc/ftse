<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'unique:users',
            'password'=>'bail|required',
        ];
    }
    // public function messenger(){
    //     'email.required'=>'Vui lòng nhập email',
    //     'email.unique:users'=>''
    // }
}
