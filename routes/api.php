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

Route::get('/teste', function(){

    //dd(' teste api ');
    //sleep(5);

    //dd(collect(['nome'=>'darcio','value'=>255,'series'=>45])->toArray());

    //dd(request()->is('api/teste'));
    //request()->segments()[0];
    
    return collect(['nome'=>'darcio','value'=>255,'series'=>45])->toJson();
    

});