<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookController;
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

Route::get('/home', [MenuController::class, 'beranda']);
Route::get('/novel-buku', [MenuController::class, 'novel']);
Route::get('/cergam-buku', [MenuController::class, 'cergam']);
Route::get('/komik-buku', [MenuController::class, 'komik']);
Route::get('/ensiklopedi-buku', [MenuController::class, 'ensiklopedi']);
Route::get('/antologi-buku', [MenuController::class, 'antologi']);
Route::get('/biografi-buku', [MenuController::class, 'biografi']);
Route::get('/profil', [MenuController::class, 'aboutus']);

Route::resource ('/book', (BookController::class));