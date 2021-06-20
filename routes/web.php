<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\BokingController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/', LandingPage::class);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/changepassword', [ChangePasswordController::class, 'index']);
Route::post('/welcome', [ChangePasswordController::class, 'store'])->name('change.password');

Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin');
Route::resource('admin/users', UserController::class);
Route::get('/edituser', [UserController::class, 'edit'])->name('users.edit');
Route::put('/edituser', [UserController::class, 'update'])->name('users.update');
Route::resource('admin/boking', TransaksiController::class);

Route::resource('admin/datalapangan', LapanganController::class);
Route::get('/admin/datalapangan', [LapanganController::class, 'index']);
Route::get('/admin/createlapangan', [LapanganController::class, 'create'])->name('dlapangan.create');
Route::post('/admin/simpan', [LapanganController::class, 'store'])->name('dlapangan.store');
Route::get('/admin/editlapangan/{id}', [LapanganController::class, 'edit'])->name('dlapangan.edit');
Route::post('/admin/updatelapangan/{id}', [LapanganController::class, 'update'])->name('dlapangan.update');

Route::resource('boking', BokingController::class);

Route::resource('transaksi', TransaksiController::class);
Route::put('/admin/transaksi-konfirmasi/{id}', [TransaksiController::class, 'konfirmasi'])->name('transaksi-konfirmasi.update');

