<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksFormRequest extends FormRequest
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
            'name' => 'required|min:10|max:40',
            'value' => 'required|numeric',
            'author_id' => 'required'
        ];
    }
    public function messages ()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'name.min' => 'O campo name precisa ter pelo menos três caracteres',
            'name.max' => 'O campo name precisa ter no máximo quarenta caracteres',
            'value.numeric' => 'O campo value precisa ter um número',
        ];
    }
}
