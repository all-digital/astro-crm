<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use Illuminate\Support\Facades\Gate;

class TestPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }//end construct 

    public function teste(User $user)
    {
        // Gate::define('create-user', function (User $user) {

            $user_permission = $user->load('roles.permissions')->roles->transform(function($role){
                
                return $role->permissions->transform(function($permission){                    
                   return  $permission->name;
                });
            });

           return in_array('delete-simcard',$user_permission->first()->toArray());

        // });

    }

    public function teste1(User $user)
    {
        // Gate::define('create-user', function (User $user) {

            $user_permission = $user->load('roles.permissions')->roles->transform(function($role){
                
                return $role->permissions->transform(function($permission){                    
                   return  $permission->name;
                });
            });

           return in_array('create-user',$user_permission->first()->toArray());

        // });

    }
        
}//end class
