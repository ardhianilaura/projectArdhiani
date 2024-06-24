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

Route::get('/helo', 'BelajarController@helo');

Route::get('/biodata_diri', 'BelajarController@biodata_diri');

Route::get('/form_biodata', 'BelajarController@form_biodata');

Route::post('/save_biodata', 'BelajarController@save_biodata');

Route::get('/hitung_luas_segitiga', 'SegitigaController@hitung_luas_segitiga');

Route::post('/hasil_luas_segitiga', 'SegitigaController@hasil_luas_segitiga');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/input_produk', 'InputController@input_produk');

	Route::post('/save_input_produk', 'InputController@save_input_produk');

	Route::get('/list_produk', 'InputController@list_produk');

	Route::get('/delete_produk/{id}', 'InputController@delete_produk');

	Route::get('/edit_produk/{id}', 'InputController@edit_produk');

	Route::post('/save_edit_produk', 'InputController@save_edit_produk');

	Route::get('/detail_produk/{id}', 'InputController@detail_produk');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');