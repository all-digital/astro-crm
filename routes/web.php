<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index1'])->name('home1');

Route::get('/finance', [App\Http\Controllers\HomeController::class, 'finance'])->name('finance');




//////routes teste
Route::get('redirect', function(){

    return redirect()->route('finance-gateway-pay');

});

Route::prefix('dashboards')->group(function () {
    Route::get('/principal', function () {
        dd("principal");
    })->name('dashboards-main');

    Route::get('/financeiro', function () {
        dd("financeiro");
    })->name('dashboards-finance');

    Route::get('/vendas', function () {
        dd("vendas");
    })->name('dashboards-sales');

    Route::get('/leads', function () {
        dd("leads");
    })->name('dashboards-leads');

    Route::get('/estoque', function () {
        dd("estoque");
    })->name('dashboards-stock');
   
});



Route::prefix('crm')->group(function () {

    Route::get('/leads', function () {
        dd("leads");
    })->name('crm-leads');

    Route::get('/clientes', function () {
        dd("clientes");
    })->name('crm-clients');

    Route::get('/pipeline-vendas', function () {
        dd("/pipeline-vendas");
    })->name('crm-pipeline-sales');

    Route::get('/pedidos', function () {
        dd("pedidos");
    })->name('crm-requests');

    Route::get('/veiculos', function () {
        dd("veiculos");
    })->name('crm-cars');

    Route::get('/propostas', function () {
        dd("propostas");
    })->name('crm-proposals');
   
});


Route::prefix('relatorios')->group(function () {

    Route::get('/vendas', function () {
        dd("vendas");
    })->name('reports-sales');

    Route::get('/estoque', function () {
        dd("estoque");
    })->name('reports-stock');

    Route::get('/clientes', function () {
        dd("/clientes");
    })->name('reports-clients');

    Route::get('/veiculos', function () {
        dd("veiculos");
    })->name('reports-cars');

    Route::get('/serviços', function () {
        dd("serviços");
    })->name('reports-services');

      
});


Route::prefix('financeiro')->group(function () {

    Route::get('/visao-geral', function () {
        dd("visao-geral");
    })->name('finance-vision-geral');


    Route::get('/gateway-pagamento', function () {
        dd("gateway-pay");
    })->name('finance-gateway-pay');

    

      
});