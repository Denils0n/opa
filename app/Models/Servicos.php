<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Servicos extends Pivot
{
    protected $fillable =[
        'prestador_id',
        'categoria_id',
        'hora',
        'preco',
        'descricao',
    ];
    
    public $incrementing = true;

    public function prestador() {
        return $this->belongsTo(Prestador::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
