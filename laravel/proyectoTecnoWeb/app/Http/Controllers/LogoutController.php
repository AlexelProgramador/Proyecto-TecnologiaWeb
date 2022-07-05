<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    //
    public function index()
    {
        // Permite actualizar el flujo de nuestras sesiones, esto para cerrar todas sesiones abiertas
        Session::flush();

        //Cerramos sesion
        Auth::logout();

        return redirect('/login');
    }
}
