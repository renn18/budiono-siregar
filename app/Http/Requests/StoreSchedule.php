<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchedule extends FormRequest
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
            'id_kapal'                  => 'required|unique:App\Models\Schedule,id_kapal',
            'nama_kapal'                => 'required',
            'tanggal_tiba'              => 'nullable|date',
            'tiba_dari'                 => 'nullable',
            'posisi_tambat'             => 'nullable',
            'tujuan'                    => 'nullable',
            'tanggal_rencana_berangkat' => 'nullable|date',
        ];
    }
}
