<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    //
    protected $fillable = [
        'rua',
        'numero',
        'bairro',
        'cep',
        'nome',
        'cnpj',
        'telefone',
        'email',
        'senha'
      ];
}
