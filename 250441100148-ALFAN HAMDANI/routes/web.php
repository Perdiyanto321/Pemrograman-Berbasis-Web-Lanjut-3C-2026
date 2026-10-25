<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;


// 1. Route Beranda
Route::get('/', function () {
    return view('home');
})->name('home');

// 2 & 3. Route Buku (Daftar & Detail) dikelola oleh BukuController
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');