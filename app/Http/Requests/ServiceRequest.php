<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title'         => 'required|unique:services,title,slug',
            'image'         => 'image|mimes:png,jpg,jpeg',
            'content'       => 'required'
            

        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Dilarang Kosong',
            'title.unique'          => 'Judul Sudah Ada',
            'image.image'           => 'Extensi Gambar Harus png,jpeg,jpg',
            'content.required'      => 'Conten Dilarang Kosong',
           
        ];  
    }
}
