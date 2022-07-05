<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function index()
    {
        // Detecta si estamos autenticados
        if (Auth::check()) {
            return redirect('/lugares')->with('success', 'Login account successfully');
        }
        $registrarse = User::all();
        return view('auth.register')->with('registrarse', $registrarse);
    }
    //
    public function show()
    {
        if (Auth::check()) {
            return redirect('lugares');
        }
        //Nos retorna a la vista registrar 
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        // Antes de subir los datos a la base de datos le solicitamos que pase por RegisterRequest.rules() esto para validar que se cumplan con los reglas que 
        // Solicitamos antes
        $user = User::create($request->validated());
        return redirect('login')->with('success', 'Account created successfully');
    }
}
