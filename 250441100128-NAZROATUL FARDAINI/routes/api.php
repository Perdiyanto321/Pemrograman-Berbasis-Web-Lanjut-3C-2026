<?php

use App\Http\Controllers\Api\BukuController;
use Illuminate\Support\Facades\Route;

Route::apiResource('buku', BukuController::class);

Route::get('rekap/buku-per-kategori', [BukuController::class, 'rekapBukuPerKategori']);
Route::get('rekap/pemminjaman-per-buku', [BukuController::class, 'rekapPeminjamanPerBuku']);
