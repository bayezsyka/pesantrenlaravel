<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\PendaftaranController as AdminPendaftaranController;

use App\Http\Controllers\ArtikelController;


Route::get('/', [ArtikelController::class,'index'])->name('home');
Route::get('/artikel/{artikel}', [ArtikelController::class,'show'])->name('artikel.show');
Route::get('/artikel', [ArtikelController::class,'index'])->name('artikel.index');

Route::get('/pendaftaran', [PendaftaranController::class,'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftaranController::class,'store'])->name('pendaftaran.store');


Route::middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard', function(){return view('dashboard');})->name('dashboard');
    Route::get('/profile', [ProfileController::class,'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class,'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class,'destroy'])->name('profile.destroy');
=======
Route::resource('artikel', ArtikelController::class)->only(['index','show']);
Route::get('/', function () {
    return view('welkambgt');
})->middleware(['auth', 'verified'])->name('welkam');


    Route::resource('/dashboard/artikel', AdminArtikelController::class);
    Route::get('/dashboard/pendaftaran', [AdminPendaftaranController::class,'index'])->name('dashboard.pendaftaran.index');
});

require __DIR__.'/auth.php';
