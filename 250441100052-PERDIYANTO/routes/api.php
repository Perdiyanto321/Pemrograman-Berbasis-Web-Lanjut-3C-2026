<?php

use App\Http\Controllers\Api\BukuController;
use App\Http\Controllers\Api\RekapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {

    // Membaca data buku: admin, petugas, dan siswa
    Route::middleware('permission:lihat daftar buku')->group(function () {
        Route::apiResource('buku', BukuController::class)
            ->only(['index', 'show'])
            ->names('api.buku');
    });

    // Mengubah data buku: hanya admin dan petugas
    Route::middleware('permission:kelola data buku')->group(function () {
        Route::apiResource('buku', BukuController::class)
            ->only(['store', 'update', 'destroy'])
            ->names('api.buku');
    });

    // Rekap/laporan: hanya admin dan petugas
    Route::middleware('permission:lihat laporan perpustakaan')->group(function () {
        Route::prefix('rekap')->group(function () {
            Route::get('buku-per-kategori', [RekapController::class, 'bukuPerKategori']);
            Route::get('pemminjaman-per-buku', [RekapController::class, 'peminjamanPerBuku']);
        });
    });
});