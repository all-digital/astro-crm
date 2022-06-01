<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Companies;

class CompanyController extends Controller
{

    public function createCompany(Request $request)
    {
        //getting the authenticated user of the action
        $authRequest = $request->input('authUser');
        
        debug($request->all());

        $validator = Validator::make($request->all(), [            
                "cnpj" => 'required|min:14',
                "socialReason" => 'required|min:2',
                "fantasyName" => 'required|min:2',
                "status" => 'required|min:1',
                "responsible" => 'required|min:2',
                "email" => 'required|min:6',
                "monthPayment" => 'required|min:2',
                "activation" => 'required|min:2',
                "pricePerPlate" => 'required|min:2',
                "userLimit" => 'required|min:1',
                "pricePerExtraUser" => 'required|min:2',  
            ],
             //msg
            [
                "cnpj.mim" =>  "cnpj : minimo de 14 caracteres",
                "socialReason.min" => 'Razão Social : minimo de 2 caracteres',
                "fantasyName.min" => 'Nome Fantasia : minimo de 2 caracteres',
                "status.min" => 'Status : minimo de 1 caracteres',
                "responsible.min" => 'Responsável : minimo de 2 caracteres',
                "email.min" => 'E-mail : minimo de 6 caracteres',
                "monthPayment.min" => 'Mensalidade : minimo de 1 caracteres',
                "activation.min" => 'Ativação : minimo de 1 caracteres',
                "pricePerPlate.min" => 'Preço por Placa : minimo de 1 caracteres',
                "userLimit.min" => 'Limite de Usuários : minimo de 1 caracteres',
                "pricePerExtraUser.min" => 'Preço por usuário extra : minimo de 1 caracteres',

                "cnpj.required" =>  "cnpj : campo obrigatorio ",
                "socialReason.required" => 'Razão Social : campo obrigatorio ',
                "fantasyName.required" => 'Nome Fantasia : campo obrigatorio ',
                "status.required" => 'Status : campo obrigatorio ',
                "responsible.required" => 'Responsável : campo obrigatorio ',
                "email.required" => 'E-mail : campo obrigatorio ',


                "monthPayment.required" => 'Mensalidade : campo obrigatorio ',
                "activation.required" => 'Ativação : campo obrigatorio',
                "pricePerPlate.required" => 'Preço por Placa : campo obrigatorio',
                "userLimit.required" => 'Limite de Usuários : campo obrigatorio',
                "pricePerExtraUser.required" => 'Preço por usuário extra : campo obrigatorio',
            ]
        );


        if ($validator->fails()) {

            $validMsg = collect($validator->errors()->messages());

            return response()->json($validMsg->values());  
        }         
               
        debug($request->all());
        
        $companies = Companies::create([       
                
            "cnpj"  =>                  $request->input('cnpj'),
            "social_Reason" =>          $request->input('socialReason'),
            "fantasy_name" =>           $request->input('fantasyName'),
            "status" =>                 $request->input('status'),
            "name_responsible" =>       $request->input('responsible'),
            "last_name_responsible" =>  $request->input('responsible'),
            "email_responsible" =>      $request->input('email'),       
            "color" =>                  $request->input('color'),
            "logo"  =>                  $request->input('logo'),                     
            "monthly_payment" =>        $request->input('monthPayment'),
            "activation" =>             $request->input('activation'),
            "price_per_plate" =>        $request->input('pricePerPlate'),
            "user_limit" =>             $request->input('userLimit'),
            "price_per_extra_user" =>   $request->input('pricePerExtraUser'),
            "user_id" =>                $authRequest['id']
        ]);
    
       $companies->save();   
        
        return response()->json(['status'  => 'Sucesso']);                               
        

    }//end methods

    public function editCompany(Request $request)
    {
        debug($request->all());

        return response()->json(['status'  => 'Sucesso na edição']);

    }//end editCompany

}//end class
