<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $bukuData = [
            [
                'judul' => 'Educated',
                'penulis' => 'Tara Westover',
                'tahun_terbit' => 2018,
                'kategori' => 'Biografi',
                'gambar' => 'images/buku1.jpeg'
            ],
            [
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'tahun_terbit' => 2019,
                'kategori' => 'Pengembangan Diri',
                'gambar' => 'images/buku2.jpeg'
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'tahun_terbit' => 2009,
                'kategori' => 'Novel',
                'gambar' => 'images/buku3.jpeg'
            ],
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2005,
                'kategori' => 'Novel',
                'gambar' => 'images/buku4.jpeg'
            ],
            [
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'tahun_terbit' => 2018,
                'kategori' => 'Filsafat',
                'gambar' => 'images/buku5.jpeg'
            ],
            [
                'judul' => 'Sang Pemimpi',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2006,
                'kategori' => 'Novel',
                'gambar' => 'images/buku6.png'
            ],
        ];

        foreach ($bukuData as $item) {
            $kategori = Kategori::firstOrCreate(['nama' => $item['kategori']]);

            Buku::create([
                'kategori_id'  => $kategori->id,
                'judul'        => $item['judul'],
                'penulis'      => $item['penulis'],
                'tahun_terbit' => $item['tahun_terbit'],
                'gambar'       => $item['gambar'],
            ]);
        }
    }
}