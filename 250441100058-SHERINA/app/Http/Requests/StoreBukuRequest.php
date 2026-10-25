<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        $tahunSekarang = date('Y');

        return [
            'kategori_id'  => 'required|exists:kategoris,id',
            'judul'        => 'required|string|min:3|max:150',
            'penulis'      => 'required|string|min:3|max:100',
            'tahun_terbit' => "required|integer|between:1900,{$tahunSekarang}",
        ];
    }

    public function messages(): array
    {
        $tahunSekarang = date('Y');

        return [
            'required' => ':attribute wajib diisi.',
            'string'   => ':attribute harus berupa teks.',
            'integer'  => ':attribute harus berupa bilangan bulat.',
            'min'      => ':attribute minimal :min karakter.',
            'max'      => ':attribute maksimal :max karakter.',
            'between'  => ':attribute harus antara :min sampai ' . $tahunSekarang . '.',
            'exists'   => ':attribute yang dipilih tidak valid.',
        ];
    }

    public function attributes(): array
    {
        return [
            'kategori_id'  => 'kategori',
            'judul'        => 'Judul buku',
            'penulis'      => 'penulis',
            'tahun_terbit' => 'tahun terbit',
        ];
    }
}