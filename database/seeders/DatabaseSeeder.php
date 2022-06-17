<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Servicos;
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

            CategoriaSeeder::class


        ]);
        $this->call([

           ServicosSeeder::class


       ]);
        $this->call([

            ContratoSeeder::class


        ]);



       

    }
}
