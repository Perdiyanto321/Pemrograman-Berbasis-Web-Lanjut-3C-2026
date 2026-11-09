<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\BukuCrudController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KelolaPeminjamanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Api\BukuController as ApiBukuController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman yang hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {

    Route::middleware('permission:lihat daftar buku')->group(function () {
        Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
        Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');
    });

    Route::get('/kelola-buku', [BukuCrudController::class, 'index'])
        ->middleware('can:kelola-buku')
        ->name('kelola-buku.index');

    // Profil (permission dan kepemilikan ditambah di langkah profil)
    Route::get('/profile', [ProfileController::class, 'edit'])
    ->middleware('permission:lihat profil sendiri')
    ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->middleware('permission:ubah profil sendiri')
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->middleware('permission:hapus profil sendiri')
        ->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])
        ->middleware('permission:akses dashboard admin')
        ->name('admin.dashboard');

    Route::get('/petugas/dashboard', [DashboardController::class, 'petugas'])
        ->middleware('permission:akses dashboard petugas')
        ->name('petugas.dashboard');

    Route::get('/siswa/dashboard', [DashboardController::class, 'siswa'])
        ->middleware('permission:melihat status peminjaman sendiri')
        ->name('siswa.dashboard');

    Route::get('/admin/users', [UserController::class, 'index'])
        ->middleware('permission:kelola data pengguna')
        ->name('admin.users.index');

    Route::patch('/admin/users/{user}/role', [UserController::class, 'updateRole'])
        ->middleware('permission:kelola role pengguna')
        ->name('admin.users.role');

    Route::get('/peminjaman-saya', [PeminjamanController::class, 'index'])
        ->middleware('permission:melihat riwayat peminjaman sendiri')
        ->name('peminjaman.index');

    Route::get('/peminjaman/{peminjaman}', [PeminjamanController::class, 'show'])
        ->middleware('permission:melihat status peminjaman sendiri')
        ->name('peminjaman.show');

    Route::post('/peminjaman', [PeminjamanController::class, 'store'])
        ->middleware('permission:mengajukan peminjaman buku')
        ->name('peminjaman.store');

    Route::get('/kelola-peminjaman', [KelolaPeminjamanController::class, 'index'])
        ->middleware('permission:kelola peminjaman')
        ->name('kelola.peminjaman');

    Route::patch('/kelola-peminjaman/{peminjaman}/setujui', [KelolaPeminjamanController::class, 'setujui'])
        ->middleware('permission:memproses persetujuan peminjaman')
        ->name('kelola.peminjaman.setujui');

    Route::patch('/kelola-peminjaman/{peminjaman}/tolak', [KelolaPeminjamanController::class, 'tolak'])
        ->middleware('permission:memproses persetujuan peminjaman')
        ->name('kelola.peminjaman.tolak');

    Route::get('/kelola-pengembalian', [KelolaPeminjamanController::class, 'pengembalian'])
        ->middleware('permission:kelola pengembalian')
        ->name('kelola.pengembalian');

    Route::patch('/kelola-pengembalian/{peminjaman}/kembalikan', [KelolaPeminjamanController::class, 'kembalikan'])
        ->middleware('permission:mencatat pengembalian buku')
        ->name('kelola.pengembalian.kembalikan');

    Route::get('/laporan', [LaporanController::class, 'index'])
        ->middleware('permission:lihat laporan perpustakaan')
        ->name('laporan.index');

    Route::get('/buku-cari', [BukuController::class, 'cari'])
        ->name('buku.cari');

    Route::delete('/buku/{id}', [ApiBukuController::class, 'destroy'])
        ->middleware('permission:kelola data buku')
        ->name('buku.destroy');
    });

require __DIR__.'/auth.php';