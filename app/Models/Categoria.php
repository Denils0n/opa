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

    public function servicoPrestadorCategoria(){

        return $this->hasMany(Prestador_servico_categoria::class, 'categoria_id');

    }
}
