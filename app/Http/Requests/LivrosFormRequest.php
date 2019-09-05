<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:10|max:40',
            'valor' => 'required|numeric',
            'autor_id' => 'required'
        ];
    }
    public function messages ()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo quarenta caracteres',
            'valor.numeric' => 'O campo valor precisa ter um número',
        ];
    }
}
