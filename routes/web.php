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

// route beranda
Route::get('beranda', function () {
    $html = "<h1>Nasywa</h1>";
    return view('beranda', compact('html'));
});

// route Mycontroller
route::get('latihan-controller',[MyController::class,'latihan']);

// route Mycontroller biodata
route::get('biodata',[MyController::class,'biodata']);
