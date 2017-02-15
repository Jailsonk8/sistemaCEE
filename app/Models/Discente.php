<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discente extends Model
{
    protected $fillable = [
        'user_id', 
        'nome',
        'email',
        'matricula',
        'cpf',
        'ctps',
        'rg_expeditor',
        'curso',
        'nascimento',
        'endereco',
        'bairro',
        'estado',
        'cidade',
        'cep',
        'fone',
    ];
}
