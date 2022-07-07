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
        
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);
        
        $urlEditEquipment = url('equip-edit');
        //
        $equipments = array_map(function($value)use ($urlEditEquipment, $permission){

            $created_at = Carbon::parse($value['created_at'], 'UTC');
            $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');           
            
            $id = $value['id'];
            // $value['user_last_alter'] = 'user_last_alter';
            // $value['company'] = 'name company';
            // $value['veiculo'] = 'veiculo';


            ///// criar a regra para saber se o simcard esta vazio ou não e se pode ser excluido
            if(in_array('Super Admin',$permission) || in_array('Admin',$permission))
            {
                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlEditEquipment\\$id' >Editar</a> <a class='btn btn-primary' target ='_blank' href='$urlEditEquipment\\$id' >Excluir</a> </div>";
            }else{
                $value['button'] = "<div class='d-flex justify-content-center' > <a class='btn btn-primary' target ='_blank' href='$urlEditEquipment\\$id' >Perfil</a></div>" ;
            }          

            return $value; 
        },$equipments);
        
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
            'simcard' => $request->simcards,
            'company_id' => $companyId,
            'simcard_id' => $request->simcards
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


        $equipment = Equipments::find($id)->toArray();

        $created_at = Carbon::parse($equipment['created_at'], 'UTC');
        $updated_at = Carbon::parse($equipment['updated_at'], 'UTC');

        $equipment['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
        $equipment['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm'); 


       // dd($equipment);
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

        $lastName = auth()->user()->last_name;     
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
            'simcard_id' => $request->vehicle,
            'vehicle_id' => $request->simcards,
            'simcard' => $request->simcards,  
            'responsible_last_updated'=> auth()->user()->name . " $lastName",
            // 'vehicle' => $request->vehicle          
        ]);

        $equipment->save();

        // return redirect("equip-edit/$id") 
        return redirect() 
        ->route('equipment.edit.show',$id)                
        ->withSuccess('Equipamento Atualizado com Sucesso');
    }




}//end class