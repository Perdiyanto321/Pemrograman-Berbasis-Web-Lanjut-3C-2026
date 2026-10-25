<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BukuController;
use App\Http\Controllers\Api\RekapController;

Route::apiResource('buku', BukuController::class)->names('api.buku');

Route::prefix('rekap')->group(function () {
    Route::get('buku-per-kategori', [RekapController::class, 'bukuPerKategori']);
    Route::get('pemminjaman-per-buku', [RekapController::class, 'peminjamanPerBuku']);
});