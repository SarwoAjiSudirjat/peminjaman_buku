<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('anggota', AnggotaController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('denda', DendaController::class);
Route::resource('buku', BukuController::class);
