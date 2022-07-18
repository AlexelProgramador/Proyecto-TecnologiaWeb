<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ComentarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Como requisitos para el comentario tenemos que el input text,usuarioid y comentarioID son requeridos
            // Ademas decimos que el usuario debe existir en la tabla users, con su respectivo id
            // El comentarioID es para responder un comentario(no es implementado en la pagina).
            // Pero si en su modelo y BD
            'text' => 'required',
            'usuarioID' => 'required|exists:users,id',
            'comentarioID' => 'nullable|exists:comentario,id'
        ];
    }
}
