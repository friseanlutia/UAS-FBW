<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::get('/mahasiswa_add', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa_add/insert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswa_edit/{id}', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa_delete/{id}', [MahasiswaController::class, 'delete']);
Route::delete('/mahasiswa_destroy/{id}', [MahasiswaController::class, 'destroy']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('/dosen/{id}', [DosenController::class, 'show']);
Route::get('/dosen_add', [DosenController::class, 'create']);
Route::post('/dosen_add/insert', [DosenController::class, 'insert']);
Route::get('/dosen_edit/{id}', [DosenController::class, 'edit']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::get('/dosen_delete/{id}', [DosenController::class, 'delete']);
Route::delete('/dosen_destroy/{id}', [DosenController::class, 'destroy']);


Route::get('/kaprodi', [KaprodiController::class, 'index'])->name('kaprodi');
Route::get('/kaprodi/{id}', [KaprodiController::class, 'show']);
Route::get('/kaprodi_add', [KaprodiController::class, 'create']);
Route::post('/kaprodi_add/insert', [KaprodiController::class, 'insert']);
Route::get('/kaprodi_edit/{id}', [KaprodiController::class, 'edit']);
Route::put('/kaprodi/{id}', [KaprodiController::class, 'update']);
Route::get('/kaprodi_delete/{id}', [KaprodiController::class, 'delete']);
Route::delete('/kaprodi_destroy/{id}', [KaprodiController::class, 'destroy']);


Route::get('/magang', [MagangController::class, 'index'])->name('magang');
Route::get('/magang/{id}', [MagangController::class, 'show']);
Route::get('/magang_add', [MagangController::class, 'create']);
Route::post('/magang_add/insert', [MagangController::class, 'insert']);
Route::get('/magang_edit/{id}', [MagangController::class, 'edit']);
Route::put('/magang/{id}', [MagangController::class, 'update']);
Route::get('/magang_delete/{id}', [MagangController::class, 'delete']);
Route::delete('/magang_destroy/{id}', [MagangController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
