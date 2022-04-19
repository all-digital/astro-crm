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
                'permission_id' => 1        
            ],
            //gerente  => create-service 
            [
                'role_id'=> 3,
                'permission_id' => 2           
            ],
            //gerente  => create-company 
            [
                'role_id'=> 3,
                'permission_id' => 3     
            ],
            //gerente  => create-client
            [
                'role_id'=> 3,
                'permission_id' => 4           
            ],

            //gerente  => create-equipment
            [
                'role_id'=> 3,
                'permission_id' => 5           
            ]    

        ]);
    }
}
