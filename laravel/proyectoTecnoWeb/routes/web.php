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

// Pagina principal
// Route::get('/', function () {
//     return view('index');
// });

Route::view('/', 'visita.home')->name('visita.home');
Route::resource('buscar', 'App\Http\Controllers\BuscarController');

// Registrarse
Route::resource('registrarse', 'App\Http\Controllers\RegisterController');

//Login
Route::resource('login', 'App\Http\Controllers\LoginController');

//Logout
Route::resource('logout', 'App\Http\Controllers\LogoutController');


// Ruta controlador lugar 
Route::resource('lugares', 'App\Http\Controllers\LugarController');
