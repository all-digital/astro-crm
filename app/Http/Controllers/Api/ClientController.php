<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        debug($request->all());

        $request->typeCnpj;

        //se for true e do tipo cnpj
        if($request->typeCnpj){

            $client = Clients::create([            
                // 'phase'
                'company' => $request->company,
                'status' => $request->infoStatus,
                'name_responsible' => $request->responsible,
                // $request->dateInsert,
                'cnpj_cpf' => $request->cnpj,
                'social_reason' => $request->socialReason,
                'fantasy_name' => $request->fantasyName,
                'name' => $request->name,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'email_finance' => $request->emailFinance,          
    
                'cell_phone' => $request->phoneCelula,
                'phone' => $request->phoneFixo,
                'whatsapp_phone' => $request->phoneWhatsap,
    
                'tracking_platform' => $request->trackingPlatform,
                // $request->district,
    
                'company_id' => $request->CompanyId,
                'responsible_last_updated' => $request->nameUser,
               
            ]);

        }else{
            $client = Clients::create([ 
                'cnpj_cpf' => $request->cpf,
                'name' => $request->cpfName,
                'last_name' => $request->cpfLastName,
                'email_finance' => $request->cpfEmailFinance,
                'email' => $request->cpfEmail,
                ////////////
                'company' => $request->company,
                'status' => $request->infoStatus,
                'name_responsible' => $request->responsible,
                // $request->dateInsert,             
                            
                'cell_phone' => $request->phoneCelula,
                'phone' => $request->phoneFixo,
                'whatsapp_phone' => $request->phoneWhatsap,    
                'tracking_platform' => $request->trackingPlatform,
                // $request->district,
    
                'company_id' => $request->CompanyId,
                'responsible_last_updated' => $request->nameUser,
                
            ]);
        }//end if 
        $client->save();


        $client->address()->create([
            'address' => $request->andress,
            'number_address' => $request->numberAndress,
            'zip_code'=> $request->zipCode,
            'city' => $request->city,
            'country' => $request->country,
            'state'=> $request->state,
            'complement'=> $request->complement,
            'responsible_last_updated' => $request->nameUser,
        ]);

        // $client->address()->save();
      

       return response()->json(['status'  => 'Sucesso na criação do cliente ']);  

    }//end method store

}//end class
