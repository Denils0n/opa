<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable =[
        'AN_NOME',
        'AN_IDADE',
        'AN_DESCRICAO',
        'AN_TIPO',
        'AN_RACA',
        'AN_COMPRAVACINA',
        'user_id',
    ];
    public function donoAnimal (){

        return $this->belongsTo(User::class, 'user_id');

    }

}
