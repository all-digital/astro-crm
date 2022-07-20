<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    dd('teste api user');
    return $request->user();
});

Route::post('/teste', function(){
    
    sleep(3);

    return collect(['nome'=>'darcio','value'=>255,'series'=>45,"ajax"=>request()->ajax()])->toArray();    
    //return collect(['nome'=>'darcio','value'=>255,'series'=>45])->toJson();    
});


Route::get('search-equipment/{text}/{companyId}', [App\Http\Controllers\Api\SearchFilterAjax::class, 'searchEquipment']);
Route::get('search-simcard/{text}/{companyId}', [App\Http\Controllers\Api\SearchFilterAjax::class, 'searchSimcards']);

Route::get('search-clientVehicle/{value}/{companyId}', [App\Http\Controllers\Api\SearchFilterAjax::class, 'clientVehicle']);


Route::get('cnpj/{cnpj}', [App\ExternalServices\ReceitaService::class, 'searchCNPJ']);

Route::get('tabela-fipe/marcas/{veiculo}', [App\ExternalServices\TabelaFipe::class, 'getMarcas']);
Route::get('tabela-fipe/modelos/{veiculo}/{codigo}', [App\ExternalServices\TabelaFipe::class, 'getModelos']);
Route::get('tabela-fipe/anos/{veiculo}/{codigoModelo}/{codigoAno}', [App\ExternalServices\TabelaFipe::class, 'getAnos']);
Route::get('tabela-fipe/valor/{veiculo}/{codigoModelo}/{codigoAno}/{codigoValor}', [App\ExternalServices\TabelaFipe::class, 'getValor']);

///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////


Route::post('/company-add',[App\Http\Controllers\Api\CompanyController::class, 'store']);
Route::put('company-edit',[App\Http\Controllers\Api\CompanyController::class, 'update']);


Route::post('/table-services-add',[App\Http\Controllers\Api\ServicesController::class, 'store']);
Route::delete('/table-services-delete/{id}',[App\Http\Controllers\Api\ServicesController::class, 'destroy']);
Route::put('table-services-update/{id}',[App\Http\Controllers\Api\ServicesController::class, 'update']);


Route::post('simcard-create', [App\Http\Controllers\Api\SimcardsController::class, 'store'])->name('simcard.create.post');

Route::post('client-create', [App\Http\Controllers\Api\ClientController::class, 'store'])->name('client.create.post');