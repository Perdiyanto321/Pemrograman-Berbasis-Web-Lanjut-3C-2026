<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuCrudController;

// 1. Beranda
Route::view('/', 'beranda')->name('home');

// 2 & 3. Daftar Buku dan Detail Buku (ditangani BukuController)
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');

Route::get('/kelola-buku', [BukuCrudController::class,'index'])->name('kelola-buku.index');
