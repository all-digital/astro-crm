<?php

namespace Database\Seeders;

use App\Models\Services;
use App\Models\Equipments;
use App\Models\Companies;

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

        $company = Companies::create([
            'cnpj' => rand(),
            'social_Reason' => $faker->company(),
            'fantasy_name' => $faker->company(),
            'status' =>'Status OK',
            'name_responsible' => $faker->name(),
            'last_name_responsible' => $faker->lastName(),
            'email_responsible' => $faker->email(),
            'color' =>'verde',
            'logo' =>'logo teste',
            'monthly_payment' =>'100.00',
            'activation' =>'100.00',
            'price_per_plate' =>'100,20',
            'user_limit' =>'5',
            'price_per_extra_user' =>'1000,15',            
        ]);
        
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
