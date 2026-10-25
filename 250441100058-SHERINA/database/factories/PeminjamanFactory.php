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
            'anggota_id' => Anggota::factory(),   
            'buku_id' => Buku::factory(),          
            'tanggal_pinjam' => fake()->date(),    
            'tanggal_kembali' => fake()->optional()->date(), 
            'status' => fake()->randomElement(['dipinjam', 'dikembalikan']), 
        ];
    }
}