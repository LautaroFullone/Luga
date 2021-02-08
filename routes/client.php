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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carro','UserController@ShowCarro')->name('client.carro');
Route::get('/perfil','UserController@ShowPerfil')->name('client.perfil');
Route::get('/modificar','UserController@modify')->name('client.modificar');


