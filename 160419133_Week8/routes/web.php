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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/listobat160419133', 'ObatController160419133@index');
Route::get('/obatbatuk160419133', 'ObatController160419133@obatbatuk');

Route::get('/daftarkategori160419133', 'CategoryController160419133@kategoritermahal');
Route::get('/stokobatbanyak160419133', 'ObatController160419133@stokterbanyak');

Route::get('/daftartransaksi', 'TransactionController@index');
Route::post('transaction/showDataAjax/', 'TransactionController@showAjax')->name('transaction.showAjax');

Route::resource('/buyers', 'BuyerController');

Route::resource('category', 'CategoryController160419133');
Route::resource('medicine', 'ObatController160419133');
