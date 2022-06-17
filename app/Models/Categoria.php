<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable =[
        'nome'
    ];

    public function servicos(){
        return $this->hasMany(Servicos::class, 'categoria_id');
    }

    public function prestadores() {
        return $this->belongsToMany(Prestador::class, 'servicos', 'categoria_id', 'prestador_id');
    }
}
