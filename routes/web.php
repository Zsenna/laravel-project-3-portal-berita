<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaUtamaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HighlightController;
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
    return view('halaman/halaman1');
});

Route::get('/halaman1', function () {
    return view('halaman/halaman1');
});

Route::get('/halaman2', function () {
    return view('halaman/halaman2');
});

Route::get('/halaman3', function () {
    return view('halaman/halaman3');
});

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//protected from not login
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/headline', [HighlightController::class, 'index'])->middleware('auth');
Route::get('/bertama', [BeritaUtamaController::class, 'index'])->middleware('auth');
