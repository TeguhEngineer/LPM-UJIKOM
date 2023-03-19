<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DaftarAdmin;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\DatamasyarakatController;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\ubahPasswordAdmin;
use App\Http\Controllers\ubahPasswordUser;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailUser;


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
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/daftar', [UserController::class, 'daftar'])->name('daftar');
Route::post('/daftar', [UserController::class, 'store'])->name('store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'autentikasi'])->name('autentikasi');

Route::group(['middleware' => ['auth', 'cekLevel:masyarakat']], function () {
    Route::get('/user', [UserController::class, 'indexuser'])->name('indexuser');
    Route::post('/user', [UserController::class, 'pengaduan'])->name('pengaduan');
    Route::resource('/profile-user', ProfileUserController::class);
    Route::resource('/ubah-password', ubahPasswordUser::class);
    Route::get('/keluar', [UserController::class, 'logout'])->name('logout');
    Route::resource('/detail', DetailUser::class);
    Route::get('/chat-support', [ChatController::class, 'help']);
    Route::get('/chat-support/{id}/{id2}', [ChatController::class, 'chatViewMasyarakat']);
    Route::post('/chat-support/{id}/{id2}', [ChatController::class, 'chatLogic']);
});


// ADMIN
Route::get('/administrator', [AdminController::class, 'index']);
Route::post('/administrator', [AdminController::class, 'autentikasi'])->name('autentikasi');


Route::group(['middleware' => ['auth', 'cekLevel:admin,petugas']], function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/pengaduan', PengaduanController::class);
    Route::resource('/tanggapan', TanggapanController::class);
    Route::resource('/datamasyarakat', DatamasyarakatController::class);
    Route::resource('/datapetugas', DatapetugasController::class);
    Route::resource('/ubahpassword', ubahPasswordAdmin::class);
    Route::resource('/laporan', LaporanController::class);
    Route::get('/cetaklaporan', [LaporanController::class, 'printlaporan']);
    Route::resource('/profile', ProfileController::class);
    Route::get('/chat-masuk', [ChatController::class, 'index']);
    Route::get('/chat/{id}/{id2}', [ChatController::class, 'chatView']);
    Route::post('/chat/{id}/{id2}', [ChatController::class, 'chatLogic']);
    Route::delete('chat/{id}', 'ChatController@deleteChat')->name('destroy.chat');
});
