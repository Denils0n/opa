<?php

namespace Database\Seeders;

use App\Models\Servicos;
use Illuminate\Database\Seeder;

class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i< 1; $i++){
            
            Servicos::factory()->create();  

        }
    }
}
