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
        "kampus" => 'Telkom University',
        "desc_kampus" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui ex, ullamcorper at magna in, sodales blandit magna. Nullam in tristique risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse eu urna at quam pharetra tempus vel faucibus diam. Nam tincidunt justo non justo porttitor, non molestie odio placerat. Donec porta imperdiet leo, eget tincidunt nisi hendrerit posuere. Vivamus ligula ligula, fermentum nec tincidunt ut, interdum molestie ante. Pellentesque mattis ex urna, eu facilisis sapien feugiat non. Aliquam id nisi id purus tristique pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis metus bibendum mi consequat tempus ut hendrerit purus. Pellentesque nisl felis, tincidunt eu pulvinar quis, viverra eu arcu. Proin eu fringilla orci, non finibus tellus. In vitae blandit sapien, ac fringilla sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean id nulla purus. Nulla semper nisi nec nunc dignissim imperdiet. Maecenas tempus mattis lacus, sed hendrerit sapien fringilla sagittis. Integer quam mi, tempor eu eros semper, porttitor feugiat eros.',
    ]);
});


route::get('/infojurusan', [JurusanController::class, 'index']);{

}

// Admin
Route::get('/admin/produk', function () {
    return view('adminproduk.index', [
        "title" => 'Admin Produk'

    ]);
});