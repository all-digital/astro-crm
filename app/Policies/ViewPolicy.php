<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ViewPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function viewUser(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-user',$user_permission->first()->toArray());
    }//endviewUser


    public function viewService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-service',$user_permission->first()->toArray());
    }//end viewService


    public function viewCompany(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-company',$user_permission->first()->toArray());
    }//end viewCompany     


    public function viewClient(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-client',$user_permission->first()->toArray());
    }//end viewClient  


    public function viewEquipment(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-equipment',$user_permission->first()->toArray());
    }//end viewEquipment 

    public function viewVehicle(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-vehicle',$user_permission->first()->toArray());
    }//end viewEquipment 

    public function viewOrderOfService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-order-of-service',$user_permission->first()->toArray());
    }//end viewOrderOfService 

    public function viewSimcard(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('view-simcard',$user_permission->first()->toArray());
    }//end viewSimcard

}//end class
