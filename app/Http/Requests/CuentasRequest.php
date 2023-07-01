<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuentasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user' => 'required|unique:cuentas',
            'password' => 'bail|required|min:6|max:100|same:password2',
            'nombre' => 'bail|required|min:1|max:20',
            'apellido' => 'bail|required|min:1|max:20',
            'perfil_id' => 'bail|required|integer|gte:1|exists:perfiles,id',
        ];
    }

    public function messages():array
    {
        return [
            'user.required' => 'Indique nombre de usuario',
            'user.unique' => 'El nombre de usuario está ocupado',
            'nombre.required' => 'Indique el nombre (real) del usuario',
            'nombre.min' => 'El nombre debe tener entre 1 y 20 caracteres',
            'nombre.max' => 'El nombre debe tener entre 1 y 20 caracteres',
            'apellido.required' => 'Indique el nombre (real) del usuario',
            'apellido.min' => 'El apellido debe tener entre 1 y 20 caracteres',
            'apellido.max' => 'El apellido debe tener entre 1 y 20 caracteres',
            'password.required' => 'Indique contraseña del usuario',
            'password.min' => 'La contraseña debe tener entre 6 y 100 caracteres',
            'password.max' => 'La contraseña debe tener entre 6 y 100 caracteres',
            'password.same' => 'Las contraseñas no coinciden',
            'perfil.required' => 'Indique perfil del usuario',
            'perfil.integer' => 'Perfil no válido',
            'perfil.gte' => 'Perfil no válido',
            'perfil.exists' => 'Perfil no válido',
        ];
    }
}
