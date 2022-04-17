<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ViewDataController;

use App\Http\Controllers\ArtikelController;

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

//product controller
Route::get('/admin/produk', [ProductController::class, 'productAdmin']);
Route::get('/admin/produk/tambah', [ProductController::class, 'create']);
Route::post('/admin/produk', [ProductController::class, 'store']);
Route::get('/admin/produk/{product}/edit', [ProductController::class, 'edit']);
Route::post('/admin/produk/{product}', [ProductController::class, 'update']);
Route::post('/admin/produk/{product}/delete', [ProductController::class, 'destroy']);

//produk user
Route::get('/', [ViewDataController::class, 'index']);
Route::get('/produk', [ViewDataController::class, 'indexProduct']);
Route::get('/produk/detail/{id}', [ViewDataController::class, 'indexProduct']);

//testimoni produk
Route::get('/admin/testimoni/produk', [ViewDataController::class, 'testimoniIndex']);
Route::get('/admin/testimoni/produk/show/{id}', [ViewDataController::class, 'testimoniShow']);
Route::get('/admin/testimoni/produk/hide/{id}', [ViewDataController::class, 'testimoniHide']);
Route::get('/produk/detail/{id}', [ViewDataController::class, 'indexProduct']);

//artikel info kampus
route::get('/artikel', [ArtikelController::class, 'index']);
route::get('/artikel/direktori/kampus/{id}', [ArtikelController::class, 'indexKampus'])->name('kampus');

route::get('/artikel/direktori/jurusan/{id}', [ArtikelController::class, 'indexJurusan'])->name('jurusan');

//home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});


Route::get('/tentang', function () {
    return view('tentang', [
        "title" => 'tentang',
    ]);
});


Route::get('/produk', function () {
    return view('produk.index', [
        "title" => 'produk',
    ]);
});

Route::get('/team', function () {
    return view('team', [
        "title" => 'team',
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => 'kontak',
    ]);
});

//master produk
Route::get('/admin/masterproduk', function () {
    return view('masterproduk.index', [
        "title" => 'masterproduk',
    ]);
});

//Produk Kami
Route::get('/detailproduk', function () {
    return view('produk.detailproduk', [
        "title" => 'contact',
    ]);
});





//auth login register
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


