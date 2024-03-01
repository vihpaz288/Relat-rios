<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'max:30',
                'min:12',
            ],
            'password' => [
                'required',
                'max:20',
                'min:3'
            ],
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Campo email é obrigatório',
            'email.email' => 'Obrigatório ser um email',
            'email.max' => 'Campo email tem uma quantidade máxima de 30 caracteres',
            'email.min' => 'Campo email tem uma quantidade mínima de 12 caracteres',
            'password.required' => 'Campo senha é obrigatório',
            'password.max' => 'Campo senha tem uma quantidade máxima de 20 caracteres',
            'password.min' => 'Campo senha tem uma quantidade mínima de 3 caracteres',
        ];
    }
}
