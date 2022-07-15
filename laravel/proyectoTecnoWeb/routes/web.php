<?php

use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;
use App\Models\Lugar;

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
Route::get('/', function () {
    $lugares = Lugar::all();

    return view('visita.home')->with('lugares', $lugares);
});

Route::resource('buscar', 'App\Http\Controllers\BuscarController');


// Registrarse
Route::resource('registrarse', 'App\Http\Controllers\RegisterController');

//Login
Route::resource('login', 'App\Http\Controllers\LoginController');

//Logout
Route::resource('logout', 'App\Http\Controllers\LogoutController');

// Imagen
Route::resource('imagenes', 'App\Http\Controllers\ImagenController');

// Ruta controlador lugar 
Route::resource('lugares', 'App\Http\Controllers\LugarController');


//Ruta comentarios
Route::post('comentario', [ComentarioController::class, 'guardar'])->middleware('auth')->name('comentario.guardar');
