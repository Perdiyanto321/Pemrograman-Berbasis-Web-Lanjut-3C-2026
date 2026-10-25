<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Mengizinkan request[cite: 2]
    }

    public function rules(): array
    {
        $currentYear = date('Y');
        return [
            'kategori_id' => 'required|exists:kategoris,id',
            'judul' => 'required|string|min:3|max:150',
            'penulis' => 'required|string|min:3|max:100',
            'tahun_terbit' => "required|integer|min:1900|max:{$currentYear}",
        ];
    }

    public function messages(): array
    {
        $currentYear = date('Y');
        return [
            'kategori_id.required' => 'Kategori wajib diisi.',
            'kategori_id.exists' => 'Kategori yang dipilih tidak valid.',
            'judul.required' => 'Judul buku wajib diisi.',
            'judul.string' => 'Judul harus berupa teks.',
            'judul.min' => 'Judul minimal 3 karakter.',
            'judul.max' => 'Judul maksimal 150 karakter.',
            'penulis.required' => 'Penulis wajib diisi.',
            'penulis.string' => 'Penulis harus berupa teks.',
            'penulis.min' => 'Penulis minimal 3 karakter.',
            'penulis.max' => 'Penulis maksimal 100 karakter.',
            'tahun_terbit.required' => 'Tahun terbit wajib diisi.',
            'tahun_terbit.integer' => 'Tahun terbit harus berupa bilangan bulat.',
            'tahun_terbit.min' => 'Tahun terbit minimal 1900.',
            'tahun_terbit.max' => "Tahun terbit harus antara 1900 sampai {$currentYear}.",
        ];
    }

    public function attributes(): array
    {
        return [
            'kategori_id' => 'kategori',
            'tahun_terbit' => 'tahun terbit',
        ];
    }
}