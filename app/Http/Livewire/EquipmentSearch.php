<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Equipments;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EquipmentSearch extends Component
{

    public $equipment;
    public $imei;

    public function render()
    {   
        $companyId = auth()->user()->company->id;
        $equipmentsModel = [];

        if(!empty($this->equipment))
        {
                // $equipmentsModel = Equipments::where('company_id', $companyId)
                //                  ->orwhere('imei', 'LIKE', "%{$this->equipment}%")
                //                  ->orWhere('provider','LIKE', "%{$this->equipment}%")
                //                  ->orWhere('brand','LIKE', "%{$this->equipment}%")
                //                  ->orWhere('model','LIKE', "%{$this->equipment}%")       
                //                  ->get();

                $equipmentsModel = Equipments::where('company_id', $companyId, function($query){
                    
                                 $query->orwhere('imei', 'LIKE', "%{$this->equipment}%");
                                 $query->orWhere('provider','LIKE', "%{$this->equipment}%");
                                 $query->orWhere('brand','LIKE', "%{$this->equipment}%");
                                 $query->orWhere('model','LIKE', "%{$this->equipment}%");
                })->get();

        }//end if
        
        return view('livewire.equipment-search',['equipmentsModel'=>$equipmentsModel]);
        
    }



    public function ajax(Request $request, $text)
    {
        $companyId = 1;
        debug($text);
        
        $equipmentsModel = DB::table('equipments')
           ->where('company_id', '=', 1)
           ->where(function ($query) use($text) {

            $query->orwhere('imei', 'LIKE', "%{$text}%")
                    ->orWhere('provider','LIKE', "%{$text}%")
                    ->orWhere('brand','LIKE', "%{$text}%")
                    ->orWhere('model','LIKE', "%{$text}%");

           })
           ->get();


        return response()->json($equipmentsModel);
        // return view('livewire.equipment-search',['equipmentsModel'=>$equipmentsModel]);
    }


}//end EquipmentSearch
