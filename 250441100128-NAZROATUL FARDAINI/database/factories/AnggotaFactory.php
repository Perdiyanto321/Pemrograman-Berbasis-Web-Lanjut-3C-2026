<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'no_telepon' => $this->faker->phoneNumber(),
        ];
    }
}