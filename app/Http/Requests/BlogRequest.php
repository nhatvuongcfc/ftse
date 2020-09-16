<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required|unique:blogs|max:255',
            'content' => 'required',
            'image'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'max'=>':attribute không được quá :max ký tự',
            'unique'=>':attribute đã tồn tại'
        ];
    }
    public function attributes(){
        return [
            'title'=>'Tiêu đề',
            'content'=>'Nội dung',
            'image'=>'Ảnh'
        ];
    }
}
