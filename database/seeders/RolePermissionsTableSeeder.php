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

            // [
            //     'role_id'=> 1,
            //     'permission_id' => 6            
            // ],
            

        ]);
    }
}
