<?php

namespace Database\Seeders;

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

        // \App\Models\Companies::factory(1)->create();

        //criando company + user  + address para user 
        //  \App\Models\Companies::factory(2)->has(\App\Models\User::factory(5)->has(\App\Models\Address::factory(1)))->create();

        //criando company + user  + address para company and user 
        // \App\Models\Companies::factory(2)->has(\App\Models\User::factory(2)->has(\App\Models\Address::factory(1)) )->has(\App\Models\Address::factory(1))->create();

        //criando company + user + client + address para company and user end client
        // \App\Models\Companies::factory(2)->has(\App\Models\User::factory(2)->has(\App\Models\Address::factory(1)) )->has(\App\Models\Address::factory(1))->has(\App\Models\Clients::factory(4)->has(\App\Models\Address::factory(1)))->create();


        // aqui contem a maior parte das relacoes entres as tabelas para geração de registro
        //simcards não esta criando, acredito que seja pela ordem que esta posta aqui nos factorys 
        
        \App\Models\Companies::factory(1)
        ->has(\App\Models\User::factory(2)->has(\App\Models\Address::factory(1)))
        ->has(\App\Models\Address::factory(1))
        ->has(\App\Models\Clients::factory(2)->has(\App\Models\Address::factory(1))->has(\App\Models\Vehicles::factory(2)->has(\App\Models\Equipments::factory(2)->has(\App\Models\Simcards::factory(10))))->has(\App\Models\ServiceOrderSales::factory(2))->has(\App\Models\ServiceOrderMaintenances::factory(2)))->has(\App\Models\Services::factory(20))

        ->create();


        // \App\Models\Companies::factory(2)->has(\App\Models\User::factory(5))->create();
        // \App\Models\User::factory(10)->create();

        // $this->call([
        //     nameSeeders::class
        // ])
    }
}
