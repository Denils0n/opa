<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    protected $fillable =[
        'nota',
        'descricao',
        'servico_contrato_id',

    ];
    public function servico_contrato(){

        return $this->belongsTo(ServicoContrato::class, 'servico_contrato_id');

    }
    
}
