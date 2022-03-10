<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-service', function (User $user) {
            //verificar se ele possui a regra de gerente
            //se sim, verificar se ele possui a permissão de creata sservices

            $user_permission = $user->load('roles.permissions')->roles->transform(function($role){
                
                return $role->permissions->transform(function($permission){                    
                   return  $permission->name;
                });

            });

           return in_array('create-service',$user_permission->first()->toArray());

        });



        

        //
    }//end boot
}
