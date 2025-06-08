<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\PendaftaranController as AdminPendaftaranController;

// Halaman utama
Route::get('/', [ArtikelController::class, 'index'])->name('home');

// Artikel publik
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{artikel}', [ArtikelController::class, 'show'])->name('artikel.show');

// Formulir pendaftaran
Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// Route untuk user login & terverifikasi
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard (opsional: jika ingin pakai blade atau statis view)
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Artikel & pendaftaran untuk admin di dashboard
    Route::resource('dashboard/artikel', AdminArtikelController::class);
    Route::get('dashboard/pendaftaran', [AdminPendaftaranController::class, 'index'])->name('dashboard.pendaftaran.index');

    // Profile pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';
