<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Simcards;

class SimcardsController extends Controller
{
    public function store(Request $request)
    {

        $validated = Validator::make( $request->all(),
        [
            'company' => 'required|min:2|max:155',
            'status' => 'required|max:20',
            'provider' => 'required|min:1|max:155',
            'brand' => 'required|min:1|max:155',
            'iccid' => 'required|min:1|max:155',
            'numberLine' => 'required|min:4|max:155',
        ]);

        // debug($validated->fails());
        // debug($validated->errors()->messages());
        debug($request->company);

        if(!$validated->fails())
        {   
            
            $simcard = Simcards::create([

                'company' => $request->company,
                'status' => $request->status,
                'responsible_for_insert' => "teste",
                'provider' => $request->provider,        
                'brand' => $request->brand,
                'number_of_line' => $request->numberLine,
                'iccid' =>   $request->iccid                 
            ]);

            $simcard->save();

            return response()->json(['status'  => 'Simcard criado com Sucesso','refreshScreen'=>true]); 

        }else{
            
            return response()->json(['status'  => 'Erro na criação do Simcard']);
        }
                

    }//end method store



}//end class
