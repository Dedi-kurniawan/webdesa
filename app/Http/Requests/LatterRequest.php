<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LatterRequest extends FormRequest
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
            'nosurat'     => 'required|unique:letters,nosurat',
            'tanggal'     => 'required',
            'tanggalsurat'=> 'required',
            'prihal'      => 'required',
            'pengirim'    => 'required',
            'jenissurat'  => 'required',
            'uraian'      => 'required'

            
        ];
    }

    public function messages()
    {
        return[
            'nosurat.required'      => 'No Surat Dilarang Kosong',
            'nosurat.unique'        => 'No Surat Dilarang Sama',
            'jenissurat.required'   => 'No Surat Dilarang Kosong',
            'tanggal.required'      => 'Tanggal Kirim/Terima Dilarang Kosong',
            'tanggalsurat.required' => 'Tanggal Surat Dilarang Kosong',
            'prihal.required'       => 'Perihal Dilarang Kosong',
            'uraian.required'       => 'Uraian Dilarang Kosong',
        ];
    }
}
