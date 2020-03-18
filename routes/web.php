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

Route::get('/toko','StationeryController@index');
Route::post('/toko/create','StationeryController@create');
Route::get('/toko/{id}/edit', 'StationeryController@edit');
Route::post('/toko/{id}/update', 'StationeryController@update');
Route::get('/toko/{id}/delete' , 'StationeryController@delete');