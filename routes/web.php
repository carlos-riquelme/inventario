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

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/panel', 'AdminController@index')->name('panel');
Route::resource('/admin/productos', 'ProductosController');
Route::resource('/admin/proveedores', 'ProveedorsController');
Route::get('/admin/productosnovigentes', 'ProductosController@novigente')->name('productos.novigente');
