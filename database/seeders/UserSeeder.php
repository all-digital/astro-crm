<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Address;
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
        ////
        
        $user = User::create([
            // 'name'=> 'suport',
            // 'email' => 'suport@suport',
            // 'name'=> 'admin2',
            // 'email' => 'admin@admi2',
            'name'=> $faker->name(),
            'email' => $faker->email(),
            'password' => Hash::make('123456789'),                      
                        
        ]);
        
        $user->profile()->create([
            'login'=> $faker->name(),
            'profile' => "perfil teste",
            // 'companie' => $faker->company(),
            'companie' => 'all digital',
            'superiors'=> $faker->name(),
            'status'=> "status ok",
            'avatar' => "avatar",
            "company_id"=>1            
        ]);

        // $user->company()->create([
        //     'cnpj' => rand(),
        //     'social_Reason' => $faker->company(),
        //     'fantasy_name' => $faker->company(),
        //     'status' =>'Status OK',
        //     'name_responsible' => $faker->name(),
        //     'last_name_responsible' => $faker->lastName(),
        //     'email_responsible' => $faker->email(),
        //     'color' =>'verde',
        //     'logo' =>'logo teste',
        //     'monthly_payment' =>'100.00',
        //     'activation' =>'100.00',
        //     'price_per_plate' =>'100,20',
        //     'user_limit' =>'5',
        //     'price_per_extra_user' =>'1000,15'
                        
        // ]);

        // $id = $user->company->id;
        // $company = Companies::find($id);

        // $company->address()->create([
        //     'address' => Hash::make('123456789'),
        //     'number_address' => $faker->company(),
        //     'zip_code'=> $faker->name(),
        //     'city' => Hash::make('123456789'),
        //     'country' => $faker->company(),
        //     'state'=> $faker->name(),
        //     'complement'=> $faker->name()
        // ]);


        $user->address()->create([
            'address' => $faker->company(),
            'number_address' => $faker->company(),
            'zip_code'=> $faker->name(),
            'city' => Hash::make('123456789'),
            'country' => $faker->company(),
            'state'=> $faker->name(),
            'complement'=> $faker->name()
        ]);



        ///////////// forma aonde a chave estrangeira estava nas tabelas fortes e não na tabela de anddresses

        // $address = Address::create([
        //     'address' => Hash::make('123456789'),
        //     'number_address' => $faker->company(),
        //     'zip_code'=> $faker->name(),
        //     'city' => Hash::make('123456789'),
        //     'country' => $faker->company(),
        //     'state'=> $faker->name(),
        //     'complement'=> $faker->name()
        // ]);

        // $IDaddress = $address->id;

        // $address->user()->create([
        //     // 'name'=> 'admin6',
        //     // 'email' => 'admin6@admin',
        //     'name'=> $faker->name(),
        //     'email' => $faker->email(),
        //     'password' => Hash::make('123456789'),
        //     'companie' => $faker->company(),
        //     'superiors'=> $faker->name(),
        //     'status'=> "status ok",
        //     'avatar' => "avatar"
        // ]);

        // $user = User::find($address->user->id);

        // $user->profile()->create([
        //     'login'=> $faker->name(),
        //     'profile' => "perfil teste",
            
        // ]);

        // $user->company()->create([
        //     'cnpj' => rand(),
        //     'social_Reason' => $faker->company(),
        //     'fantasy_name' => $faker->company(),
        //     'status' =>'Status OK',
        //     'name_responsible' => $faker->name(),
        //     'last_name_responsible' => $faker->lastName(),
        //     'email_responsible' => $faker->email(),
        //     'color' =>'verde',
        //     'logo' =>'logo teste',
        //     'monthly_payment' =>'100.00',
        //     'activation' =>'100.00',
        //     'price_per_plate' =>'100,20',
        //     'user_limit' =>'5',
        //     'price_per_extra_user' =>'1000,15',
        //     'address_id' => $IDaddress
            
        // ]);



        /////////////////////////////////////forma antiga

        // $user = User::create([
        //     'name'=> 'admin2',
        //     'email' => 'admin2@admin',
        //     // 'name'=> $faker->name(),
        //     // 'email' => $faker->email(),
        //     'password' => Hash::make('123456789'),
        //     'companie' => $faker->company(),
        //     'superiors'=> $faker->name(),
        //     'status'=> "status ok",
        //     'avatar' => "avatar",
        //     'address_id' => 2
        // ]);


        // $user->address()->create([
        //     'address'=> 'rua palmeira',
        //     'number_address'=> '12',
        //     'zip_code'=> '12533',
        //     'city'=> 'tata03',
        //     'country'=> 'coooooooutry',
        //     'state'=> 'estadoooooooo',
        //     'complement'=> 'testesssssssssss'
        // ]);

        // $user->profile()->create([
        //     'login'=> $faker->name(),
        //     'profile' => "perfil teste",
            
        // ]);


        // $user->company()->create([
        //     'cnpj' => rand(),
        //     'social_Reason' => $faker->company(),
        //     'fantasy_name' => $faker->company(),
        //     'status' =>'Status OK',
        //     'name_responsible' => $faker->name(),
        //     'last_name_responsible' => $faker->lastName(),
        //     'email_responsible' => $faker->email(),
        //     'color' =>'verde',
        //     'logo' =>'logo teste',
        //     'monthly_payment' =>'100.00',
        //     'activation' =>'100.00',
        //     'price_per_plate' =>'100,20',
        //     'user_limit' =>'5',
        //     'price_per_extra_user' =>'1000,15',
            
        // ]);

    }
}
