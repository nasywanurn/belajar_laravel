<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

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

// route view
Route::get('beranda', function () {
    $html = "<h1>Nasywa</h1>";
    return view('beranda', compact('html'));
});

// route Mycontroller
route::get('latihan-controller',[MyController::class,'latihan']);

// route Mycontroller biodata
route::get('biodata',[MyController::class,'biodata']);

Route::get('bio', [MyController::class, 'bio']);

Route::get('barang', [MyController::class, 'barang']);
Route::get('pembelian', [MyController::class, 'pembelian']);
Route::get('pesanan', [MyController::class, 'pesanan']);
Route::get('suplier', [MyController::class, 'suplier']);
Route::get('pembeli', [MyController::class, 'pembeli']);


Route::get('barang/{id}', [MyController::class, 'showBarang']);
Route::get('pembeli/{id}', [MyController::class, 'showPembeli']);
Route::get('pembelian/{id}', [MyController::class, 'showPembelian']);
Route::get('pesanan/{id}', [MyController::class, 'showPesanan']);
Route::get('suplier/{id}', [MyController::class, 'showSuplier']);

