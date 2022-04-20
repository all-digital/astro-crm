<?php

use App\Models\Services;

use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

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

    if (Gate::forUser($user)->allows('delete-simcard')) {      
        //dd("teste entrou delete-simcard policy");
         return view('teste2');
    }
    
    if (Gate::forUser($user)->allows('view-user')) {       
        dd("teste entrou view-user policy");        
    }       

    if (Gate::forUser($user)->allows('edit-user')) {       
        dd("teste entrou edit-user policy");
    }
    

    if (Gate::forUser($user)->allows('create-service')) {       
        dd("create-service entrou ");
        return view('teste2');
    }
     
    // if (Gate::forUser($user)->allows('create-user')) {        
    //     dd('create-user   entrou ');
    // }

    dd('parou');

    // $user = auth()->user();
    // $user_permission = $user->load('roles.permissions')->roles->transform(function($role){
    //     //return $role;   

    //     return $role->permissions->transform(function($permission){                    
    //        return  $permission->name;
    //     });
    // });

    // dd($user_permission->first()->toArray());

});




                                            ////service
Route::get('/services', [App\Http\Controllers\Services\ServicesController::class, 'servicesTable'])->name('services.table');

//excell
Route::get('/export-services', [App\Http\Controllers\Services\ServicesController::class, 'exportServices']);



                                        //router related to company

Route::get('/company', [App\Http\Controllers\Companies\CompanyController::class, 'index'])->name('company.index');
Route::get('/company-add', [App\Http\Controllers\Companies\CompanyController::class, 'createCompany'])->name('company.add');
Route::get('/company-edit', [App\Http\Controllers\Companies\CompanyController::class, 'editCompany'])->name('company.edit');


Route::get('/empresas/testando', function () {
    return view('companies');
});

                                            ////user

Route::get('/user',[App\Http\Controllers\Users\UsersController::class, 'show']);
Route::get('/user-edit', [App\Http\Controllers\Users\UsersController::class, 'showEdit']);

Route::post('/user',[App\Http\Controllers\Users\UsersController::class, 'store'])->name('user.store');
Route::put('/user-edit',[App\Http\Controllers\Users\UsersController::class, 'update'])->name('user.update');

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



Route::prefix('teste')->group(function () {
    
    Route::get('/teste', [App\Http\Controllers\Companies\CompanyController::class, 'teste']);
    //
    Route::get('/teste2', function () {
        // Matches The "/admin/users" URL
        return view('clients.create_client');
    });
});


