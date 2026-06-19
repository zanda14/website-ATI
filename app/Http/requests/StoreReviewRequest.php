<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_lengkap' => ['required', 'string', 'max:100'],
            'perusahaan'   => ['nullable', 'string', 'max:100'],
            'layanan'      => ['required', 'array', 'min:1'],
            'layanan.*'    => ['string', 'in:CCTV & Surveillance,Fire Alarm,Access Control,Networking & IT,Display System,Conference System'],
            'rating'       => ['required', 'integer', 'min:1', 'max:5'],
            'ulasan'       => ['required', 'string', 'min:10', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'layanan.required'      => 'Pilih minimal satu layanan.',
            'layanan.*.in'          => 'Layanan yang dipilih tidak valid.',
            'rating.required'       => 'Pilih rating bintang terlebih dahulu.',
            'rating.min'            => 'Rating minimal 1 bintang.',
            'rating.max'            => 'Rating maksimal 5 bintang.',
            'ulasan.required'       => 'Ulasan wajib diisi.',
            'ulasan.min'            => 'Ulasan minimal 10 karakter.',
            'ulasan.max'            => 'Ulasan maksimal 1000 karakter.',
        ];
    }
}
