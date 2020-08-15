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



|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', 'PublicController@about')->name('about');

Auth::routes();

Route::get('admin', 'AdminController@index')->name('home');
route::resource('admin', 'AdminController');

Route::get('admin.create', 'AdminController@create')->name('create');
Route::post('admin.store', 'AdminController@store')->name('store');

