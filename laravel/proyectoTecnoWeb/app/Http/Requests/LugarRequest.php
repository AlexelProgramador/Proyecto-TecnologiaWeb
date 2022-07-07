<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LugarRequest extends FormRequest
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
            //
            'nombre' => 'required',
            'descripcion' => 'required',
            'direccion' => 'required|unique:lugars,direccion',
        ];
    }
    public function messages()
    {
        return ['
        
        
        direccion.unique' => 'La direccion ya se encuentra registrada'];
    }
}
