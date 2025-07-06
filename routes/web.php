<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController; // ⬅️ Tambahan ini penting

// 🔐 Autentikasi bawaan Laravel Breeze/Fortify/Jetstream jika ada
require __DIR__.'/auth.php';

// ✅ Route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// ✅ Route resource Pasien
Route::resource('pasien', PasienController::class)->middleware('auth');

// ✅ Route resource Dokter
Route::resource('dokter', DokterController::class)->middleware('auth');

// ✅ Route resource Pendaftaran
Route::resource('pendaftaran', PendaftaranController::class)->middleware('auth');

// ✅ Laporan (jika pakai route khusus)
Route::get('/laporan', [PendaftaranController::class, 'laporan'])
    ->middleware('auth')
    ->name('laporan.index');

// ✅ Profil Rumah Sakit
Route::get('/profil', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profil');

// ✅ Home (opsional redirect ke login atau dashboard)
Route::get('/', function () {
    return redirect('/dashboard');
});
