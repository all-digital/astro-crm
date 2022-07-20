<?php

namespace App\Http\Controllers\Simcards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Simcards;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\SimcardEditRequest;

class SimcardsController extends Controller
{

    public function index()
    {
                                        
        $idCompany = auth()->user()->company->id;

        $simcards = Simcards::where('company_id',$idCompany)->get()->toArray();

        $equipments = DB::select( DB::raw("select id, simcard_id, imei
        from equipments where company_id = $idCompany;"));
        debug($equipments);

        $rolesAuthUser = auth()->user()->roles()->get()->toArray(); 
        $idCompany = auth()->user()->company->id;       
                           
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);
        


        $urlEditSimcard = url('simcard-edit');
        $urlEditEquipment = url('equip-edit');
        //

        foreach($simcards as $index => $value) {

            $id = $value['id'];              
                      
                                              
                    foreach($equipments as $i => $v){                                  
                        $imei = $v->imei;
                        $idEquip = $v->id;
                                                 
                        if($value['id'] == $v->simcard_id){                      
                            $value['equipment'] = "<a class='' target ='_blank' href='$urlEditEquipment\\$idEquip' >Imei $imei</a> </div>";                                     
                        }                                                                       
                                                       
                       }//end foreach interno


                    // //criar regra para excluir  
                    ///// criar a regra para saber se o simcard esta vazio ou não e se pode ser excluido

            if(in_array('Super Admin',$permission) || in_array('Admin',$permission))
            {
                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlEditSimcard\\$id' >Editar</a> <a class='btn btn-primary' target ='_blank' href='$urlEditSimcard\\$id' >Excluir</a> </div>";
            }else{
                $value['button'] = "<div class='d-flex justify-content-center' > <a class='btn btn-primary' target ='_blank' href='$urlEditSimcard\\$id' >Editar</a></div>" ;
            }  

            
            $simcards[$index] = $value;

        }               


        debug($simcards);

        return view('simcards.index', compact('permission','simcards'));
    
    }//end edit


    
    public function edit(Request $request, $id)
    {        
        $simcard = Simcards::find($id)->toArray(); 

        $created_at = Carbon::parse($simcard['created_at'], 'UTC');
        $updated_at = Carbon::parse($simcard['updated_at'], 'UTC');

        $simcard['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm'); 
        $simcard['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');

        return view('simcards.edit_simcard', compact('id','simcard'));

    }//end showCreate


    public function update(SimcardEditRequest $request, $id)
    {              
            //    dd($request->all());
            $name = auth()->user()->name;
            $lastName = auth()->user()->last_name;
    
            $responsible_last_updated  = "$name $lastName";
            
            $simcard = Simcards::find($id);
            $simcard->update([

                // 'company' => $request->company,
                'status' => $request->create_simcard_status,
                'responsible_last_updated' => $responsible_last_updated,
                           
            ]);

            $simcard->save();


        return redirect()
            ->route('simcard.edit.show',$id)                
            ->withSuccess('Edição de Simcard feita com Sucesso');

    }//end store






}//end class
