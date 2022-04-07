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

Route::post('/company-add',[App\Http\Controllers\Api\CompanyController::class, 'createCompany']);


///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/tabela-servicos', function(){


    $servicos = Services::where('company_id',1)->get()->toArray();

    dd($servicos);    
});

Route::post('/tabela', function(Request $request){


    // debug($request->all());
    // debug($request->input('id'));

    $id = $request->input('id');
    

    // $service = new Services();
    // $service = $service->find($id);
    // $service->update($request->all());
    // $service->save();

    $service = Services::find($id);

    $service->company = $request->input('empresa');
    $service->status  = $request->input('statusServices');
    $service->category = $request->input('category');
    $service->name = $request->input('titleServices');
    $service->price = $request->input('price');
    $service->responsible_for_insert = $request->input('userInsert');
    

    $result = $service->save();

    // debug($result);


    return  collect(['status'=>'sucess'])->toArray();

    
});

Route::post('/table-services-add',[App\Http\Controllers\Api\ServicesController::class, 'store']);
Route::delete('/table-services-delete/{id}',[App\Http\Controllers\Api\ServicesController::class, 'destroy']);
Route::put('table-services-update/{id}',[App\Http\Controllers\Api\ServicesController::class, 'update']);



Route::post('simcard-create', [App\Http\Controllers\Api\SimcardsController::class, 'store'])->name('simcard.create.post');

Route::post('client-create', [App\Http\Controllers\Api\ClientController::class, 'store'])->name('client.create.post');