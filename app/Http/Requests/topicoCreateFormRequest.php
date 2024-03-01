<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class topicoCreateFormRequest extends FormRequest
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
            'titulo' => [
                'required',
                'max:30',
                'min:4',
                'unique:topicos,titulo,NULL,id,user_id,' . request()->user_id,
            ]
        ];
    }
    public function messages()
    {
        return [
            'titulo.required' => 'Campo nome é obrigatório',
            'titulo.max' => 'Campo nome tem uma quantidade máxima de 30 caracteres',
            'titulo.min' => 'Campo nome tem uma quantidade mínima de 4 caracteres',
            'titulo.unique' => 'Tópico já cadastrado',

        ];
    }
}
