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
            ['name'=>'create-user'],                              //id 1    temperario 33
            ['name'=>'create-service'],                           //id 2    temperario 34
            ['name'=>'create-company'],                           //id 3    temperario 35
            ['name'=>'create-client'],                            //id 4    temperario 36
            ['name'=>'create-equipment'],                         //id 5
            ['name'=>'create-vehicle'],                           //id 6
            ['name'=>'create-order-of-service'],                  //id 7
            ['name'=>'create-simcard'],                           //id 8

            ['name'=>'edit-user'],                               //id 9
            ['name'=>'edit-service'],                            //id 10
            ['name'=>'edit-company'],                            //id 11
            ['name'=>'edit-client'],                             //id 12
            ['name'=>'edit-equipment'],                          //id 13
            ['name'=>'edit-vehicle'],                            //id 14
            ['name'=>'edit-order-of-service'],                   //id 15
            ['name'=>'edit-simcard'],                            //id 16

            ['name'=>'view-user'],                               //id 17
            ['name'=>'view-service'],                            //id 18
            ['name'=>'view-company'],                            //id 19
            ['name'=>'view-client'],                             //id 20
            ['name'=>'view-equipment'],                          //id 21
            ['name'=>'view-vehicle'],                            //id 22
            ['name'=>'view-order-of-service'],                   //id 23
            ['name'=>'view-simcard'],                            //id 24

            ['name'=>'delete-user'],                             //id 25
            ['name'=>'delete-service'],                          //id 26
            ['name'=>'delete-company'],                          //id 27
            ['name'=>'delete-client'],                           //id 28
            ['name'=>'delete-equipment'],                        //id 29
            ['name'=>'delete-vehicle'],                          //id 30
            ['name'=>'delete-order-of-service'],                 //id 31
            ['name'=>'delete-simcard']                           //id 32

        ]);
    }
}
