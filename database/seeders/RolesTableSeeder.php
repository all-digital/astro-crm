<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name'=>'Super Admin'],   //id 1
            ['name'=>'Admin'],         //id 2
            ['name'=>'Gerente'],       //id 3
            ['name'=>'Coordenador'],   //id 4
            ['name'=>'Comercial'],     //id 5
            ['name'=>'Vendedor'] ,     //id 6 
            ['name'=>'Financeiro'],    // id 7 
            ['name'=>'Suporte'],       // id 8 
            ['name'=>'Tecnico']        //id 9     
        ]);
    }
}
