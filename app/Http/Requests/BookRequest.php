<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required',
            'pages' => 'required | numeric',
            'price' => 'required | numeric',
            'id_user' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Preencha o título',
            'pages.required' => 'Preencha número de páginas',
            'price.required' => 'Preencha o campo de preço',
            'id_user.required' =>'Selecione o Autor'
        ];
    }
}

