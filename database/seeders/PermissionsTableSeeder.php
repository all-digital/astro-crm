<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            ['name'=>'creat-user'],
            ['name'=>'creat-service'],
            ['name'=>'creat-company'],
            ['name'=>'creat-client'],
            ['name'=>'creat-equipment'],
            ['name'=>'creat-vehicle'],
            ['name'=>'creat-order-of-service'],
            ['name'=>'creat-simcard'],

            ['name'=>'edit-user'],
            ['name'=>'edit-service'],
            ['name'=>'edit-company'],
            ['name'=>'edit-client'],
            ['name'=>'edit-equipment'],
            ['name'=>'edit-vehicle'],
            ['name'=>'edit-order-of-service'],
            ['name'=>'edit-simcard'],

            ['name'=>'view-user'],
            ['name'=>'view-service'],
            ['name'=>'view-company'],
            ['name'=>'view-client'],
            ['name'=>'view-equipment'],
            ['name'=>'view-vehicle'],
            ['name'=>'view-order-of-service'],
            ['name'=>'view-simcard'],

            ['name'=>'delete-user'],
            ['name'=>'delete-service'],
            ['name'=>'delete-company'],
            ['name'=>'delete-client'],
            ['name'=>'delete-equipment'],
            ['name'=>'delete-vehicle'],
            ['name'=>'delete-order-of-service'],
            ['name'=>'delete-simcard']

        ]);
    }
}
