<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Equipments;
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
                    ->orWhere('provider','LIKE', "%{$text}%")
                    ->orWhere('brand','LIKE', "%{$text}%")
                    ->orWhere('model','LIKE', "%{$text}%");

           })
        ->get();


        return response()->json($equipmentsModel);
        
    }


}// end class
