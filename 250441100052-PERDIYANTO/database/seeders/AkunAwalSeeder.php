<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunAwalSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@perpus.test'],
            [
                'name' => 'Admin Perpustakaan',
                'password' => 'password',
            ]
        );
        $admin->syncRoles('admin');

        // email: petugas@perpus.test, name: Petugas Perpustakaan, role: petugas

        $petugas = User::firstOrCreate(
            ['email' => 'petugas@perpus.test'],
            [
                'name' => 'Petugas Perpustakaan',
                'password' => 'password',
            ]
        );
        $petugas->syncRoles('petugas');
    }
}