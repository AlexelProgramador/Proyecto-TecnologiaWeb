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

Route::view('/', 'home')->name('home');
Route::view('buscar', 'buscar')->name('search');
Route::view('ingresar', 'iniciarSesion')->name('login');

// Registrarse
Route::resource('registrarse', 'App\Http\Controllers\RegisterController');

//Login
Route::resource('login', 'App\Http\Controllers\LoginController');

//Logout
Route::resource('logout', 'App\Http\Controllers\LogoutController');


// Ruta controlador lugar 
Route::resource('lugares', 'App\Http\Controllers\LugarController');
