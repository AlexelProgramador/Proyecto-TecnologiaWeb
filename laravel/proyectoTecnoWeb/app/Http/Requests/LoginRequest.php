<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Declaramos como required los inputs username y password
            'username' => 'required',
            'password' => 'required',
        ];
    }

    // Lo que hace esta funcion es permitirme ingresar con mi correo
    public function getCredentials()
    {
        $username = $this->get('username');
        // En caso de ser correo nos identifica el username con el correo registrado del usuario
        if ($this->isEmail($username)) {
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }
        return $this->only('username', 'password');
    }

    // Verifica si el username es ingresado como correo
    public function isEmail($value)
    {
        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['username' => $value], ['username' => 'email'])->fails();
    }
}
