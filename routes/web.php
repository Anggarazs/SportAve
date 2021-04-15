<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LapanganController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/changepassword', [App\Http\Controllers\ChangePasswordController::class, 'index']);
Route::post('/home/changepassword', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');
Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin');
Route::resource('admin/users', UserController::class);

Route::resource('admin/datalapangan', LapanganController::class);
Route::get('/admin/datalapangan', [App\Http\Controllers\LapanganController::class, 'index']);
Route::get('/admin/createlapangan', [App\Http\Controllers\LapanganController::class, 'create'])->name('dlapangan.create');
Route::post('/admin/simpan', [App\Http\Controllers\LapanganController::class, 'store'])->name('dlapangan.store');
Route::get('/admin/editlapangan/{id}', [App\Http\Controllers\LapanganController::class, 'edit'])->name('dlapangan.edit');

