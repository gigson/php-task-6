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
Route::get('/product/admin', 'ProductControllerForAdmin@index')->name('admin');
Route::post('/product/admin/store', 'ProductControllerForAdmin@store')->name('storeProduct');
Route::post('/product/admin/update', 'ProductControllerForAdmin@update')->name('updateProduct');
Route::get('/product/listings', 'ProductController@index')->name('listings');
