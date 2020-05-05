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

// Índice de ordenes
Route::get('orders', 'OrdersController@index')->name('orders.index');

// Formulario de creación
Route::get('orders/create', 'OrdersController@create')->name('orders.create');

// Almacenamiento de la orden
Route::post('orders', 'OrdersController@store')->name('orders.store');

// Índice de carritos
Route::get('carts', 'CartsController@index')->name('carts.index');

// Creación de carritos
Route::get('orders/{order}/create-cart', 'OrdersController@createCart')->name('orders.carts.create');
