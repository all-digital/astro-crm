<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeletePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function deleteUser(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-user',$user_permission->first()->toArray());
    }//enddeleteUser


    public function deleteService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-service',$user_permission->first()->toArray());
    }//end deleteService


    public function deleteCompany(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-company',$user_permission->first()->toArray());
    }//end deleteCompany     


    public function deleteClient(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-client',$user_permission->first()->toArray());
    }//end deleteClient  


    public function deleteEquipment(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-equipment',$user_permission->first()->toArray());
    }//end deleteEquipment 

    public function deleteVehicle(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-vehicle',$user_permission->first()->toArray());
    }//end deleteEquipment 

    public function deleteOrderOfService(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-order-of-service',$user_permission->first()->toArray());
    }//end deleteOrderOfService 

    public function deleteSimcard(User $user)
    {       
       $user_permission = $user->load('roles.permissions')->roles->transform(function($role){                
            return $role->permissions->transform(function($permission){                    
               return  $permission->name;
            });
        });
       return in_array('delete-simcard',$user_permission->first()->toArray());
    }//end deleteSimcard


}//end class
