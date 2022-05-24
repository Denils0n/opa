<?php

namespace Database\Seeders;
use \App\Models\Animal;

use App\Models\User;
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
            Animal::factory()->create(['user_id' => User::All()->random()->id]);  
        }
    }

}
    
     //

    

