<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Productos;
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

Route::get('productos', 'App\Http\Controllers\ProductoController@index')->name('productos.index');

Route::get('productos/{id}/editar', 'App\Http\Controllers\ProductoController@editar')->name('productos.edit');

Route::get('crear', 'App\Http\Controllers\ProductoController@agregar');

Route::post('crear', 'App\Http\Controllers\ProductoController@crear')->name('productos.store');

Route::put('productos/{productos}/editar', 'App\Http\Controllers\ProductoController@update')->name('productos.update');

Route::delete('productos/{id}', 'App\Http\Controllers\ProductoController@destroy')->name('productos.destroy');
