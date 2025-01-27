<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'correo' => 'required|email|unique:users,correo|min:1|max:200',
            'cedula' => 'required|max:8|digits_between:6,8|unique:users,cedula',
            'clave' => 'required|string|min:5',
        ];
    }
}
