<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBooksRequest extends FormRequest
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
                'title' => 'required|string|max:200|unique:books,title',
                'autor' => 'required|string|max:50',
                'publication_year' => 'required',
                'description' => 'required|string|max:200|unique:books,description',
                'category' => 'required',
                'language' => 'required',
                'front_page' => 'required',
        ];
    }
}
