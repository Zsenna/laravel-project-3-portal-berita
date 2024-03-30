<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaUtamaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\HomeController;
use App\Models\BertamaImage;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('halaman.halaman2');
Route::get('/halaman2', [HomeController::class, 'hal2']);
Route::get('/halaman3', [HomeController::class, 'hal3']);

Route::get('/header', function () {
    return view('layouts/header');
});

Route::get('/latest', function () {
    return view('halaman/latest');
});

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//protected from not login
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
//route yang mengandung controller resource CRUD harus menggunakan ::resource
Route::resource('/headline', HighlightController::class)->middleware('auth');
Route::resource('/bertama', BeritaUtamaController::class)->middleware('auth');

Route::get('/bertama/images/{id}', [BeritaUtamaController::class, 'images'])->name('bertama.images');
Route::post('/bertama/add-img/{id}', [BeritaUtamaController::class, 'updateImg']);
Route::get('/bertama/remove-img/{id}', [BeritaUtamaController::class, 'removeImg']);
