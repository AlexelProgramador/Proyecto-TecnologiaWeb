<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/lugares')->with('success', 'Login account successfully');
        }
        return view('auth.login');
    }
    //
    public function show()
    {
        //Nos retorna a la vista logear 
        redirect('auth.login');
    }

    public function store(LoginRequest $request)
    {
        // Antes de subir los datos a la base de datos le solicitamos que pase por RegisterRequest.rules() esto para validar que se cumplan con los reglas que 
        // Solicitamos antes
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) {

            return redirect()->to('/login')->withErrors("Username or password incorrect!");
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }
    public function authenticated(Request $request, $user)
    {
        return redirect('/lugares');
    }
}
