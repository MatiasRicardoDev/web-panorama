<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OficinaBahiaBlanca extends Model
{
    protected $table = 'oficina_bahia_blancas';
    protected $fillable = [
        'sabado_0',
        'domingo_0',
        'sabado_1',
        'domingo_1',
        'sabado_2',
        'domingo_2',
        'sabado_3',
        'domingo_3',
        'sabado_4',
        'domingo_4',
        'sabado_5',
        'domingo_5',
        'sabado_6',
        'domingo_6',
    ];
}
