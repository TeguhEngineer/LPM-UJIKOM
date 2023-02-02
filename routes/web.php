<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanCOntroller;
use App\Http\Controllers\DatamasyarakatController;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\LaporanController;

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
Route::get('/', function () {
    return view('user.index');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/daftar', function () {
    return view('user.daftar');
});


// ADMIN

Route::get('/administrator',[AdminController::class,'index'])->name('login');
Route::get('/administratorDaftar',[AdminController::class,'daftar'])->name('daftar');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

Route::resource('/pengaduan',PengaduanController::class);
Route::resource('/tanggapan',TanggapanController::class);
Route::resource('/datamasyarakat',DatamasyarakatController::class);
Route::resource('/datapetugas',DatapetugasController::class);
Route::resource('/laporan',LaporanCOntroller::class);







Route::get('/laporan', function () {
    return view('admin.laporan');
});