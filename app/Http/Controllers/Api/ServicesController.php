<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services;

class ServicesController extends Controller
{
    

    public function store(Request $request)
    {
        $service = Services::create([
            'company' => "Alldigital",
            'status' => $request->input('addStatus'),
            'category' => $request->input('addCategory'),
            'name' => $request->input('addService'),
            'price' => $request->input('addPrice'),
            'responsible_for_insert' => "Admin",
            "company_id" => 1
        ]);
    
       $service->save();
           
       return  collect(['status'=>'Serviço criado com sucesso'])->toArray();

    }//end method


    public function destroy(Request $request, $id)
    {
        
        $result = Services::destroy($id);

        if($result){
            return  collect(['status'=>'serviço deletado com sucesso',])->toArray();
        }else{
            return  collect(['status'=>'Serviço não deletado' ])->toArray();
        }    

    }//end method

    public function update(Request $request, $id)
    {

        $service = Services::find($id);

        // $service->company = $request->input('employer');
        $service->status  = $request->input('status');
        $service->category = $request->input('category');
        $service->name = $request->input('title');
        $service->price = $request->input('price');
        $service->responsible_for_insert = $request->input('user');
            
        $result = $service->save();

        if($result)
        {
            return  collect(['status'=>'Atualização executada com sucesso' ])->toArray();
        }else{
            return  collect(['status'=>'Falha na atualização' ])->toArray();
        }
                   

    }//end method

}//end class
