<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Contrato;
use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            Contrato::factory()->create(['animal_id' => Animal::All()->random()->id]);  
        }
    }
}
