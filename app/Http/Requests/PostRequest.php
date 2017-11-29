<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'         => 'required|unique:posts,title',
            'content'       => 'required',
            'category_id'   => 'required',
            'user_id'     => 'required'

        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Dilarang Kosong',
            'title.unique'        => 'Judul Dilarang Sama',
            'content.required'      => 'Conten Dilarang Kosong',
            'category_id.required'  => 'Pilih Salah Satu Category',
            'user_id.required'    => 'Login dulu',
        ];  
    }
}
