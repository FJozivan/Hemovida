<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resposta_perguntas extends Model
{
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'resposta', 'id_pergunta', 'id_doador',
    ];
}
