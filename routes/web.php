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

Route::get('/products', 'ProductsController@index');                                // Lista Datos                                
Route::get('/products/create', 'ProductsController@create');                        // Carga Vista Crear
Route::post('/products', 'ProductsController@store');                               // Guarda Registro Nuevo
Route::get('/products/{id}/edit','ProductsController@edit');                        // Edita Producto
Route::post('/products/{id}/update','ProductsController@update');                     // Almacena Producto
Route::get('/products/{id}/destroy','ProductsController@destroy');
Route::get('/products/{id}/show','ProductsController@show');
