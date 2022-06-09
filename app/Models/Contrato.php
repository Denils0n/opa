<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $fillable =[
        'status',
        'animal_id',
    ];

    public function animalContrato (){

        return $this->belongsTo(Animal::class, 'animal_id');

    }
   
}
