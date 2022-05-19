<?php

namespace Database\Seeders;
use \App\Models\Animal;
use App\Models\Tutor;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        for ($i=0; $i < 10; $i++) { 
            Animal::factory()->create(['tutor_id' => Tutor::All()->random()->id]);  
        }
    }

}
    
     //

    

