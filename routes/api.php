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
    return $request->user();
});

Route::post('/teste', function(){
    
    sleep(3);

    return collect(['nome'=>'darcio','value'=>255,'series'=>45,"ajax"=>request()->ajax()])->toArray();    
    //return collect(['nome'=>'darcio','value'=>255,'series'=>45])->toJson();    
});


Route::get('cnpj/{cnpj}', [App\ExternalServices\ReceitaService::class, 'searchCNPJ']);

///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////


Route::post('/company-add',[App\Http\Controllers\Api\CompanyController::class, 'createCompany']);


Route::post('/table-services-add',[App\Http\Controllers\Api\ServicesController::class, 'store']);
Route::delete('/table-services-delete/{id}',[App\Http\Controllers\Api\ServicesController::class, 'destroy']);
Route::put('table-services-update/{id}',[App\Http\Controllers\Api\ServicesController::class, 'update']);


Route::post('simcard-create', [App\Http\Controllers\Api\SimcardsController::class, 'store'])->name('simcard.create.post');

Route::post('client-create', [App\Http\Controllers\Api\ClientController::class, 'store'])->name('client.create.post');