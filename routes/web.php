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
    return view('dashboard');
});

Route::get('/toko','StationeryController@index')->name("toko.index");
Route::get('/toko/create','StationeryController@create')->name("toko.create");
Route::get('/toko/{id}/edit', 'StationeryController@edit')->name("toko.edit");
Route::post('/toko/{id}/update', 'StationeryController@update');
Route::get('/toko/{id}/delete' , 'StationeryController@delete');

Route::get('/toko/export_excel', 'StationeryController@export_excel');