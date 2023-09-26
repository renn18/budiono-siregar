<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKapalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_kapal' => 'required',
            'keagenan' => 'required',
            'loa' => 'required|numeric',
            'gt' => 'required|numeric',
            'pemilik' => 'nullable|boolean',
            'bendera' => 'required'
        ];
    }
}
