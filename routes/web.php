<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkunController;
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


Route::middleware('auth')->group(function (){
    Route::get('dashboard',[DashboardController::class,'index']);

    Route::get('tampil-mahasiswa',[MahasiswaController::class,'show']);
    Route::get('input-mahasiswa',[MahasiswaController::class,'index']);
    Route::post('kirim-mahasiswa', [MahasiswaController::class, 'input']);
    Route::get('delete-mahasiswa/{nim}',[MahasiswaController::class,'delete']);
    Route::get('edit-mahasiswa/{nim}',[MahasiswaController::class,'edit']);
    Route::post('update-mahasiswa/{nim}',[MahasiswaController::class,'update']);

    Route::get('input-tugas',[TugasController::class,'index']);
    Route::post('kirim-tugas', [TugasController::class, 'input']);
    Route::get('tampil-tugas',[TugasController::class,'show']);
    Route::get('delete-tugas/{id}',[TugasController::class,'delete']);
    Route::get('edit-tugas/{id}',[TugasController::class,'edit']);
    Route::post('update-tugas/{id}',[TugasController::class,'update']);

    Route::get('input-dosen',[DosenController::class,'index']);
    Route::post('kirim-dosen', [DosenController::class, 'input']);
    Route::get('tampil-dosen',[DosenController::class,'show']);
    Route::get('delete-dosen/{id}',[DosenController::class,'delete']);
    Route::get('edit-dosen/{id}',[DosenController::class,'edit']);
    Route::post('update-dosen/{id}',[DosenController::class,'update']);

    Route::post('logout',[LoginController::class,'logout']);

    Route::get('pengaturan',[AkunController::class,'index']);
    Route::post('update-password',[AkunController::class,'update']);
    Route::post('delete',[AkunController::class,'delete']);

});
Route::middleware('guest')->group(function (){
    Route::get('registrasi',[RegistrasiController::class,'index']);
    Route::post('registrasi-user',[RegistrasiController::class,'register']);

    Route::get("/",[LoginController::class,'index'])->name('login');
    Route::post("login",[LoginController::class,'authenticate']);
});
