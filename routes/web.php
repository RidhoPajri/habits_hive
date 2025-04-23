<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdmin;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AgenController;
use App\Models\Artikel;
use App\Models\Produk;
use App\Models\Agen;




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

Route::get('/artikel', function () {
    $artikel = Artikel::all();
    return view('artikel', compact('artikel'));
});

Route::get('/produk', function () {
    $produk = Produk::all();
    return view('produk', compact('produk'));
});

Route::get('/agen', function () {
    $agen = Agen::all();
    return view('agen', compact('agen'));
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/contact', function () {
    return view('contact');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('layouts.backend');
    });
    // untuk Route Backend Lainnya
});

Route::group(['prefix' =>  'admin', 'middleware' => 'auth'], function() {
    Route::resource('user', UserController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('agen', AgenController::class);

});





