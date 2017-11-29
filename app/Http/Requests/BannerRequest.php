<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'status'        => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg'

        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Dilarang Kosong',
            'content.required'      => 'Content Dilarang Kosong',
            'status.required'       => 'Status Dilarang Kosong',
            'image.image'           => 'Extensi Gambar Harus png,jpeg,jpg',

        ];  
    }
}