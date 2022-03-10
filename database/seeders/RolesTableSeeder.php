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
            ['name'=>'Super Admin'],    //id 1
            ['name'=>'Admin'],          //id 2
            ['name'=>'Gerencia'],       //id 3
            ['name'=>'Coordenador'],    //id 4
            ['name'=>'Supervisor'],     //id 5
            ['name'=>'Suporte']         //id 6   
        ]);
    }
}
