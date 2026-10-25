<?php

namespace Database\Factories;

use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeminjamanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'anggota_id' => Anggota::inRandomOrder()->first()->id ?? Anggota::factory(),
            'buku_id' => Buku::inRandomOrder()->first()->id ?? Buku::factory(),
            'tanggal_pinjam' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->optional(0.7)->date(),
        ];
    }
}