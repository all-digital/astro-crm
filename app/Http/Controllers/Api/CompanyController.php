<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Companies;

class CompanyController extends Controller
{

    public function addCompany(Request $request)
    {
        //Pegando user authenticator da ação
        $authRequest = $request->input('authUser');
        
        $companies = Companies::create([       
                
            "cnpj"  =>                  $request->input('cnpj'),
            "social_Reason" =>          $request->input('socialReason'),
            "fantasy_name" =>           $request->input('fantasyName'),
            "status" =>                 $request->input('status'),
            "name_responsible" =>       $authRequest['name'],
            "last_name_responsible" =>  $request->input('responsible'),
            "email_responsible" =>      $request->input('email'),       
            "color" =>                  "azul",
            "logo"  =>                  "logo",                       
            "monthly_payment" =>        $request->input('monthPayment'),
            "activation" =>             $request->input('activation'),
            "price_per_plate" =>        $request->input('pricePerPlate'),
            "user_limit" =>             $request->input('userLimit'),
            "price_per_extra_user" =>   $request->input('pricePerExtraUser'),
            "user_id" =>                $authRequest['id']
        ]);
    
       // $companies->save();   
        
        return response()->json([
            'name'  => 'Abigail',
            'state' => 'CA',            
        ]);


    }//end methods

}//end class
