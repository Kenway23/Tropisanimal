<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
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
Route::get('/login', [logincontroller::class, 'showlogin'])->name('login');


// Backend
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/about', Aboutcontroller::class);
Route::resource('/berita', Beritacontroller::class);
Route::resource('/galeri', Galericontroller::class);