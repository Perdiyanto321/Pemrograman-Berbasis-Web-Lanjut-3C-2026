<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    public function definition(): array
    {
        $buku = [
            [
                'kategori' => 'Novel',
                'judul' => 'Ayat-Ayat Cinta',
                'penulis' => 'Habiburrahman El Shirazy',
                'tahun_terbit' => 2004,
            ],
            [
                'kategori' => 'Fantasi',
                'judul' => 'Harry Potter and the Philosophers Stone',
                'penulis' => 'J.K. Rowling',
                'tahun_terbit' => 1997,
            ],
            [
                'kategori' => 'Novel',
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'tahun_terbit' => 2016,
            ],
            [
                'kategori' => 'Biografi',
                'judul' => 'Habis Gelap Terbitlah Terang',
                'penulis' => 'R.A. Kartini',
                'tahun_terbit' => 1992,
            ],
            [
                'kategori' => 'Pengembangan Diri',
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'tahun_terbit' => 2018,
            ],
        ];

        $data = fake()->unique()->randomElement($buku);

        $kategori = Kategori::where('nama', $data['kategori'])->firstOrFail();

        return [
            'kategori_id' => $kategori->id,
            'judul' => $data['judul'],
            'penulis' => $data['penulis'],
            'tahun_terbit' => $data['tahun_terbit'],
        ];
    }
}