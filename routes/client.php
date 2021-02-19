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

//-------------------------------------------------------------------------------------

//  cliente/ ->
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/configuracion','UserController@showConfiguracion')->name('configuracion');
Route::get('/carro','UserController@showCarro')->name('carro');
Route::get('/perfil','UserController@showPerfil')->name('perfil');
Route::get('/pedidos','UserController@showPedidos')->name('pedidos');
Route::get('/cuenta-corriente','UserController@showCtaCorriente')->name('cta.cte');
Route::get('/pagos','UserController@showPagos')->name('pagos');

Route::get('/categoria/{name}', 'ProductController@getCategoryProducts')->name('categoria');

Route::get('/producto-crear', 'ProductController@showNewProduct')->name('producto.crear');
Route::post('/producto-nuevo', 'ProductController@save')->name('producto.save');



