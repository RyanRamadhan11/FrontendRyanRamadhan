<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostsMenuController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\PesananController;

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
    return view('master');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/after_register', function () {
    return view('Admin.after_register');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('dashboard',DashboardController::class)->middleware('auth');

Route::resource('kategori',KategoriController::class)->middleware('auth');
// Route::get('kategori-edit/{id}', [KategoriController::class,'edit']);
Route::get('kategori-pdf', [KategoriController::class,'kategoriPDF'])->middleware('auth');
Route::get('kategori-excel', [KategoriController::class,'kategoriExcel'])->middleware('auth');

Route::resource('postsMenu',PostsMenuController::class)->middleware('auth');
// Route::get('menu-edit/{id}', [MenuController::class,'edit']);
Route::get('postsMenu-pdf', [PostsMenuController::class,'menuPDF'])->middleware('auth');
Route::get('postsMenu-excel', [PostsMenuController::class,'menuExcel'])->middleware('auth');

Route::resource('meja',MejaController::class)->middleware('auth');
// Route::get('meja-edit/{id}', [MejaController::class,'edit']);
Route::get('meja-pdf', [MejaController::class,'mejaPDF'])->middleware('auth');
Route::get('meja-excel', [MejaController::class,'mejaExcel'])->middleware('auth');


Route::resource('pesanan',PesananController::class);
// Route::get('pesanan-edit/{id}', [PesananController::class,'edit']);
Route::get('pesanan-pdf', [PesananController::class,'pesananPDF']);
Route::get('pesanan-excel', [PesananController::class,'pesananExcel']);
