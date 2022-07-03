<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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

            'nome' => ['required', 'min:5', 'max:255'],
            'email' => ['required','max:255'],
            'telefone' => ['required', 'numeric']

           // 'email:rfc,dns'
            
            //
        ];
    }

    public function messages()
    {
        return [
      
            'nome.max' => 'O Titulo deve possuir no maximo 255 caracteres',
            'email.max' => 'O Descrição deve possuir no maximo 255 caracteres',
            'email.required'=> 'O email é obrigatório',
            'nome.required' => 'Obrigatorio',
            'telefone.numeric' => 'Tem que ser numero',
            'telefone.required' => 'Obrigatorio',
        ];
    }
}
