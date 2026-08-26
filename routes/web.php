<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\KompetensiController;

// ==========================
// HOME
// ==========================

Route::get('/', function () {
    return view('home');
})->name('home');


// ==========================
// CRUD SISWA
// ==========================

Route::resource('siswa', SiswaController::class);


// ==========================
// CRUD PERUSAHAAN
// ==========================

Route::resource('perusahaan', PerusahaanController::class);


// ==========================
// CRUD KOMPETENSI
// ==========================

Route::resource('kompetensi', KompetensiController::class);