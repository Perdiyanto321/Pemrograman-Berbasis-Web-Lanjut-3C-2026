<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BukuController;


Route::apiResource('buku', BukuController::class);


Route::get('rekap/buku-per-kategori', [BukuController::class, 'bukuPerKategori']);
Route::get('rekap/peminjaman-per-buku', [BukuController::class, 'peminjamanPerBuku']);