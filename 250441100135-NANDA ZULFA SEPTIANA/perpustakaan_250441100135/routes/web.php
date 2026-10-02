<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

// Halaman Beranda
Route::view('/', 'home')->name('home');

// Halaman Daftar Buku
Route::get('/buku', [BukuController::class, 'index'])
    ->name('buku.index');

// Halaman Detail Buku
Route::get('/buku/{id}', [BukuController::class, 'show'])
    ->name('buku.show');