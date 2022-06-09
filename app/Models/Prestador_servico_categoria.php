<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Prestador_servico_categoria extends Pivot
{
    //
    protected $fillable =[
        'prestador_id',
        'servico_id',
        'categoria_id'
    ];
}
