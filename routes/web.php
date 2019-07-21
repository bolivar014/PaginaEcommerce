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

/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','MainController@home');

Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');
Route::post('/products/store', 'ProductsController@store');

Route::get('/products/{id}/edit','ProductsController@edit');
Route::post('/products/{id}/store','ProductsController@store');
Route::get('/products/{id}/destroy','ProductsController@destroy');
Route::get('/products/{id}/show','ProductsController@show');
