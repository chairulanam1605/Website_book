<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('home',function () {
    return view('home');
});

Route::get('books', 'App\Http\Controllers\BooksController@data');
Route::get('books/add', 'App\Http\Controllers\BooksController@add');
Route::post('books', 'App\Http\Controllers\BooksController@addProcess');
Route::get('books/edit/{id}', 'App\Http\Controllers\BooksController@edit');
Route::patch('books/{id}', 'App\Http\Controllers\BooksController@editProcess');
Route::delete('books/{id}', 'App\Http\Controllers\BooksController@delete');

route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class,'logout'])->name('logout');