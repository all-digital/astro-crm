<?php

namespace App\Http\Controllers\Vehicles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services;
use App\Models\Vehicles;
use App\Models\Clients;
use App\Models\Equipments;
use App\Models\Companies;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Http\Requests\VehiclesCreateRequest;
use App\Http\Requests\VehiclesEditRequest;

class VehiclesController extends Controller
{   
    public function index()
    {        
        $idCompany = auth()->user()->company->id;


        $vehicles = DB::select( DB::raw("select vehicles.*, clients.fantasy_name
        from vehicles inner join clients on clients.id = vehicles.client_id where clients.company_id = $idCompany;") );


        // $vehiclesLinked = DB::select( DB::raw("select vehicles.*, clients.fantasy_name, equipments.imei, equipments.id as idEquip
        // from vehicles
        // inner join equipments on vehicles.id = vehicle_id
        // inner join clients on clients.id = vehicles.client_id where clients.company_id = $idCompany;") );

        $vehiclesLinked = DB::select( DB::raw("select vehicles.id as idVehicles, equipments.imei, vehicle_id, equipments.id as idEquip
        from vehicles
        inner join equipments on vehicles.id = vehicle_id where equipments.company_id = $idCompany;"));
       

        // dd($vehiclesLinked);
           
                           
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        // dd($vehicles);
        // $urlProfile = url('/profile');
        $urlEditVehicle = url('/veiculo-edit');

        //
       // $vehicles = array_map(function($value)use ($urlEditVehicle, $permission){                 
           
       


        foreach($vehicles as $index => $value) {

            $id = $value->id;

            // debug($index);
            // debug($value);

            $created_at = Carbon::parse($value->created_at, 'UTC');
            $updated_at = Carbon::parse($value->updated_at, 'UTC');
            $value->created_at = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            $value->updated_at = $updated_at->isoFormat('DD/MM/YYYY HH:mm');   


            foreach($vehiclesLinked as $i => $v){
               $imei = $v->imei;

                    if($v->vehicle_id == $id){
                        debug("deu certo");
                        debug($v->vehicle_id);
                        debug($id);
                        debug($imei);

                        $value->equipment = "<a class='' target ='_blank' href='$urlEditVehicle\\$id' >Equipamento  tirar id $id</a> </div>";
                    }else{
                        $value->equipment = "Sem equipamento";
                    }
            }


            // if(isset($vehiclesLinked[$index]))
            // {
            //     debug( $vehiclesLinked[$index]);
            //     debug( $vehiclesLinked[$index]->vehicle_id);
            //     debug( $vehiclesLinked);

            // }






            $vehicles[$index]->button = "<a class='btn btn-primary' target ='_blank' href='$urlEditVehicle\\$id' >Alterar</a> </div>";


        };
        


        // dd($vehicles);
        /////////////////////////
        return view('vehicles.vehicles_list',compact('vehicles'));

    }//end index
    
    public function create()
    {
        $idCompany = auth()->user()->company->id;

      
        $companies = Companies::with('equipments')->find($idCompany);        
        $equipments = $companies->toArray()['equipments'];
        
        $client = auth()->user()->company->client->toArray();

        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        
        return view('vehicles.index',["permission" => $permission,"client" => $client,"equipments"=> $equipments]);

    }//end method create


    public function store(VehiclesCreateRequest $request)
    {

        debug($request->all());

        //validando tamanho das placas
        if(!is_null($request->vehicle_plate)) 
        {
            $request->vehicle_plate = str_replace("_", "", $request->vehicle_plate);
            if(strlen($request->vehicle_plate) < 7 ) return redirect("veiculo-add")->with('errorSize','Placa deverar ter no minino de 7 caracteres');             
        }

        //validando tamanho das placas
        if(!is_null($request->vehicle_plate2)) 
        {
            $request->vehicle_plate2 = str_replace("_", "", $request->vehicle_plate2);
            if(strlen($request->vehicle_plate2) < 7 ) return redirect("veiculo-add")->with('errorSize','Placa deverar ter no minino de 7 caracteres');
        }

        //verificando se é algum tipo de veiculo (motor) para validar se o valor é obrigatorio
        // if($request->type_vehicles != 'Bicicleta' && $request->type_vehicles != 'Pessoa' && $request->type_vehicles != 'Pet' )
        // {            
        //     if($request->value == "R$ 0,00") return redirect("veiculo-add")->with('errorValue','Campo Valor obrigatorio');                     
        // }else{
        //     $request->value = null;
        // }

        if($request->value == "R$ 0,00") $request->value = null;
                                   

        //verificando se o user vai ter um cliente vinculado
        if($request->client == "null"){
            $request->client = null;
        }
        
        debug(isset($request->idEquip));
        
        $vehicles = Vehicles::create([
            'company'=> $request->company,
            'status' => $request->status,
            'type' => $request->type_vehicles,                                     
            'brand'=> $request->brand,       
            'model'=> $request->model,
            'year'=>$request->year,
            'vehicle_plate' => $request->vehicle_plate,
            'value' => $request->value,
            // 'equipment' => $request->equipment,
            'license_plate' => $request->vehicle_plate ?? $request->vehicle_plate2,
            'responsible_for_insert' => auth()->user()->name,
            'date_of_insert' => now(),

            'client_id' => $request->client
                        
        ]);

        $vehicleSave = $vehicles->save();

        debug($request->idEquip);
        //save equipament
        if($vehicleSave && isset($request->idEquip))
        {
            $equipment = Equipments::find($request->idEquip);

            $equipment->vehicle_id = $vehicles->id;
            $equipment->save();
        }

        
        return redirect('veiculo-add')                
                   ->withSuccess('Veiculo cadastrado com Sucesso');

    }//end method store


    public function edit(Request $request, $id)
    {
        $idCompany = auth()->user()->company->id;
        $vehicle = Vehicles::with('equipmentVehicle')->find($id);

        // $created_at = Carbon::parse($vehicle->created_at, 'UTC');
        // $updated_at = Carbon::parse($vehicle->updated_at, 'UTC');

        // $vehicle->created_at = $created_at->isoFormat('DD/MM/YYYY HH:mm');
        // $vehicle->updated_at = $updated_at->isoFormat('DD/MM/YYYY HH:mm'); 

        // dd($vehicle);

        $client = Clients::find($vehicle->client_id);
                
        $companies = Companies::with('equipments')->find($idCompany);        
        $equipments = $companies->toArray()['equipments'];

        // dd( $id);
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        // dd($vehicle);
        // dd($vehicle->equipmentVehicle->imei);

        return view('vehicles.vehicles_edit',compact('id','permission','client','vehicle','equipments'));

    }//end edit



    public function update(VehiclesEditRequest $request, $id)
    {        
        debug($request->all());

        if($request->value == "R$ 0,00") 
        {
             // return redirect()->route("veiculo-edit.update",['id'=>$id])->with('errorValue','Campo Valor obrigatorio');
            $request->value = null;
        }//
        
        //pegando o imei pois vem uma string com mais informaçoes
        $imei = explode("-",$request->equipment);
        $imei  = trim($imei[0]);

        debug($request->equipment);
        debug($imei);
        
        $vehicle = Vehicles::find($id);

        $vehicle->update([          
            'status' => $request->status,
            'value' => $request->value,
            // 'equipment' => $request->equipment,
            'responsible_last_updated' => auth()->user()->getFullNameAttribute(),
           
            // 'date_of_insert' => now(),            
        ]);

         $vehicleSave = $vehicle->save();

        //save equipament

         debug($request->idEquip);
         //save equipament
         if($vehicleSave && isset($request->idEquip))
        {
             $equipment = Equipments::find($request->idEquip);
 
             $equipment->vehicle_id = $vehicle->id;
             $equipment->save();
        }

        //se for igual a null setar null e desvincular o aparelho
        //sentar o id e o nome no input 

       return redirect()->route("veiculo-edit.update",['id'=>$id])                 
                ->withSuccess('Veiculo editado com Sucesso');
      
    } //end update
    
}//end class
