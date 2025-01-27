<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\UsuariosController;
use Illuminate\Validation\Rule;

class UpdateUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:50|min:4',
            'correo' => ['required', 'email', 'min:1', 'max:200', Rule::unique('users')->ignore($this->user->correo)],
            'cedula' => ['required','max:8','digits_between:6,8', Rule::unique('users')->ignore($this->user->cedula)], 
            'rol' => 'required',
        ];
    }
}
