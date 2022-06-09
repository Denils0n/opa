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
    public function servico() {
        return $this->hasMany(Servicos::class);
    }

    public function categoria() {
        return $this->belongsToMany(Categoria::class, 'servico', 'prestador_id', 'categoria_id');
        
        
    }


}
