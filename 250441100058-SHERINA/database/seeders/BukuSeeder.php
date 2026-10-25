<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $dataBuku = [
            [
                'kategori_id' => 1,
                'judul'        => 'Keajaiban Toko Kelontong Namiya',
                'penulis'      => 'Keigo Higashino',
                'tahun_terbit' => 2012,
                'cover'        => 'keajaiban-toko.jpeg',
            ],
            [
                'kategori_id' => 1,
                'judul'        => 'Laut Bercerita',
                'penulis'      => 'Leila S. Chudori',
                'tahun_terbit' => 2017,
                'cover'        => 'laut-bercerita.jpeg',
            ],
            [
                'kategori_id' => 1,
                'judul'        => 'The Psychology of Money',
                'penulis'      => 'Morgan Housel',
                'tahun_terbit' => 2020,
                'cover'        => 'money.jpeg',
            ],
            [
                'kategori_id' => 1,
                'judul'        => 'Galaksi',
                'penulis'      => 'Poppi Pertiwi',
                'tahun_terbit' => 2018,
                'cover'        => 'galaksi.jpeg',
            ],
            [
                'kategori_id' => 1,
                'judul'        => 'Laskar Pelangi',
                'penulis'      => 'Andrea Hirata',
                'tahun_terbit' => 2005,
                'cover'        => 'laskar-pelangi.jpeg',
            ],
        ];

        foreach ($dataBuku as $buku) {
            Buku::create($buku);
        }
    }
}