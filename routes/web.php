<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaUtamaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HighlightController;
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
//route yang mengandung controller resource CRUD harus menggunakan ::resource
Route::resource('/headline', HighlightController::class)->middleware('auth');
Route::resource('/bertama', BeritaUtamaController::class)->middleware('auth');

Route::get('/bertama/images/{id}', [BeritaUtamaController::class, 'images'])->name('bertama.images');
Route::post('/bertama/add-img/{id}', [BeritaUtamaController::class, 'updateImg']);
Route::get('/bertama/remove-img/{id}', [BeritaUtamaController::class, 'removeImg']);
