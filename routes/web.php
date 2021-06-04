<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;

Route::get('/', [KeuanganController::class, 'first']);

Route::get('/home', [KeuanganController::class, 'home']);

Route::get('/home/tambah', [KeuanganController::class, 'tambah']);

Route::get('/keuangan/simpan', [KeuanganController::class, 'simpan']);

Route::get('/home/edit/{id}', [KeuanganController::class, 'edit']);

Route::put('/keuangan/update/{id}', [KeuanganController::class, 'update']);

Route::get('/home/hapus/{id}', [KeuanganController::class, 'hapus']);

Route::get('/dashboard', [KeuanganController::class, 'dashboard']);

Route::get('/login/req', [KeuanganController::class, 'login']);

Route::get('/info', [KeuanganController::class, 'info']);

Route::get('/logout', [KeuanganController::class, 'logout']);

