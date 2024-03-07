<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class relatorioCreateFormRequest extends FormRequest
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
        $anoLimite = Date('Y') + 2;
        return [
            'titulo' => [
                'required',
                'min:3',
                'max:30'
            ],
            'descrição' => [
                'required',
                'min:3',
                'max:100'
            ],
            'tempo' => [
                'date_format:Y-m-d',
                'date',
                'after_or_equal:today',
                'before_or_equal:' . $anoLimite . '-12-31',
                'required',
            ],
            'topico_id' => [
                'required',

            ]
        ];
    }
    public function messages()
    {
        return [
            'tempo.after_or_equal' => 'Prazo final não pode ser menor que data atual',
            'tempo.before_or_equal' => 'Data não pode ser maior que dois anos da data atual',
            'date_format' => 'Data precisa ser em um formato valido.',
            'tempo.required' => 'Prazo final é obrigatória',
            'tempo.date' => 'Prazo final precisa ser selecionado',
            'titulo.required' => 'Campo título é obrigatório',
            'titulo.min' => 'Campo título tem quantidade mínima de 3 caracteres',
            'titulo.max' => 'Campo título tem quantidade máxima de 30 caracteres',
            'descrição.required' => 'Campo descrição é obrigatório',
            'descrição.min' => 'Campo descrição tem quantidade mínima de 3 caracteres',
            'descrição.max' => 'Campo descrição tem quantidade máxima de 200 caracteres',
            'topico_id.required' => 'Campo tópico é obrigatório',
        ];
    }
}
