<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->randomElement([
                'Novel',
                'Fantasi',
                'Biografi',
                'Pendidikan',
                'Pengembangan Diri',
            ]),
        ];
    }
}