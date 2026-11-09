<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunAwalSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::updateOrCreate(
            ['email' => 'admin@perpus.test'],
            [
                'name' => 'Admin Perpustakaan',
                'password' => 'passwordadmin',
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