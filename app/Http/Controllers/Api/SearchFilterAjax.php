<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Equipments;
use App\Models\Vehicles;

use Illuminate\Support\Facades\DB;

class SearchFilterAjax extends Controller
{
    
    public function searchEquipment(Request $request, $text, $companyId)
    {
        
        //debug($companyId);
        
        $equipmentsModel = DB::table('equipments')
           ->where('company_id', '=', $companyId)
           ->where(function ($query) use($text) {

            $query->orwhere('imei', 'LIKE', "%{$text}%")
                    ->orWhere('model','LIKE', "%{$text}%")                   
                    ->orWhere('brand','LIKE', "%{$text}%");
                    // ->orWhere('provider','LIKE', "%{$text}%")

           })
        ->get();


        return response()->json($equipmentsModel);
        
    }


    public function searchSimcards(Request $request, $text, $companyId)
    {
        
        debug($companyId);
        
        $simcardsModels = DB::table('simcards')
           ->where('company_id', '=', $companyId)
           ->where(function ($query) use($text) {

            $query->orwhere('number_of_line', 'LIKE', "%{$text}%")                   
                    ->orWhere('brand','LIKE', "%{$text}%")
                    ->orWhere('iccid','LIKE', "%{$text}%");
                    // ->orWhere('provider','LIKE', "%{$text}%")

           })
        ->get();


        return response()->json($simcardsModels);
        
    }



    public function clientVehicle(Request $request, $id, $companyId)
    {
        
        debug($companyId);

        $client = Vehicles::with('client')->find($id);

        $clientVehicle = $client->client;
        debug($clientVehicle);



        return response()->json($clientVehicle);
        
    }




}// end class
