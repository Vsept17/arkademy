<?php

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

Route::get('/produk','ProdukController@index');
Route::post('/produk/create','ProdukController@create');
Route::get('/produk/{id}/edit','ProdukController@edit');
Route::post('/produk/{id}/update','ProdukController@update');
Route::get('/produk/{id}/delete','ProdukController@delete');