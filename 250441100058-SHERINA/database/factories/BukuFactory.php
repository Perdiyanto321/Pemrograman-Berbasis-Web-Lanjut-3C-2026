<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    public function definition(): array
{
    return [
        'kategori_id' => \App\Models\Kategori::factory(),
        'judul'        => fake()->sentence(3),
        'penulis'      => fake()->name(),
        'tahun_terbit' => fake()->year(),
        'cover'        => 'default.jpeg',
    ];
}
}