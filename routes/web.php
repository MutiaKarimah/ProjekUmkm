<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/tambah', 'HomeController@tambah')->name('tambah');

Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/update', 'HomeController@update')->name('update');

Route::get('/coba', 'HomeController@coba')->name('coba');