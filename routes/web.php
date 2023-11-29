<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route Halaman home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

//Route Halaman produk
Route::get('produk', [\App\Http\Controllers\HomeController::class, 'produk'])->name('produk');

//Route Halaman detail
Route::get('detail/{car:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

//Route Halaman contact
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name('contact.store');
//Route Halaman about
Route::get('about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');

//Route Halaman dasboard admin
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index')->middleware('is_admin');

//Route Halaman daftar mobil admin
Route::resource('admin/cars', \App\Http\Controllers\Admin\CarController::class);
//Route Halaman update mobil
Route::put('admin/cars/update-image/{id}', [\App\Http\Controllers\Admin\CarController::class, 'updateImage'])->name('admin.cars.updateImage');

//Route Halaman daftar pesan admin
Route::get('admin/messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'] )->name('admin.messages.index');
//Route Halaman hapus pesan 
Route::delete('admin/messages/{message}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'] )->name('admin.messages.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
