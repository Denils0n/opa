<?php

namespace Database\Seeders;


use App\Models\User;
//use App\Models\Servico;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory(10)->create();
        //Tutor::factory(10)->create();
      
        
       
       $this->call([
   
           AnimalSeeder::class
   
       ]);
       $this->call([
        
            PrestadorSeeder::class

        ]);
        $this->call([

            ServicoSeeder::class


        ]);
        $this->call([

            ContratoSeeder::class


        ]);


       

    }
}
