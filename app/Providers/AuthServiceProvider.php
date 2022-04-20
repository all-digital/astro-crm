<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\CreatePolicy;
use App\Policies\EditPolicy;
use App\Policies\ViewPolicy;
use App\Policies\DeletePolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Policies\TestPolicy;


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

        // Gate::define('create-service', function (User $user) {
        //     //verificar se ele possui a regra de gerente por exemplo
        //     //se sim, verificar se ele possui a permissão de creata services

        //     $user_permission = $user->load('roles.permissions')->roles->transform(function($role){
        //         return $role->permissions->transform(function($permission){                    
        //            return  $permission->name;
        //         });
        //     });

        //    return in_array('create-service',$user_permission->first()->toArray());
        // });

        // gates creates 
        Gate::define('create-user', [CreatePolicy::class, 'createUser']);
        Gate::define('create-service', [CreatePolicy::class, 'createService']);
        Gate::define('create-company', [CreatePolicy::class, 'createCompany']);
        Gate::define('create-client', [CreatePolicy::class, 'createClient']); 
        Gate::define('create-equipment', [CreatePolicy::class, 'createEquipment']);
        Gate::define('create-vehicle', [CreatePolicy::class, 'createVehicle']);
        Gate::define('create-order-of-service', [CreatePolicy::class, 'createOrderOfService']);
        Gate::define('create-simcard', [CreatePolicy::class, 'createSimcard']);


        //gates edit
        Gate::define('edit-user', [EditPolicy::class, 'editUser']);
        Gate::define('edit-service', [EditPolicy::class, 'editService']);
        Gate::define('edit-company', [EditPolicy::class, 'editCompany']);
        Gate::define('edit-client', [EditPolicy::class, 'editClient']); 
        Gate::define('edit-equipment', [EditPolicy::class, 'editEquipment']);
        Gate::define('edit-vehicle', [EditPolicy::class, 'editVehicle']);
        Gate::define('edit-order-of-service', [EditPolicy::class, 'editOrderOfService']);
        Gate::define('edit-simcard', [EditPolicy::class, 'editSimcard']);    


        //gates view
        Gate::define('view-user', [ViewPolicy::class, 'viewUser']);
        Gate::define('view-service', [ViewPolicy::class, 'viewService']);
        Gate::define('view-company', [ViewPolicy::class, 'viewCompany']);
        Gate::define('view-client', [ViewPolicy::class, 'viewClient']); 
        Gate::define('view-equipment', [ViewPolicy::class, 'viewEquipment']);
        Gate::define('view-vehicle', [ViewPolicy::class, 'viewVehicle']);
        Gate::define('view-order-of-service', [ViewPolicy::class, 'viewOrderOfService']);
        Gate::define('view-simcard', [ViewPolicy::class, 'viewSimcard']);    


        //gates delete
        Gate::define('delete-user', [DeletePolicy::class, 'deleteUser']);
        Gate::define('delete-service', [DeletePolicy::class, 'deleteService']);
        Gate::define('delete-company', [DeletePolicy::class, 'deleteCompany']);
        Gate::define('delete-client', [DeletePolicy::class, 'deleteClient']); 
        Gate::define('delete-equipment', [DeletePolicy::class, 'deleteEquipment']);
        Gate::define('delete-vehicle', [DeletePolicy::class, 'deleteVehicle']);
        Gate::define('delete-order-of-service', [DeletePolicy::class, 'deleteOrderOfService']);
        Gate::define('delete-simcard', [DeletePolicy::class, 'deleteSimcard']);

        //
    }//end boot
}
