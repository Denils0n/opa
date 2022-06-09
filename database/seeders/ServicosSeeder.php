<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Prestador;
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
        for ($i = 0; $i< 10; $i++){
            
            Servicos::factory()->create(['prestador_id' => Prestador::All()->random()->id],['categoria_id' => Categoria::All()->random()->id]);  

        }
    }
}
