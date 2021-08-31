<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

// use DB;
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

Route::get('/get_produk_sub_kategori', [DashboardController::class, 'get_produk_sub_kategori']);
Route::get('/pesanan', [DashboardController::class, 'pesanan']);
Route::get('/keranjang', [DashboardController::class, 'keranjang']);
Route::get('/kategori/{kategori}', [DashboardController::class, 'kategori']);
Route::get('/flash-sale', [DashboardController::class, 'flash_sale']);
Route::get('/register', [DashboardController::class, 'register']);
Route::get('/login', [DashboardController::class, 'login']);
Route::get('/', [DashboardController::class, 'index']);

// admin
Route::get('/admin_index', [AdminController::class, 'index']);
Route::get('admin_daftar_pesanan', [AdminController::class, 'admin_daftar_pesanan']);
Route::get('admin_packing', [AdminController::class, 'admin_packing']);
Route::get('admin_dalam_pengantaran', [AdminController::class, 'admin_dalam_pengantaran']);


