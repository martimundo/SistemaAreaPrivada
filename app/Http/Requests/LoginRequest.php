<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function rules()
    {
        return [
          'usuario'=>['required', 'email'],
          'senha'=>['required', 'min:3', 'max:10']
        ];
    }

    public function messages()
    {

        return [
           'usuario.required'=>'O usuário é de preenchimento obrigatório',
           'usuario.email'=>'Usuario tem que ser um e-mail válido',
           'senha.required'=>'Senha é obrigatória',
           'senha.min'=>'A senha tem que ter no minimo :min',
           'senha.max'=>'A senha tem que ter no máximo :max'            
        ];
    }
}
