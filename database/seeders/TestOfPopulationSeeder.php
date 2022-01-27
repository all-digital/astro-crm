<?php

namespace Database\Seeders;

use App\Models\Services;
use App\Models\Equipments;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Str;

class TestOfPopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        $service =  Services::create([
            'company' => $faker->company(),     
            'status' => 'status',
            'category' => $faker->lastName(),
            'name' => $faker->name(),
            'price' => '120,00',
            'responsible_for_insert' => $faker->name(),
            'company_id' => '1'
        ]);

        $equipment = Equipments::create([
            'status' => "status ok ",
            'responsible_for_insert' => $faker->name(),     
            'provider' => "provider teste",
            'brand' => $faker->lastName(),
            'model' => "model teste",
            'imei' => rand(),
            'simcard' => "12235",
            'company_id' => '1'
        ]);
    }
}
