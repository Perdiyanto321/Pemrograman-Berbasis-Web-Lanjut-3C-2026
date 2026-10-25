<?php

namespace Database\Factories;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    protected $model = Buku::class;

    public function definition(): array
    {
        return [
            // Mengambil ID kategori yang sudah ada di tabel kategoris
            'kategori_id' => Kategori::inRandomOrder()->first()?->id ?? Kategori::factory(),
            'judul' => fake()->sentence(3),
            'penulis' => fake()->name(),
            'tahun_terbit' => fake()->numberBetween(2000, 2024),
        ];
    }
}