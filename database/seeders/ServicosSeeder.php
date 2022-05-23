<?php

namespace Database\Seeders;

use App\Models\Servico;
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
        //
        for ($i = 0; $i< 10; $i++){
            Servico::factory()->create();
        }
    }
}
