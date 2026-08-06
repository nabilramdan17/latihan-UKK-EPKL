<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
 return 'Selamat datang di Sistem E-PKL';
});

Route::get('/', function () {
 return 'Halaman Utama E-PKL';
});
Route::get('/tentang', function () {
 return 'Halaman ini berisi informasi tentang modul E-PKL sekolah.';
});

Route::get('/kontak', function () {
 return 'Hubungi guru pembimbing PKL di ruang RPL.';
});

Route::get('/siswa/{nis}', function ($nis) {
 return 'Detail siswa PKL dengan NIS: ' . $nis;
});

Route::get('/siswa', function () {
 return 'Daftar siswa PKL';
})->name('siswa.index');

Route::prefix('perusahaan')->name('perusahaan.')->group(function () {
 Route::get('/', [PerusahaanController::class, 'index'])->name('index');

 Route::get('/{id}', [PerusahaanController::class, 'show'])->name('show');
});

Route::get('/perusahaan', [PerusahaanController::class, 'index'])
->name('perusahaan.index');

Route::get('/perusahaan/{id}', [PerusahaanController::class, 'show'])
->name('perusahaan.show');