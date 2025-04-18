<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\siswaController;
use App\Http\Controllers\api\KuisTerjemahanAksaraKeLatinController;
use App\Http\Controllers\api\KuisTerjemahanLatinKeAksaraController;
use App\Http\Controllers\api\NilaiKuisTerjemahanAksaraKeLatinController;
use App\Http\Controllers\api\NilaiKuisTerjemahanLatinKeAksaraController;
use App\Http\Controllers\api\AksaraSwaraController;
use App\Http\Controllers\api\AksaraNgalagenaController;
use App\Http\Controllers\api\NilaiKuisMenulisAksaraSwaraController;
use App\Http\Controllers\api\NilaiKuisMenulisAksaraNgalagenaController;
use App\Http\Controllers\api\MenulisAksaraSwaraController;
use App\Http\Controllers\api\MenulisAksaraNgalagenaController;


//Untuk Login
Route::post('/login', [siswaController::class, 'login']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Untuk Kuis Menulis Aksara Swara
Route::get('/menulis-aksara-swara', [MenulisAksaraSwaraController::class, 'index']);

//Untuk Kuis Menulis Aksara Ngalagena
Route::get('/menulis-aksara-ngalagena', [MenulisAksaraNgalagenaController::class, 'index']);

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

//Untuk Nilai Kuis Menulis Aksara Swara
Route::post('/nilai-menulis-swara', [NilaiKuisMenulisAksaraSwaraController::class, 'store']);
Route::get('/nilai-menulis-swara/{NIS}', [NilaiKuisMenulisAksaraSwaraController::class, 'show']);

// Route::prefix('nilai-kuis-menulis-aksara-swara')->group(function () {
//     Route::get('/', [NilaiKuisMenulisAksaraSwaraController::class, 'index']); // Get all data
//     Route::post('/', [NilaiKuisMenulisAksaraSwaraController::class, 'store']); // Create new record
//     Route::get('/{id}', [NilaiKuisMenulisAksaraSwaraController::class, 'show']); // Get single record
//     Route::put('/{id}', [NilaiKuisMenulisAksaraSwaraController::class, 'update']); // Update record
//     Route::delete('/{id}', [NilaiKuisMenulisAksaraSwaraController::class, 'destroy']); // Delete record
// });

//Route::get('/nilai-kuis-menulis-aksara-swara', [NilaiKuisMenulisAksaraSwaraController::class, 'index']);


//Untuk Nilai Kuis Menulis Aksara Ngalagena
Route::post('/nilai-menulis-ngalagena', [NilaiKuisMenulisAksaraNgalagenaController::class, 'store']);
Route::get('/nilai-menulis-ngalagena/{NIS}', [NilaiKuisMenulisAksaraNgalagenaController::class, 'show']);