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
        'celular',
        'user_id'

    ];
    public function servicos() {
        return $this->hasMany(Servicos::class);
    }

    public function categorias() {
        return $this
            ->belongsToMany(Categoria::class, 'servico', 'prestador_id', 'categoria_id')
            ->withTimestamps()
            ->withPivot('id', 'hora', 'preco', 'descricao');
        
        
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function id()
    {
        
    }


}
