<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\JurusanController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ViewDataController;

use App\Http\Controllers\ArtikelController;

use App\Http\Controllers\DaftarController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\MasterController;

use App\Http\Controllers\ProfileController;

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

//admin home
Route::get('/admin/home', [HomeController::class, 'homeAdmin']);
Route::get('/admin/home/show/{id}', [HomeController::class, 'adminShow']);
Route::get('/admin/home/hide/{id}', [HomeController::class, 'adminHide']);

//manajemen user controller
Route::get('/admin/user', [UserController::class, 'userAdmin']);
Route::get('/admin/user/tambah', [UserController::class, 'create']);
Route::post('/admin/user', [UserController::class, 'store']);
Route::get('/admin/user/{user}/detail', [UserController::class, 'detail']);
Route::get('/admin/user/{user}/edit', [UserController::class, 'edit']);
Route::post('/admin/user/{user}', [UserController::class, 'update']);
Route::post('/admin/user/{user}/delete', [UserController::class, 'destroy']);

//manajemen jurusan controller
Route::get('/admin/jurusan', [JurusanController::class, 'jurusanAdmin']);
Route::get('/admin/jurusan/tambah', [JurusanController::class, 'create']);
Route::post('/admin/jurusan', [JurusanController::class, 'store']);
Route::get('/admin/jurusan/{jurusan}/edit', [JurusanController::class, 'edit']);
Route::post('/admin/jurusan/{jurusan}', [JurusanController::class, 'update']);
Route::post('/admin/jurusan/{jurusan}/delete', [JurusanController::class, 'destroy']);

//admin section
Route::get('/admin/kampus', [AdminController::class, 'indexKampus'])->name('admin.kampus.index');
Route::get('/admin/kampus/create', [AdminController::class, 'createKampus'])->name('admin.kampus.create');
Route::post('/admin/kampus/store', [AdminController::class, 'storeKampus'])->name('admin.kampus.store');
Route::post('/admin/kampus/{id}/update', [AdminController::class, 'updateKampus'])->name('admin.kampus.update');
Route::post('/admin/kampus/{id}/delete', [AdminController::class, 'destroyKampus'])->name('admin.kampus.delete');
Route::get('/admin/kampus/{id}/edit', [AdminController::class, 'editKampus'])->name('admin.kampus.edit');


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
Route::get('/produk/{id}', [ViewDataController::class, 'indexProduct']);

//registrasi produk
Route::get('/produk/daftar/{id}', [DaftarController::class, 'registrasi']);
Route::post('/produk', [DaftarController::class, 'kegiatan'])->name('daftar');
Route::post('/kegiatanku/{id}', [DaftarController::class, 'kegiatan'])->name('daftar');
Route::get('/kegiatanku/{id}', [DaftarController::class, 'kegiatanIndex']);


//faq ngampus
Route::get('/admin/faq', [FaqController::class, 'faqAdmin']);
Route::get('/admin/faq/tambah', [FaqController::class, 'create']);
Route::post('/admin/faq', [FaqController::class, 'store']);
Route::get('/admin/faq/{faq}/edit', [FaqController::class, 'edit']);
Route::post('/admin/faq/{faq}', [FaqController::class, 'update']);
Route::post('/admin/faq/{faq}/delete', [FaqController::class, 'destroy']);

// FAQ
Route::get('/produk/{id}', [ViewDataController::class, 'faqIndex']);

//testimoni produk
Route::get('/admin/testimoni/produk', [ViewDataController::class, 'testimoniIndex']);
Route::get('/admin/testimoni/produk/show/{id}', [ViewDataController::class, 'testimoniShow']);
Route::get('/admin/testimoni/produk/hide/{id}', [ViewDataController::class, 'testimoniHide']);
Route::get('/produk/{id}', [ViewDataController::class, 'indexProduct']);

// master ngampus
Route::get('/admin/master', [MasterController::class, 'masterIndex']);
Route::get('/admin/master/{id}', [MasterController::class, 'edit']);
Route::post('/admin/master/{id}', [MasterController::class, 'update']);

//artikel info kampus
route::get('/artikel', [ArtikelController::class, 'index']);
route::get('/artikel/direktori/kampus/{id}', [ArtikelController::class, 'indexKampus'])->name('kampus');

route::get('/artikel/direktori/jurusan/{id}', [ArtikelController::class, 'indexJurusan'])->name('jurusan');

//profile
Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::get('/profile/{id}/update', [ProfileController::class, 'indexUpdate']);
Route::post('/profile/{id}/update', [ProfileController::class, 'updateProfile'])->name('profileUpdate');

//home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

//About Us
Route::get('/about', [ViewDataController::class, 'indexAboutUs']);



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

Route::get('/home', [HomeController::class, 'homeIndex']);

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/home/{id}', [HomeController::class, 'adminDetailHome'])->middleware('is_admin');

Route::get('/admin/approval', [HomeController::class, 'adminApproval']);
Route::post('admin/approval/update', [HomeController::class, 'adminUpdateHome'])->name('adminUpdate');
Route::get('admin/approval/{id}', [HomeController::class, 'adminDetailApproval'])->middleware('is_admin');
