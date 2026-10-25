<?php

namespace Database\Factories;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeminjamanFactory extends Factory
{
    protected $model = Peminjaman::class;

    public function definition(): array
    {
        return [
            // Mengambil ID anggota dan buku yang sudah ada di tabel induknya
            'anggota_id' => Anggota::inRandomOrder()->first()?->id ?? Anggota::factory(),
            'buku_id' => Buku::inRandomOrder()->first()?->id ?? Buku::factory(),
            'tanggal_pinjam' => fake()->date(),
            'tanggal_kembali' => fake()->boolean(70) ? fake()->date() : null, // 70% dikembalikan, 30% null
        ];
    }
}