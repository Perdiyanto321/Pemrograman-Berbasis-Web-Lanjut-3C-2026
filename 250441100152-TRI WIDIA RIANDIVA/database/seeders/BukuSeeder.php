<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil ID Kategori pertama atau buat jika belum ada
        $kategoriId = Kategori::first()?->id ?? Kategori::factory()->create()->id;

        $daftarBuku = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun_terbit' => 2005, 'cover' => asset('images/laskarpelangi.jpg')],
            ['judul' => 'Laut Bercerita', 'penulis' => 'Leila S. Chudori', 'tahun_terbit' => 2007, 'cover' => asset('images/lautbercerita.jpg')],
            ['judul' => 'Seporsi Mie Ayam Sebelum Mati', 'penulis' => 'Khoirul Trian', 'tahun_terbit' => 2024, 'cover' => asset('images/seporsimieayam.jpg')],
            ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun_terbit' => 2018, 'cover' => asset('images/filosofiteras.png')],
            ['judul' => 'Berpayung Tuhan', 'penulis' => 'Jaquenza Eden', 'tahun_terbit' => 2025, 'cover' => asset('images/berpayungtuhan.jpg')],
            ['judul' => 'Hidup Begitu Indah Hanya Itu Yang Kita Punya', 'penulis' => 'Dea Anugrah', 'tahun_terbit' => 2019, 'cover' => asset('images/hidupbbegituindah.jpeg')],
            ['judul' => 'Sabar Paling Dalam', 'penulis' => 'Fajar Sulaiman', 'tahun_terbit' => 2022, 'cover' => asset('images/sabarpalingdalam.jpeg')],
            ['judul' => 'Gesture', 'penulis' => 'Zaka Putra Ramdani', 'tahun_terbit' => 2021, 'cover' => asset('images/gesture.jpeg')],
        ];

        foreach ($daftarBuku as $buku) {
            Buku::create(array_merge($buku, ['kategori_id' => $kategoriId]));
        }
    }
}
