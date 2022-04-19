<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CreatePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function createUser(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-user',$user_permission->first()->toArray());
    }//endcreateUser


    public function createService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-service',$user_permission->first()->toArray());
    }//end createService


    public function createCompany(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-company',$user_permission->first()->toArray());
    }//end createCompany     


    public function createClient(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-client',$user_permission->first()->toArray());
    }//end createClient  


    public function createEquipment(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-equipment',$user_permission->first()->toArray());
    }//end createEquipment 

    public function createVehicle(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-vehicle',$user_permission->first()->toArray());
    }//end createEquipment 

    public function createOrderOfService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-order-of-service',$user_permission->first()->toArray());
    }//end createOrderOfService 

    public function createSimcard(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('create-simcard',$user_permission->first()->toArray());
    }//end createSimcard

}//end class


