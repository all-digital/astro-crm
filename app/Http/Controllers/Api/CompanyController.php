<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Companies;

class CompanyController extends Controller
{

    public function addCompany(Request $request)
    {
        //Pegando user authenticator da ação
        $authRequest = $request->input('authUser');
        

        debug($request->all());

        $validator = Validator::make($request->all(), [            
                "cnpj" => 'required|min:14',
                "socialReason" => 'required|min:3',
                "fantasyName" => 'required|min:2',
                "status" => 'required|min:1',
                "responsible" => 'required|min:2',
                "email" => 'required|min:6',
                "monthPayment" => 'required|min:1',
                "activation" => 'required|min:1',
                "pricePerPlate" => 'required|min:1',
                "userLimit" => 'required|min:1',
                "pricePerExtraUser" => 'required|min:1',  
            ],
             //msg
            [
                "cnpj.mim" =>  "minimo de 14 caracteres",
                "socialReason.min" => 'minimo de 3 caracteres',
                "fantasyName.min" => 'minimo de 3 caracteres',
                "status.min" => 'minimo de 1 caracteres',
                "responsible.min" => 'minimo de 2 caracteres',
                "email.min" => 'minimo de 6 caracteres',
                "monthPayment.min" => 'minimo de 1 caracteres',
                "activation.min" => 'minimo de 1 caracteres',
                "pricePerPlate.min" => 'minimo de 1 caracteres',
                "userLimit.min" => 'minimo de 1 caracteres',
                "pricePerExtraUser.min" => 'minimo de 1 caracteres',

                "monthPayment.required" => 'campo obrigatorio',
                "activation.required" => 'campo obrigatorio',
                "pricePerPlate.required" => 'campo obrigatorio',
                "userLimit.required" => 'campo obrigatorio',
                "pricePerExtraUser.required" => 'campo obrigatorio',
            ]
        );


        if ($validator->fails()) {

            return response()->json($validator->errors());    
        }
        
        // debug($validator->validated());
        
        
        // $companies = Companies::create([       
                
        //     "cnpj"  =>                  $request->input('cnpj'),
        //     "social_Reason" =>          $request->input('socialReason'),
        //     "fantasy_name" =>           $request->input('fantasyName'),
        //     "status" =>                 $request->input('status'),
        //     "name_responsible" =>       $request->input('responsible'),
        //     "last_name_responsible" =>  $request->input('responsible'),
        //     "email_responsible" =>      $request->input('email'),       
        //     "color" =>                  "azul",
        //     "logo"  =>                  "logo",                       
        //     "monthly_payment" =>        $request->input('monthPayment'),
        //     "activation" =>             $request->input('activation'),
        //     "price_per_plate" =>        $request->input('pricePerPlate'),
        //     "user_limit" =>             $request->input('userLimit'),
        //     "price_per_extra_user" =>   $request->input('pricePerExtraUser'),
        //     "user_id" =>                $authRequest['id']
        // ]);
    
       // $companies->save();   
        
        return response()->json(['status'  => 'Sucesso']);                               
        

    }//end methods

}//end class
