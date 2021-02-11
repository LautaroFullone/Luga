<?php

use App\Http\Controllers\WebController;
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

Auth::routes();

Route::get('/', 'HomeController@home');

//-------------------------------------------------------------------------------------

Route::get('/index', 'WebController@index')->name('web.index');
Route::get('/producto', 'WebController@showSingleProduct')->name('single-product');
Route::get('/carro-de-compras', 'WebController@showShoppingCart')->name('shopping-cart');
Route::get('/contacto', 'WebController@showContact')->name('contact');





