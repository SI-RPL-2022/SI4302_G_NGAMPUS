<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
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

//product
// Route::get('/admin/produk', 'ProductController@productAdmin');


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

Route::get('/artikel', function () {
    return view('artikel', [
        "title" => 'artikel',
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



//auth login register
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


