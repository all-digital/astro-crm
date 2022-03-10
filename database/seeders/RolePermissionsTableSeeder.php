<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RolePermission;



class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolePermission::insert([
            //gerente  => create-user     
            [
                'role_id'=> 3,
                'permission_id' => 33        
            ],
            //gerente  => create-service 
            [
                'role_id'=> 3,
                'permission_id' => 34           
            ],
            //gerente  => create-company 
            [
                'role_id'=> 3,
                'permission_id' => 35     
            ],
            //gerente  => create-client
            [
                'role_id'=> 3,
                'permission_id' => 36           
            ]
            

        ]);
    }
}
