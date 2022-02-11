<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Services;

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



Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/finance', [App\Http\Controllers\Dashboard\FinanceController::class, 'finance'])->name('finance');

Route::get('/services', [App\Http\Controllers\Services\ServicesController::class, 'servicesTable'])->name('services.table');

//excell
Route::get('/export-services', [App\Http\Controllers\Services\ServicesController::class, 'exportServices']);



Route::get('/export-services', [App\Http\Controllers\Services\ServicesController::class, 'exportServices']);


Route::get('/empresas', [App\Http\Controllers\Companies\CompanyController::class, 'index']);
Route::get('/empresas-add', [App\Http\Controllers\Companies\CompanyController::class, 'addCompany']);
Route::get('/empresas-edit', [App\Http\Controllers\Companies\CompanyController::class, 'editCompany']);


// Route::get('/empresas', function () {
//     return view('companies.edit-companies');
// });


// Route::get('/empresas-add', function () {
//     return view('companies.add-companies');
// });


// Route::get('/empresas-edit', function () {
//     return view('edit-companies');
// });


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

Route::get('/teste', function(){

    return view('teste');
});

// Route::get('/teste', function(){

//     //dd(' teste api ');
//     //sleep(5);

//     //dd(collect(['nome'=>'darcio','value'=>255,'series'=>45])->toArray());

//     //dd(request()->is('api/teste'));
//     //request()->segments()[0];
    
//     // return collect(['nome'=>'darcio','value'=>255,'series'=>45])->toJson();
//     dd(auth()->user()->name);
    
// });



Route::post('/cadastrar', function(Request $request){


    

    $companies = Companies::create([       
                
        "cnpj"  =>             $request->input('cnpj'),
        "social_Reason" =>      $request->input('socialReason'),
        "fantasy_name" =>       $request->input('fantasyName'),
        "status" =>            $request->input('status'),
        "name_responsible"      =>  auth()->user()->name,
        "last_name_responsible" =>       $request->input('responsible'),
        "email_responsible" =>             $request->input('email'),       
        "color"  =>                                  "azul",
        "logo"  =>                                  "logo",                       
        "monthly_payment" =>      $request->input('monthPayment'),
        "activation" =>        $request->input('activation'),
        "price_per_plate" =>     $request->input('pricePerPlate'),
        "user_limit" =>         $request->input('userLimit'),
        "price_per_extra_user" => $request->input('pricePerExtraUser'),
        "user_id" => auth()->user()->id
    ]);

    $companies->save();

    return ["status"=>"sucesso"];
             
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