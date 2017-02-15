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
            'nome'              => 'required',
            'email'             => 'required|email|max:225',
            'matricula'         => 'required|min:3|max:20',
            'cpf'               => 'required|min:3|max:11',
            'ctps'              => 'required|min:3|max:11',
            'rg_expeditor'      => 'required|min:3|max:30',
            'curso'             => 'required',
            'nascimento'        => 'required',
            'endereco'          => 'required|min:3|max:100',
            'bairro'            => 'required|min:3|max:100',
            'estado'            => 'required|min:3|max:50',
            'cidade'            => 'required|min:3|max:50',
            'cep'               => 'required|min:3|max:8',
            'fone'              => 'required|min:3|max:11',
        ];
    }
    
    public function mansagens()
    {
        return [
            'nome.required'              => 'Campo Obrigatório',
            'email.required'             => 'Campo Obrigatório',
            'matricula.required'         => 'Campo Obrigatório',
            'cpf.required'               => 'Campo Obrigatório',
            'ctps.required'              => 'Campo Obrigatório',
            'rg_expeditor.required'      => 'Campo Obrigatório',
            'curso.required'             => 'Campo Obrigatório',
            'nascimento.required'        => 'Campo Obrigatório',
            'endereco.required'          => 'Campo Obrigatório',
            'bairro.required'            => 'Campo Obrigatório',
            'estado.required'            => 'Campo Obrigatório',
            'cidade.required'            => 'Campo Obrigatório',
            'cep.required'               => 'Campo Obrigatório',
            'fone.required'              => 'Campo Obrigatório',
        ];
    }
}
