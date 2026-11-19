<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Jobs\CatatAktivitasSiswa;
// use App\Http\Controllers\AkunUserController;
// use App\Http\Controllers\SiswaController;

// Route::get('/akun', [AkunUserController::class, 'index']);
// Route::get('/akun/{id}', [AkunUserController::class, 'show']);
// Route::post('/akun', [AkunUserController::class, 'store']);
// Route::put('/akun/{id}', [AkunUserController::class, 'update']);
// Route::patch('/akun/{id}', [AkunUserController::class, 'update']);
// Route::delete('/akun/{id}', [AkunUserController::class, 'destroy']);

// Route::resource('siswa', SiswaController::class);

Route::resource('siswa', SiswaController::class);