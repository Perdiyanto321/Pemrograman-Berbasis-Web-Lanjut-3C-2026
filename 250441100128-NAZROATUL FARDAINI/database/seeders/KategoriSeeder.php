<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = ['Biografi', 'Pengembangan Diri', 'Novel', 'Filsafat'];
        foreach ($kategoris as $nama) {
            Kategori::firstOrCreate(['nama' => $nama]);
        }
    }
}