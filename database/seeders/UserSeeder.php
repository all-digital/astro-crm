<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Companies;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        $faker = Faker::create();

        $user = User::create([
            // 'name'=> 'admin',
            // 'email' => 'admin@admin',
            'name'=> $faker->name(),
            'email' => $faker->email(),
            'password' => Hash::make('123456789'),
            'companie' => $faker->company(),
            'superiors'=> $faker->name(),
            'status'=> "status ok",
            'avatar' => "avatar"
        ]);

        $user->profile()->create([
            'login'=> $faker->name(),
            'profile' => "perfil teste",
            
        ]);


        $user->company()->create([
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
            'price_per_extra_user' =>'1000,15'
            // 'user_id'

        ]);

    }
}
