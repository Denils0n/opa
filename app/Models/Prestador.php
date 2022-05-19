<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    use HasFactory;

    protected $fillable =[
        'CPF/CNPJ',
        'nome',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento',
        'celular'
    ];

}
