<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\viewTanggapanController;
use App\Http\Controllers\DatamasyarakatController;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\ubahPasswordAdmin;
use App\Http\Controllers\CetakLaporan;
use App\Http\Controllers\UserController;

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
// USER
Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/daftar',[UserController::class,'daftar'])->name('daftar');
Route::post('/daftar',[UserController::class,'store'])->name('store');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'autentikasi'])->name('autentikasi');
Route::get('/logout',[AdminController::class,'logout'])->name('logout')->middleware('auth');


// ADMIN
Route::get('/administrator',[AdminController::class,'index'])->name('login');
Route::post('/administrator',[AdminController::class,'autentikasi'])->name('autentikasi');

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::resource('/pengaduan',PengaduanController::class);
Route::resource('/tanggapan',TanggapanController::class);
Route::resource('/datamasyarakat',DatamasyarakatController::class);
Route::resource('/datapetugas',DatapetugasController::class);
Route::resource('/ubahpassword',ubahPasswordAdmin::class);
Route::get('/laporan',[CetakLaporan::class,'index'])->name('laporan');
Route::get('/cetaklaporan',[CetakLaporan::class,'printlaporan'])->name('printlaporan');