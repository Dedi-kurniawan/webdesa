<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
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
            'title'         => 'required|unique:notes,title',
            'content'       => 'required',
            'lokasi'        => 'required',
            'start_at'      => 'required',
            'finish_at'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Dilarang Kosong',
            'title.unique'        => 'Judul Catatan Sudah Ada',
            'content.required'      => 'Conten Dilarang Kosong',
            'lokasi.required'       => 'Lokasi/Tempat tidak boleh Kosong',
            'start_at.required'     => 'Mulai Tidak boleh Kosong',
            'finish_at.required'    => 'Selesai Tidak boleh Kosong',
        ];  
    }
}
