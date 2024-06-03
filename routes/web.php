<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class,'index']);
Route::get('/siswa/create', [SiswaController::class,'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);

Route::get('/kelas', [KelasController::class,'index']);
Route::get('/kelas/create', [KelasController::class,'create']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::patch('/kelas/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);

//Route::get('/belajar', [SiswaController::class, 'index']);

//Route::get('/punten', [SiswaController::class, 'indek']);

//Route::get('/kelas', [KelasController::class, 'index']);


