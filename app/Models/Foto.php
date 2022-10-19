<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = ['nomeObra', 'data', 'duracao', 'sinopse', 'elenco', 'producao', 'categoria', 'arquivo' ];

}