<?php

namespace Database\Seeders;

use App\Models\Prestador;
use Illuminate\Database\Seeder;

class PrestadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i< 10; $i++){
            Prestador::factory()->create();
        }
    
    }
}
