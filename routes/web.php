<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;


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

Route::get('/detailproduk', function () {
    return view('produk.detailproduk', [
        "title" => 'contact',
    ]);
});

Route::get('/infojurusan', function () {
    return view('produk.infojurusan', [
        "title" => 'Info Jurusan',
    ]);
});
Route::get('/infokampus', function () {
    return view('produk.infokampus', [
        "title" => 'Info kampus',
    ]);
});


route::get('/infojurusan', [JurusanController::class, 'index']);{

}
route::get('/infokampus', [KampusController::class, 'index']);{

}

// Admin
Route::get('/admin/produk', function () {
    return view('adminproduk.index', [
        "title" => 'Admin Produk'

    ]);
});