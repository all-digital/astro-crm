<?php

use App\Models\Services;
use App\Models\Companies;
use App\Models\Vehicles;
use App\Models\Equipments;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
//Route::redirect('/home', '/dashboard');

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

//   dd(auth()->user()->company);

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

Route::get('ddd/', function(Request $request){

    //auth()->user()->registerAccess();
    // dd(auth()->user()->getFullNameAttribute());
    

   // $vei = Vehicles::with('equipment')->find(48);
    // $eq = Equipments::with('vehicle')->find(18);       
    
   // $vei = Vehicles::find(47);
   // $vei = Vehicles::find(47)->with('equipment')->get()->toArray();

    // $vei->equipment()->create([

    //     "imei" => 888888,
    //     "company_id" => 1,
    // ]);

    // $vei->refresh();

    //$v = $vei;
    // dd($v[47]['equipment']);

    // $vei = Vehicles::find(47);
    // dd($vei->equipment()->get()->toJson());


    // $vei = Vehicles::with('equipment')->find(47);

    // dd($vei->equipment);

    $equip = Equipments::with('simcardEquipment')->find(29);

    dd($equip->simcardEquipment);

    
    // dd(auth()->user()->client);

    
   // dd($eq->vehicle);
  // dd($vei);
    //dd($vei->equipment);

//     $value = $request->cookie('teste');
    
//    dd($value);
});


Route::get('/cache', [App\Http\Controllers\HomeController::class, 'cacheTeste']);

Route::get('/sessionTeste', [App\Http\Controllers\HomeController::class, 'sessionTeste']);


                                            ////service
Route::get('/services', [App\Http\Controllers\Services\ServicesController::class, 'servicesTable'])->name('services.servicesTable');

//excell
Route::get('/export-services', [App\Http\Controllers\Services\ServicesController::class, 'exportServices'])->name('export-services.exportServices');



                                        //router related to company

Route::get('/company', [App\Http\Controllers\Companies\CompanyController::class, 'index'])->name('company.index');
Route::get('/company-add', [App\Http\Controllers\Companies\CompanyController::class, 'create'])->name('company.create');
Route::get('/company-edit/{id}', [App\Http\Controllers\Companies\CompanyController::class, 'edit'])->name('company.edit');

Route::put('/company-edit/{id}',[App\Http\Controllers\Companies\CompanyController::class, 'update'])->name('company.update');



                                            ////user

Route::get('/user-list', [App\Http\Controllers\Users\UsersController::class, 'index'])->name('user-list.index');
Route::get('/user',[App\Http\Controllers\Users\UsersController::class, 'show'])->name('user.show');
Route::get('/user-edit/{id}', [App\Http\Controllers\Users\UsersController::class, 'edit'])->name('user-edit.edit');

Route::post('/user',[App\Http\Controllers\Users\UsersController::class, 'store'])->name('user.store');
Route::put('/user-edit/{id}',[App\Http\Controllers\Users\UsersController::class, 'update'])->name('user.update');

Route::get('/profile', [App\Http\Controllers\Users\UsersController::class, 'showProfile'])->name('profile.show-profile');
Route::post('/profile', [App\Http\Controllers\Users\UsersController::class, 'updateProfile'])->name('profile.update-profile');

                                            ////profile
Route::get('/profile/{id}', function($id){
    
    return view('profiles.index');
    // dd(base64_decode($id), base64_encode(5));   

});                                            

                                           ////veiculos
                                         
Route::get('/veiculos', [App\Http\Controllers\Vehicles\VehiclesController::class, 'index'])->name('veiculos.index');

Route::get('/veiculo-add', [App\Http\Controllers\Vehicles\VehiclesController::class, 'create'])->name('veiculo-add.create');
Route::post('/veiculo', [App\Http\Controllers\Vehicles\VehiclesController::class, 'store'])->name('veiculo.store');
Route::get('/veiculo-edit/{id}', [App\Http\Controllers\Vehicles\VehiclesController::class, 'edit'])->name('veiculo-edit.edit');

Route::put('/veiculo-edit/{id}', [App\Http\Controllers\Vehicles\VehiclesController::class, 'update'])->name('veiculo-edit.update');


                                            ////equip



Route::get('/equip-list', [App\Http\Controllers\Equipment\EquipmentController::class, 'index'])->name('equip-list.index');
Route::get('/equip', [App\Http\Controllers\Equipment\EquipmentController::class, 'create'])->name('equip.create');
Route::get('/equip-edit/{id}', [App\Http\Controllers\Equipment\EquipmentController::class, 'edit'])->name('equip-edit.edit');

Route::post('equip', [App\Http\Controllers\Equipment\EquipmentController::class, 'store'])->name('equip.store');
Route::put('equip-edit/{id}', [App\Http\Controllers\Equipment\EquipmentController::class, 'update'])->name('equip.update');


                                             ////simcards 

// Route::get('simcard',[App\Http\Controllers\Simcards\SimcardsController::class, 'showEdit']);
Route::get('simcard',[App\Http\Controllers\Simcards\SimcardsController::class, 'index'])->name('simcard.index');
Route::get('simcard-edit/{id}',[App\Http\Controllers\Simcards\SimcardsController::class, 'edit'])->name('simcard.edit');

Route::put('simcard-edit/{id}',[App\Http\Controllers\Simcards\SimcardsController::class, 'update'])->name('simcard-edit.update');


                                               ////client
                                               
// Route::get('cliente', function(){
//     return view('clients.create_client');
// });

// Route::get('cliente-list', function(){
//     return view('clients.index');
// });

Route::get('cliente', [App\Http\Controllers\Client\ClientController::class, 'show'])->name('cliente.show');  
Route::get('cliente-list', [App\Http\Controllers\Client\ClientController::class, 'index'])->name('ciente-list.index'); 

// Route::get('cliente-edit/{id}', [App\Http\Controllers\Client\ClientController::class, 'edit'])->name('cliente-edit.edit');  

                                              ////ordenService

Route::get('ordem-servico', [App\Http\Controllers\OrderService\OrderServiceController::class, 'show'])->name('ordem-servico.show');                                              
Route::post('ordem-servico', [App\Http\Controllers\OrderService\OrderServiceController::class, 'store'])->name('ordem-servico.store');    





Route::get('category-list', [App\Http\Controllers\Category\CategoryController::class, 'index'])->name('category.index');
Route::get('category-edit/{id}', [App\Http\Controllers\Category\CategoryController::class, 'edit'])->name('category-edit.edit');
Route::get('category', [App\Http\Controllers\Category\CategoryController::class, 'show'])->name('category.show');

Route::post('category', [App\Http\Controllers\Category\CategoryController::class, 'store'])->name('category.store');
Route::put('category-edit/{id}', [App\Http\Controllers\Category\CategoryController::class, 'update'])->name('category-edit.update');



Route::get('categoria', function(){
    return view('category');
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

Route::get('test', function(){


   dd( $authUser = auth()->user()->roles()->get()->toArray());

    $user = User::find(3);

    $Permission = $user->roles()->get()->toArray();
  

    $p = array_map(function($value){

        return $value['name'];

    },$Permission);


    dd($p);

    // $avatar = User::find(2)->avatar;
    // dd( $avatar);

    $img = Storage::get('users/user.png');
    $extension = $img->extension();
    dd($extension);

    dd(auth()->user()->id);

    $user = auth()->user()->with('profile')->find(1)->toArray();

    
    dd($user["profile"]['companie']);

    dd(auth()->user()->company->id);
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




Route::get('lead', [App\Http\Controllers\Leads\LeadController::class, 'index']);  
Route::post('lead', [App\Http\Controllers\Leads\LeadController::class, 'store'])->name('lead.store');  
//////////////////

Route::get('oportunidade', function(){
    return view('opportunity');
});

Route::get('teste', function(){
    return view('kanban');
});