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
        return [
            'kategori_id' => 'required|exists:kategoris,id',
            'judul'       => 'required|string|min:3|max:150',
            'penulis'     => 'required|string|min:3|max:100',
            'tahun_terbit'=> 'required|integer|between:1900,' . date('Y'),
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute wajib diisi.',
            'string'   => ':attribute harus berupa teks.',
            'min'      => ':attribute minimal :min karakter.',
            'max'      => ':attribute maksimal :max karakter.',
            'integer'  => ':attribute harus berupa bilangan bulat.',
            'between'  => ':attribute harus antara :min sampai :max.',
            'exists'   => ':attribute yang dipilih tidak valid.',
        ];
    }

    public function attributes(): array
    {
        return [
            'kategori_id'  => 'kategori',
            'tahun_terbit' => 'tahun terbit',
        ];
    }
}