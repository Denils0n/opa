<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable =[
        'NOME',
        'IDADE',
        'DESCRICAO',
        'TIPO',
        'RACA',
        'COMPRAVACINA',
        'user_id',
    ];
    public function donoAnimal (){

        return $this->belongsTo(User::class, 'user_id');

    }
    public function contrato(){

        return $this->hasMany(Contrato::class, 'animal_id');

    }

}
