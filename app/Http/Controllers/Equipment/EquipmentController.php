<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EquipmentStoreRequest;
use App\Http\Requests\EquipmentEditRequest;
use App\Models\Equipments;
use App\Models\Simcards;
use App\Models\Clients;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class EquipmentController extends Controller
{
    
    
    public function index(Request $request)
    {
        
        $rolesAuthUser = auth()->user()->roles()->get()->toArray(); 
        $idCompany = auth()->user()->company->id;
        
        $equipments = Equipments::where('company_id', $idCompany)->get();    
        $equipments = $equipments->toArray();

        //add um id em vehicles e refatorar
        $vehiclesLinked = DB::select( DB::raw("select vehicles.id as idVehicles, license_plate
        from vehicles
        inner join equipments on vehicles.id = vehicle_id where equipments.company_id = $idCompany;"));


        $simcardLinked = DB::select( DB::raw("select id, number_of_line, iccid
        from simcards where company_id = $idCompany;"));
        
        // debug($simcardLinked);
        
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);
        
        $urlEditEquipment = url('equip-edit');
        $urlEditVehicle = url('/veiculo-edit');
        $urlEditSimcard = url('simcard-edit');

                // usei o foreach ao inves do map pois o map não tinha o index, não consegui inteira outro array dentro dele por conta disso
                foreach($equipments as $index => $value) {

                    $id = $value['id'];
                      
                              ///// criar a regra para saber se o simcard esta vazio ou não e se pode ser excluido
                                                      
                              foreach($vehiclesLinked as $i => $v){                                  
                                  $idVehicles = $v->idVehicles;
                                  $licensePlate = $v->license_plate;
                                  
                                  if($value['vehicle_id'] == $v->idVehicles){                      
                                      $value['vehicle'] = "<a class='' target ='_blank' href='$urlEditVehicle\\$idVehicles' >Placa $licensePlate</a> </div>";                                     
                                    }                                                                       
                                                               
                               }//end foreach interno

                               foreach($simcardLinked as $i => $v){                                  
                                    $numberLine = $v->number_of_line;
                                    $iccid = $v->iccid;
                                    $idSimcard = $v->id;
                                    
                                    if($value['simcard_id'] == $v->id){                      
                                        $value['simcard'] = "<a class='' target ='_blank' href='$urlEditSimcard\\$idSimcard' >Iccid $iccid - Numero da linha $numberLine </a> </div>";                                     
                                    }                                                                       
                                                             
                               }//end foreach interno
                                
                                            ///// criar a regra para saber se o simcard esta vazio ou não e se pode ser excluido
                            if(in_array('Super Admin',$permission) || in_array('Admin',$permission))
                            {
                                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlEditEquipment\\$id' >Editar</a> <a class='btn btn-primary' target ='_blank' href='$urlEditEquipment\\$id' >Excluir</a> </div>";
                            }else{
                                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlEditEquipment\\$id' >Editar</a></div>" ;
                            }          
                                
                                
                    // $equipments[$index]->button = "<a class='btn btn-primary' target ='_blank' href='$urlEditVehicle\\$id' >Alterar</a> </div>";
                        
                    // debug($index);
                    // debug($value);

        
                    $equipments[$index] = $value;
                };

               debug( $equipments);

        
        return view('equipment.equipment_list',compact('permission', 'equipments')); 
        
    }//end method
    
    public function create(Request $request)
    {
        $idCompany = auth()->user()->company->id;

        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);


        $simcards = Simcards::select('id','number_of_line','iccid')
                    ->where('company_id', $idCompany)
                    ->where('status','estoque')->get();

        $simcards = $simcards->toArray();
       // return redirect()->route('equipment.index');
        return view('equipment.index',compact('permission','simcards'));

    }//end method
    
    public function store(EquipmentStoreRequest $request)
    {
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);


        $companyId = auth()->user()->company->id;

        if(in_array('Super Admin',$permission)) $companyId = $request->company;

        debug($request->all());
        $equipment = Equipments::create([
            'status' => $request->status,
            'responsible_for_insert' => auth()->user()->name,    
            'provider' => $request->provider,
            'brand' => $request->brand,
            'model' => $request->model,
            'imei' => $request->imei,
            'simcard' => $request->idSimcard,
            'company_id' => $companyId,
            'simcard_id' => $request->idSimcard
        ]);

        return redirect()                   
        ->route('equip.create')
        ->withSuccess('Equipamento cadastrado com Sucesso');
    }

    public function edit(Request $request, $id)
    {
        $idCompany = auth()->user()->company->id;

        $vehicles = DB::select( DB::raw("select vehicles.id, vehicles.license_plate,vehicles.model 
        from vehicles inner join clients on clients.id = vehicles.client_id where clients.company_id = $idCompany;") );

        $vehicles = collect([$vehicles])->toArray()[0];

        $clients = Clients::select('id','name','cnpj_cpf')
            ->where('company_id',$idCompany)->get();
        $clients = $clients->toArray();

       

        $simcards = Simcards::select('id','number_of_line','iccid')
        ->where('company_id', $idCompany)
        ->where('status','estoque')->get();

        $simcards = $simcards->toArray();   


        $equipment = Equipments::find($id);

       
        return view('equipment.equipment_edit',compact('id','equipment','simcards', 'clients','vehicles'));
        
        // return redirect()                   
        // ->route('equipment.create')
        // ->withSuccess('Equipamento cadastrado com Sucesso');
    }

    
    public function update(EquipmentEditRequest $request, $id)
    {
        //EquipmentEditRequest
        // dd($request->all());

        $equipment = Equipments::find($id);
          
        $equipment->update([
            // 'company'=>$request->company,
            // 'client'=>$request->client,
            'status' => $request->status,
            'responsible_for_insert' => auth()->user()->name,    
            // 'provider' => $request->provider,
            // 'brand' => $request->brand,
            // 'model' => $request->model,
            // 'imei' => $request->imei,
            'company_id' => $request->client,
            'simcard_id' => $request->idSimcard,
            'vehicle_id' => $request->idSimcard,
            'simcard' => $request->idSimcard,  
            'responsible_last_updated'=> auth()->user()->getFullNameAttribute(),
            // 'vehicle' => $request->vehicle          
        ]);

        $equipment->save();

        // return redirect("equip-edit/$id") 
        return redirect() 
        ->route('equip-edit.edit',$id)                
        ->withSuccess('Equipamento Atualizado com Sucesso');
    }




}//end class