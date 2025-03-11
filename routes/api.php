<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\SiswaController;
use App\Http\Controllers\api\KuisTerjemahanAksaraKeLatinController;
use App\Http\Controllers\api\KuisTerjemahanLatinKeAksaraController;
use App\Http\Controllers\api\NilaiKuisTerjemahanAksaraKeLatinController;
use App\Http\Controllers\api\NilaiKuisTerjemahanLatinKeAksaraController;
use App\Http\Controllers\api\AksaraSwaraController;
use App\Http\Controllers\api\AksaraNgalagenaController;

//Untuk Login
Route::post('/login', [SiswaController::class, 'login']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Untuk Kuis Terjemahan Aksara Ke Latin
Route::get('/quiz', [KuisTerjemahanAksaraKeLatinController::class, 'getQuestions']);
Route::post('/quiz', [KuisTerjemahanAksaraKeLatinController::class, 'store']);

//Untuk Kuis Terjemahan Latin Ke Aksara
Route::get('/kuis', [KuisTerjemahanLatinKeAksaraController::class, 'getQuestions']);
Route::post('/kuis', [KuisTerjemahanLatinKeAksaraController::class, 'store']);

//Untuk Nilai Kuis Terjemahan Aksara Ke Latin
Route::post('/nilai-kuis', [NilaiKuisTerjemahanAksaraKeLatinController::class, 'store']);
Route::get('/nilai-kuis/{NIS}', [NilaiKuisTerjemahanAksaraKeLatinController::class, 'show']);

//Untuk Nilai Kuis Terjemahan Latin Ke Aksara
Route::post('/nilai-latin-ke-aksara', [NilaiKuisTerjemahanLatinKeAksaraController::class, 'store']);
Route::get('/nilai-latin-ke-aksara/{NIS}', [NilaiKuisTerjemahanLatinKeAksaraController::class, 'show']);

//Untuk Menampilkan Aksara Swara
Route::get('/aksara-swara', [AksaraSwaraController::class, 'index']);

//Untuk Menampilkan Aksara Ngalagena
Route::get('/aksara-ngalagena', [AksaraNgalagenaController::class, 'index']);