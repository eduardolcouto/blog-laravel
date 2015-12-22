<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
            'title' => 'required|min:5',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Campo :attribute obrigatorio.',
            'min'       => 'O conteudo do campo :attribute deve conter pelo menos :min caracteres.'

        ];
    }
}
