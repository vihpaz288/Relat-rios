<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'name' => [
                'required',
                'min:3',
                'max:20',
            ],

            'email' => [
                'required',
                'email',
                'min:12',
                'max:30',
                'unique:users,email',
            ],
            'password' => [
                'required',
                'min:3',
                'max:20',
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Campo nome é obrigatório',
            'name.min' => 'Campo nome tem uma quantidade mínima de 3 caracteres',
            'name.max' => 'Campo nome tem uma quantidade máxima de 20 caracteres',
            'email.required' => 'Campo email é obrigatório',
            'email.min' => 'Campo email tem uma quantidade mínima de 12 caracteres',
            'email.max' => 'Campo email tem uma quantidade máxima de 30 caracteres',
            'email.email' => 'Obrigatório ser um email',
            'email.unique' => 'Email já cadastrado',
            'password.required' => 'Campo senha é obrigatório',
            'password.min' => 'Campo senha tem uma quantidade mínima de 3 caracteres',
            'password.max' => 'Campo senha tem uma quantidade máxima de 20 caracteres',
        ];
    }
}
