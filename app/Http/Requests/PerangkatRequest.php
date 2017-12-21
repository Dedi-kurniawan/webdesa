<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerangkatRequest extends FormRequest
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
            'nama'          => 'required',
            'jabatan'       => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg'
            

        ];
    }

    public function messages()
    {
        return [
            'nama.required'         => 'Nama Dilarang Kosong',
            'jabatan.required'      => 'Jabatan Dilarang Kosong',
            'image.image'           => 'Extensi Gambar Harus png,jpeg,jpg',
         
        ];  
    }
}
