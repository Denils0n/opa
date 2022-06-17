<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Servicos extends Pivot
{
    use HasFactory;

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

    public function contratos() {
        return $this->belongsToMany(Contrato::class, 'servico_contrato', 'servico_id', 'contrato_id');
    }
}
