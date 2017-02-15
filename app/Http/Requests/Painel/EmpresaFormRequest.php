<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaFormRequest extends FormRequest
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
            'representante'     => 'required|min:3|max:100',
            'cargo'             => 'required|min:2|max:50',
            'nome_empresa'      => 'required|min:1|max:100',
            'area_atuante'      => 'required|min:1|max:50',
            'cnpj'              => 'required|numeric|min:14',
            'email'             => 'required|email|max:255',
            'endereco'          => 'required|min:3|max:80',
            'bairro'            => 'required|min:3|max:50',
            'estado'            => 'required|min:3|max:30',
            'cidade'            => 'required|min:3|max:50',
            'cep'               => 'required|numeric|min:8',
            'fone'              => 'required|numeric|min:11',
        ];
    }
    
     public function messages() {
        return [
            'representante.required'     => 'Campo Obrigatorio',
            'cargo.required'             => 'Campo Obrigatorio',
            'nome_empresa.required'      => 'Campo Obrigatorio',
            'area_atuante.required'      => 'Campo Obrigatorio',
            'cnpj.required'              => 'Campo Obrigatorio',
            'cnpj.numeric'               => 'Somente Números',
            'email.required'             => 'Preencha Corretamente (exemplo@email.com)',
            'endereco.required'          => 'Campo Obrigatorio',
            'bairro.required'            => 'Campo Obrigatorio',
            'estado.required'            => 'Campo Obrigatorio',
            'cidade.required'            => 'Campo Obrigatorio',
            'cep.numeric'                => 'Somente Números',
            'fone.numeric'               => 'Somente Números',  
        ];
    }
}
