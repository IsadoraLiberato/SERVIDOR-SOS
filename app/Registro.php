<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
    protected $fillable = [
        
        'placa',
        'modelo',
        'descProblema',
        'fk_id_oficina',
        'fk_id_cliente',
        'latUser',
        'logUser'
      ];
}
