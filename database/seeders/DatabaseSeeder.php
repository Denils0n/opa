<?php

namespace Database\Seeders;

use App\Models\Prestador;
use App\Models\ServicoContrato;
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
        
        // User::factory(10)->create();
        User::factory()
            ->count(10)
            ->sequence(
                fn ($sequence) => ['email' => 'user'.$sequence->index.'@email.com']
            )
            ->create();

        // for ($i = 0; $i < 10; $i++) {
        //     $user = User::factory()->create();
        //     Prestador::factory()->create([
        //         'user_id' => $user->id
        //     ]);
        // }
        for ($i = 0; $i < 10; $i++) {
            Prestador::factory()
                ->for(User::factory()->state([
                    'email' => 'prest'.$i.'@email.com'
                ]))
                ->create();
        }
        //Tutor::factory(10)->create();

       
       $this->call([
            AnimalSeeder::class,
            CategoriaSeeder::class,
            ServicosSeeder::class,
            ContratoSeeder::class
        ]);
        


    }
}
