<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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



Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/pengaduan', function () {
    return view('admin.pengaduan');
});
Route::get('/tanggapan', function () {
    return view('admin.tanggapan');
});
Route::get('/datamasyarakat', function () {
    return view('admin.datamasyarakat');
});
Route::get('/datapetugas', function () {
    return view('admin.datapetugas');
});
Route::get('/laporan', function () {
    return view('admin.laporan');
});