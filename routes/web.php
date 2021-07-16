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

Route::get('/','ProductController@add_product');
Route::get('export', 'ProductController@export')->name('export');
Route::post('import', 'ProductController@importdata')->name('imports');
Route::post('importuser', 'UserController@importuser')->name('importuser');
Route::get('add-user','UserController@add_user');
