<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VimiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/target-list', [VimiController::class, 'targetVisi']);
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/beranda', BerandaController::class);
Route::get('/nav', function () {
    return view('layout.navbar');
});
Route::resource('product', ProductController::class);
Route::get('produk', function () {
    return view('menu.product');
});
Route::get('contact', [ContactController::class, 'index']);
Route::resource('profile', ProfileController::class);
Route::get('/tambah-produk', function () {
    return view('admin.inputProduct');
});
Route::resource('vimi', VimiController::class);
Route::resource('target', TargetController::class);
Route::resource('misi', MisiController::class);
Route::resource('news', NewsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('testi', TestimonialController::class);
