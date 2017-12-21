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
            'title'         => 'required',
            'content'       => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg',
            'category_id'   => 'required',
            'user_id'       => 'required'

        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Dilarang Kosong',
            'image.image'           => 'Extensi Gambar Harus png,jpeg,jpg',
            'content.required'      => 'Conten Dilarang Kosong',
            'category_id.required'  => 'Pilih Salah Satu Category',
            'user_id.required'    => 'Login dulu',
        ];  
    }
}
