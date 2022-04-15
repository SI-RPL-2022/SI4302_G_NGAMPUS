<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/admin/produk', [ProductController::class, 'productAdmin']);
Route::get('/admin/produk/tambah', [ProductController::class, 'create']);
Route::post('/admin/produk', [ProductController::class, 'store']);
Route::get('/admin/produk/{product}/edit', [ProductController::class, 'edit']);
Route::post('/admin/produk/{product}', [ProductController::class, 'update']);
Route::post('/admin/produk/{product}/delete', [ProductController::class, 'destroy']);

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'about',
    ]);
});

Route::get('/artikel', function () {
    return view('artikel', [
        "title" => 'artikel',
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio', [
        "title" => 'portofolio',
    ]);
});

Route::get('/team', function () {
    return view('team', [
        "title" => 'team',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => 'contact',
    ]);
});

// Admin
Route::get('/admin/produk', function () {
    return view('adminproduk.index');
});

//product
Route::get('/admin/produk', 'ProductController@productAdmin');
Route::get('/admin/produk/{id}', 'PegawaiController@destroy');

