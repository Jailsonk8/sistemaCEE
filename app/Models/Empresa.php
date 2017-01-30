<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'user_id_empresa', 
        'representante',
        'cargo',
        'nome_empresa',
        'area_atuante',
        'cnpj',
        'email',
        'endereco',
        'bairro',
        'estado',
        'cidade',
        'cep',
        'fone',
    ];
}
