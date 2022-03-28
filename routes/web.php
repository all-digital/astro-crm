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




Route::get('dd', function(){

    // dd(auth()->user());
    // dd(auth()->user()->load('roles.permissions'));


    if (! Gate::allows('create-service')) {
        //abort(403);
        return "vc não esta autorizado";

    }else{
       // return 'vc esta autorizado para essa tela';
        return view('teste2');
    }


    //$user = auth()->user();

    // $user_permission = $user->load('roles.permissions')->roles->transform(function($role){

    //     //return $role;
                
    //     return $role->permissions->transform(function($permission){                    
    //        return  $permission->name;
    //     });

    // });

    // dd($user_permission->first()->toArray());

});





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




                                          ////////////routes teste
// Route::get('redirect', function(){

//     return redirect()->route('finance-gateway-pay');

// });

// Route::prefix('dashboards')->group(function () {
//     Route::get('/principal', function () {
//         dd("principal"); 
//     })->name('dashboards-main');

//     Route::get('/financeiro', function () {
//         dd("financeiro");
//     })->name('dashboards-finance');

//     Route::get('/vendas', function () {
//         dd("vendas");
//     })->name('dashboards-sales');

//     Route::get('/leads', function () {
//         dd("leads");
//     })->name('dashboards-leads');

//     Route::get('/estoque', function () {
//         dd("estoque");
//     })->name('dashboards-stock');
   
// });



// Route::prefix('crm')->group(function () {

//     Route::get('/leads', function () {
//         dd("leads");
//     })->name('crm-leads');

//     Route::get('/clientes', function () {
//         dd("clientes");
//     })->name('crm-clients');

//     Route::get('/pipeline-vendas', function () {
//         dd("/pipeline-vendas");
//     })->name('crm-pipeline-sales');

//     Route::get('/pedidos', function () {
//         dd("pedidos");
//     })->name('crm-requests');

//     Route::get('/veiculos', function () {
//         dd("veiculos");
//     })->name('crm-cars');

//     Route::get('/propostas', function () {
//         dd("propostas");
//     })->name('crm-proposals');
   
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


// Route::prefix('financeiro')->group(function () {

//     Route::get('/visao-geral', function () {
//         dd("visao-geral");
//     })->name('finance-vision-geral');


//     Route::get('/gateway-pagamento', function () {
//         dd("gateway-pay");
//     })->name('finance-gateway-pay');

          
// });


Route::get('/user', function(){

    return view('users.create_user');
});

Route::get('/user-edit', function(){

    return view('users.edit_user');
});



//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/veiculos', [App\Http\Controllers\HomeController::class, 'veiculos']);






Route::prefix('teste')->group(function () {
    
    Route::get('/teste', [App\Http\Controllers\Companies\CompanyController::class, 'teste']);
    //
    Route::get('/teste2', function () {
        // Matches The "/admin/users" URL
        return view('teste2');
    });
});



// Route::get('/empresas-list', function () {

//     // $service = Companies::where('user_id', ">" ,1)->get()->toArray();
//     // dd($service);

//     $companie = DB::table('companies')                        
//     ->select('cnpj','social_Reason','fantasy_name','status','name_responsible','email_responsible','monthly_payment','activation','price_per_plate','monthly_payment','user_limit','price_per_extra_user');
//     // ->where('login', '=' ,$login)
//     // ->where('carrier', '=' ,$request->operadora)
//     // ->where('status', '=' , '0')->get(); 

//     // $com = $companie->values();
//     // dd($com);

//     return view('list-companies', ["companie" => $companie]);
// });