<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ServicoContrato extends Pivot
{
    //
    public $incremeting = true;

    
    protected $fillable =[
        
        'servico_id',
        'contrato_id',
    ];
    
    
    public function avaliacoes(){

        return $this->hasMany(Avaliacao::class, 'Avaliacao_id');

    }
    
}
