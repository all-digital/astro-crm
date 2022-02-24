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
            ['name'=>'Super Admin'],
            ['name'=>'Admin'],
            ['name'=>'Gerência'],
            ['name'=>'Coordenador'],
            ['name'=>'Supervisor'],
            ['name'=>'Suporte']            
        ]);
    }
}
