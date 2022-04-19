<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EditPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function editUser(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-user',$user_permission->first()->toArray());
    }//endeditUser


    public function editService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-service',$user_permission->first()->toArray());
    }//end editService


    public function editCompany(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-company',$user_permission->first()->toArray());
    }//end editCompany     


    public function editClient(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-client',$user_permission->first()->toArray());
    }//end editClient  


    public function editEquipment(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-equipment',$user_permission->first()->toArray());
    }//end editEquipment 

    public function editVehicle(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-vehicle',$user_permission->first()->toArray());
    }//end editEquipment 

    public function editOrderOfService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-order-of-service',$user_permission->first()->toArray());
    }//end editOrderOfService 

    public function editSimcard(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('edit-simcard',$user_permission->first()->toArray());
    }//end editSimcard


}//end class
