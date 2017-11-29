<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title'         => 'required|unique:abouts,title',
            'content'       => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg'

        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Dilarang Kosong',
            'title.unique'          => 'Title Sudah Ada',
            'content.required'      => 'Content Dilarang Kosong',
            'image.image'           => 'Extensi Gambar Harus png,jpeg,jpg',

        ];  
    }
}
