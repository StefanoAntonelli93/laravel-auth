<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            // posso usare anche array per le validazioni
            'title' => 'required|string|unique:projects|min:5|max:70',
            'description' => 'string|min:5|max:255',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'title.required' => 'Il nome è obbligatorio',
    //         'title.min' => 'Minimo 5 caratteri',
    //     ];
    // }
}
