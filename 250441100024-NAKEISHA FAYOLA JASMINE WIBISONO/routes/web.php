<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');
