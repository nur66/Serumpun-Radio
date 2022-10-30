<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KrewController;
use App\Http\Controllers\UserInterfaceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('landing-page');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tes-radio', [HomeController::class, 'tesRadio'])->name('radio');

// Kategori
Route::prefix('kategori')->group(function () {
    Route::get('/show', [KategoriController::class, 'show']);
    Route::get('/add', [KategoriController::class, 'add']);
    Route::post('/add-store', [KategoriController::class, 'addStore']);
    Route::get('/edit/{id}', [KategoriController::class, 'edit']);
    Route::post('/edit-store', [KategoriController::class, 'editStore']);
    Route::get('/delete/{id}', [KategoriController::class, 'delete']);
});

// Berita
Route::prefix('berita')->group(function () {
    Route::get('/show', [BeritaController::class, 'show']);
    Route::get('/add', [BeritaController::class, 'add']);
    Route::post('/add-store', [BeritaController::class, 'addStore']);
    Route::get('/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/edit-store', [BeritaController::class, 'editStore']);
    Route::get('/delete/{id}', [BeritaController::class, 'delete']);
});

// Krew
Route::prefix('krew')->group(function () {
    Route::get('/show', [KrewController::class, 'show']);
    Route::get('/add', [KrewController::class, 'add']);
    Route::post('/add-store', [KrewController::class, 'addStore']);
    Route::get('/edit/{id}', [KrewController::class, 'edit']);
    Route::post('/edit-store', [KrewController::class, 'editStore']);
    Route::get('/delete/{id}', [KrewController::class, 'delete']);
});

// User Interface
Route::get('/', [UserInterfaceController::class, 'home']);
Route::get('/berita', [UserInterfaceController::class, 'berita']);
Route::get('/kontak', [UserInterfaceController::class, 'kontak']);
Route::get('/info', [UserInterfaceController::class, 'info']);
Route::get('/musik', [UserInterfaceController::class, 'musik']);
