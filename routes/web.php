<?php

use App\Models\Services;
use App\Models\Companies;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;


use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');
Route::redirect('/home', '/dashboard');

////auth
Auth::routes();
Auth::routes(['register' => false, 'login'=>false]);



Route::prefix('dashboard')->group(base_path('routes/dashboards.php'));
Route::prefix('crm')->group(base_path('routes/crm.php'));
Route::prefix('finance')->group(base_path('routes/finance.php'));
Route::prefix('accounting')->group(base_path('routes/accounting.php'));
Route::prefix('management')->group(base_path('routes/management.php'));
Route::prefix('reports')->group(base_path('routes/reports.php'));



// rota de teste de permissão
Route::get('permissao', function(){
    $user = auth()->user();

    $user_permission = $user->load('roles.permissions')->roles->transform(function($role){      
        return $role->permissions->transform(function($permission){                    
           return  $permission->name;
        });
    });

    dd($user_permission->first()->toArray());

    ///////////////////////////////////////

    if (Gate::forUser($user)->allows('delete-simcard')) {      
        //dd("teste entrou delete-simcard policy");
         return view('teste2');
    }
    
    if (Gate::forUser($user)->allows('view-user')) {       
        dd("teste entrou view-user policy");        
    }    
    
    if (Gate::forUser($user)->allows('create-service')) {       
        dd("create-service entrou ");
        // return view('teste2');
    }
    
    if (Gate::forUser($user)->allows('edit-user')) {       
        dd("teste entrou edit-user policy");
    }

    // if (Gate::forUser($user)->allows('create-user')) {        
    //     dd('create-user   entrou ');
    // }

    // dd('parou');
      

});

Route::get('dd', function(){
    $user = auth()->user();
    // dd($user->profile()->get('companie')[0]->companie);  
   // dd(auth()->user()->profile()->get('companie')[0]->companie);

//    $createuserser = [
//     0 => "gerente",
//     1 => "vendedor",
//     2 => "suporte"
//    ];

//    $create_User = [
//     0 => "1",
//     1 => "3",    
//    ];

//    foreach ($create_User as $value) {
//     echo "$value <br>";
//   }

//   dd(auth()->user()->profile->companie);

  // Storage::get('file.jpg'),
        // Storage::path('file.jpg');
        // Storage::directories($directory);


    //     dd(Storage::delete("users/9.png"));

    //     $t = '9.png';

    // dd(  Storage::exists("users/.$t") );

        // dd(url('/services'));

        // dd(isSuperAdmin(['Admin','Gerente','Super Admin']));

        $roles = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$roles);


        dd($permission, auth()->user()->roles()->get()->toArray());

});



                                            ////service
Route::get('/services', [App\Http\Controllers\Services\ServicesController::class, 'servicesTable'])->name('services.table');

//excell
Route::get('/export-services', [App\Http\Controllers\Services\ServicesController::class, 'exportServices']);



                                        //router related to company

Route::get('/company', [App\Http\Controllers\Companies\CompanyController::class, 'index'])->name('company.index');
Route::get('/company-add', [App\Http\Controllers\Companies\CompanyController::class, 'showCreateCompany'])->name('company.add');
Route::get('/company-edit/{id}', [App\Http\Controllers\Companies\CompanyController::class, 'showEditCompany'])->name('company.edit');


Route::get('/empresas/testando', function () {
    return view('companies');
});

                                            ////user

Route::get('/user',[App\Http\Controllers\Users\UsersController::class, 'show']);
Route::get('/user-edit/{id}', [App\Http\Controllers\Users\UsersController::class, 'showEdit']);
Route::get('/user-list', [App\Http\Controllers\Users\UsersController::class, 'index']);

Route::post('/user',[App\Http\Controllers\Users\UsersController::class, 'store'])->name('user.store');
Route::put('/user-edit/{id}',[App\Http\Controllers\Users\UsersController::class, 'update'])->name('user.update');


                                            ////profile
Route::get('/profile/{id}', function($id){
    
    return view('profiles.index');
    // dd(base64_decode($id), base64_encode(5));   

});                                            

                                           ////veiculos

Route::get('/veiculos', [App\Http\Controllers\Vehicles\VehiclesController::class, 'showCreate']);
//Route::get('/veiculos-edit', [App\Http\Controllers\Vehicles\VehiclesController::class, 'veiculos']);
Route::get('/veiculos-edit', [App\Http\Controllers\Vehicles\VehiclesController::class, 'editShow']);

Route::put('/veiculos-edit', [App\Http\Controllers\Vehicles\VehiclesController::class, 'editStore'])->name('vehicles.update');

Route::post('/veiculos', [App\Http\Controllers\Vehicles\VehiclesController::class, 'store'])->name('vehicles.create');

// Route::post('/veiculos', [App\Http\Controllers\Vehicles\VehiclesController::class, 'create'])->name('vehicles.create');
Route::get('/veiculos-list', function(){
    return view('vehicles.vehicles_list');
});


                                            ////equip

Route::get('/equip-index', function(){
    return view('teste');
});



Route::get('/equip', [App\Http\Controllers\Equipment\EquipmentController::class, 'index'])->name('equipment.index');
Route::get('/equip-list', [App\Http\Controllers\Equipment\EquipmentController::class, 'show']);
Route::get('/equip-edit', [App\Http\Controllers\Equipment\EquipmentController::class, 'edit']);

Route::post('equip', [App\Http\Controllers\Equipment\EquipmentController::class, 'create'])->name('equipment.create');
Route::post('equip', [App\Http\Controllers\Equipment\EquipmentController::class, 'update'])->name('equipment.update');


                                             ////simcards 

Route::get('simcards',[App\Http\Controllers\Simcards\SimcardsController::class, 'showEdit']);
Route::get('simcards-list',[App\Http\Controllers\Simcards\SimcardsController::class, 'index']);

Route::post('simcard-edit',[App\Http\Controllers\Simcards\SimcardsController::class, 'edit'])->name('simcard.edit');


                                               ////client
                                               
Route::get('client', function(){
    return view('clients.create_client');
});

Route::get('client-list', function(){
    return view('clients.index');
});


                                              ////ordenService

Route::get('ordem-servico', [App\Http\Controllers\OrderService\OrderServiceController::class, 'show']);                                              
Route::post('ordem-servico', [App\Http\Controllers\OrderService\OrderServiceController::class, 'store'])->name('os.store');    


                                        ////////////routes teste
// Route::get('redirect', function(){
//     return redirect()->route('finance-gateway-pay');
// });

// Route::prefix('relatorios')->group(function () {

//     Route::get('/vendas', function () {
//         dd("vendas");
//     })->name('reports-sales');

//     Route::get('/estoque', function () {
//         dd("estoque");
//     })->name('reports-stock');

//     Route::get('/clientes', function () {
//         dd("/clientes");
//     })->name('reports-clients');

//     Route::get('/veiculos', function () {
//         dd("veiculos");
//     })->name('reports-cars');

//     Route::get('/serviços', function () {
//         dd("serviços");
//     })->name('reports-services');

      
// });

//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('test', function(){


   dd( $authUser = auth()->user()->roles()->get()->toArray());

    $user = User::find(3);

    $Permission = $user->roles()->get()->toArray();
  

    $p = array_map(function($value){

        return $value['name'];

    },$Permission);


    dd($p);

    // $avatar = User::find(2)->profile->avatar;
    // dd( $avatar);

    $img = Storage::get('users/user.png');
    $extension = $img->extension();
    dd($extension);

    dd(auth()->user()->id);

    $user = auth()->user()->with('profile')->find(1)->toArray();

    
    dd($user["profile"]['companie']);

    dd(auth()->user()->profile->company_id);
});

Route::prefix('teste')->group(function () {

    Route::get('/teste', fn()=> dd('testando .......'));
    
    // Route::get('/teste', [App\Http\Controllers\Companies\CompanyController::class, 'teste']);
    //
    Route::get('/teste2', function () {
        // Matches The "/admin/users" URL
        return view('clients.create_client');
    });
});


//////////////////

Route::get('teste', function(){
    return view('teste');
});

Route::get('teste1', function(){
    return view('kanban');
});