<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', App\Http\Controllers\UserController::class);

Route::resource('/mahasiswa', App\Http\Controllers\MahasiswaController::class);

Route::resource('/matkul', App\Http\Controllers\MatkulController::class);

Route::resource('/nilai', App\Http\Controllers\NilaiController::class);

Route::resource('/dosen', App\Http\Controllers\DosenController::class);
