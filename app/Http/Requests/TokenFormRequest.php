<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TokenFormRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }
    public function messages ()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'email.email' => 'O campo name precisa ser um email válido',
        ];
    }
}
