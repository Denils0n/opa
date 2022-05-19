<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    public $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'telefone',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento',
        
    ];
}
