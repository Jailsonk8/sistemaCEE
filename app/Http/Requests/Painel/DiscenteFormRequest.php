<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class DiscenteFormRequest extends FormRequest
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
            'nome'              => 'requered',
            'email'             => 'requered|email|max:225',
            'matricula'         => 'requered|min:3|max:20',
            'cpf'               => 'requered|min:3|max:11',
            'ctps'              => 'requered|min:3|max:11',
            'rg_expeditor'      => 'requered|min:3|max:30',
            'curso'             => 'requered|min:3|max:80',
            'nascimento'        => 'requered',
            'endereco'          => 'requered|min:3|max:100',
            'bairro'            => 'requered|min:3|max:100',
            'estado'            => 'requered|min:3|max:50',
            'cidade'            => 'requered|min:3|max:50',
            'cep'               => 'requered|min:3|max:8',
            'fone'              => 'requered|min:3|max:11',
        ];
    }
    
    public function mansagens()
    {
        return [
            'nome'              => '',
            'email'             => '',
            'matricula'         => '',
            'cpf'               => '',
            'ctps'              => '',
            'rg_expeditor'      => '',
            'curso'             => '',
            'nascimento'        => '',
            'endereco'          => '',
            'bairro'            => '',
            'estado'            => '',
            'cidade'            => '',
            'cep'               => '',
            'fone'              => '',
        ];
    }
}
