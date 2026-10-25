<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kategori_id' => Kategori::inRandomOrder()->first()->id ?? Kategori::factory(),
            'judul' => $this->faker->sentence(3),
            'penulis' => $this->faker->name(),
            'tahun_terbit' => $this->faker->year(),
            'gambar' => 'images/buku1.jpeg',
        ];
    }
}