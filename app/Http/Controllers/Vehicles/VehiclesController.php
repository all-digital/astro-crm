<?php

namespace App\Http\Controllers\Vehicles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services;
use App\Models\Vehicles;
use App\Models\Clients;
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

        // $vehicles = Vehicles::where('company_id', $idCompany)->get();    
        // $vehicles = $vehicles->toArray();

        ////////////////
        // $result = DB::table('vehicles')
        // ->join('clients', function ($join) use ($idCompany) {
        //     $join->where('clients.company_id', '=', $idCompany);                 
        // })
        // ->get();


        $vehicles = DB::select( DB::raw("select vehicles.*, clients.fantasy_name
        from vehicles inner join clients on clients.id = vehicles.client_id where clients.company_id = $idCompany;") );

        // $result = collect($result);
       
                           
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        //dd($vehicles);
        // $urlProfile = url('/profile');
        $urlEditVehicle = url('/veiculos-edit');

        //
        $vehicles = array_map(function($value)use ($urlEditVehicle, $permission){                 
           
           $id = $value->id;           

            // if(in_array('Super Admin',$permission) || in_array('Admin',$permission))
            // {
            //     $value->button = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlProfile\\$id' >Perfil</a> <a class='btn btn-primary' target ='_blank' href='$urlEditVehicle\\$id' >Alterar</a> </div>";
            // }else{
            //     $value->button = "<div class='d-flex justify-content-center' > <a class='btn btn-primary' target ='_blank' href='$urlProfile\\$id' >Perfil</a></div>" ;
            // }

            $value->button = "<a class='btn btn-primary' target ='_blank' href='$urlEditVehicle\\$id' >Alterar</a> </div>";
                    
            return $value; 
        },$vehicles);

        // dd($vehicles);
        /////////////////////////
        return view('vehicles.vehicles_list',compact('vehicles'));

    }//end index
    
    public function showCreate()
    {
        $idCompany = auth()->user()->company->id;
        // $services1 = Services::where('company_id',1);
        // $services = $services1->simplePaginate(6);
        
        // $services1->count();
        // dd($services1->count());

        // return view('vehicles.index',["services"=>$services]);
        // $client = Clients::find();

      
        $companies = Companies::with('equipments')->find($idCompany);        
        $equipments = $companies->toArray()['equipments'];
        
        $client = auth()->user()->company->client->toArray();

        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        
        return view('vehicles.index',["permission" => $permission,"client" => $client,"equipments"=> $equipments]);

    }//end method showCreate


    public function store(VehiclesCreateRequest $request)
    {
        //VehiclesCreateRequest
        // dd($request->all());

        //validando tamanho das placas
        if(!is_null($request->vehicle_plate)) 
        {
            $request->vehicle_plate = str_replace("_", "", $request->vehicle_plate);
            if(strlen($request->vehicle_plate) < 7 ) return redirect("veiculos")->with('errorSize','Placa deverar ter no minino de 7 caracteres');             
        }
        //validando tamanho das placas
        if(!is_null($request->vehicle_plate2)) 
        {
            $request->vehicle_plate2 = str_replace("_", "", $request->vehicle_plate2);
            if(strlen($request->vehicle_plate2) < 7 ) return redirect("veiculos")->with('errorSize','Placa deverar ter no minino de 7 caracteres');
        }

        if($request->value == "R$ 0,00") 
        {
            return redirect("veiculos")->with('errorValue','Campo Valor obrigatorio');
        }

        
                            

        //verificando se o user vai ter um cliente vinculado
        if($request->client == "null"){
            $request->client = null;
        }
        
        // dd($request->all()); 

        $vehicles = Vehicles::create([
            'company'=> $request->company,
            'status' => $request->status,
            'type' => $request->type_vehicles,                                     
            'brand'=> $request->brand,       
            'model'=> $request->model,
            'year'=>$request->year,
            'vehicle_plate' => $request->vehicle_plate,
            'value' => $request->value,
            'equipment' => $request->equipment, 
            'license_plate' => $request->vehicle_plate ?? $request->vehicle_plate2,
            'responsible_for_insert' => auth()->user()->name,
            'date_of_insert' => now(),

            'client_id' => $request->client
                        
        ]);
        $vehicles->save();
        

        return redirect('veiculos')                
                   ->withSuccess('Veiculo cadastrado com Sucesso');

    }//end method store


    public function editShow(Request $request, $id)
    {
        $idCompany = auth()->user()->company->id;
        $vehicle = Vehicles::find($id)->toArray();

        $created_at = Carbon::parse($vehicle['created_at'], 'UTC');
        $updated_at = Carbon::parse($vehicle['updated_at'], 'UTC');

        $vehicle['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
        $vehicle['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm'); 

        // dd($vehicle);

        $client = Clients::find($vehicle['client_id']);
        
        // $client = auth()->user()->company->client->toArray();

        $companies = Companies::with('equipments')->find($idCompany);        
        $equipments = $companies->toArray()['equipments'];

        // dd( $id);
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        return view('vehicles.vehicles_edit',compact('id','permission','client','vehicle','equipments'));

    }//end editShow



    public function update(VehiclesEditRequest $request, $id)
    {
        // dd( $request->all());

        //validando tamanho das placas
      

        if($request->value == "R$ 0,00") 
        {
            return redirect("veiculos-edit/$id")->with('errorValue','Campo Valor obrigatorio');
        }

        // dd($request->all());
        $vehicle = Vehicles::find($id);

        $name = auth()->user()->name;
        $lastName = auth()->user()->last_name;

        $responsible_last_updated  = "$name $lastName";

        $vehicle->update([
            // 'company'=> $request->company,
            // 'status' => $request->status,
            // 'type' => $request->type_vehicles,                                     
            // 'brand'=> $request->brand,       
            // 'model'=> $request->model,
            // 'year'=>$request->year,
            // 'vehicle_plate' => $request->vehicle_plate,
            'value' => $request->value,
            'equipment' => $request->equipment, 
            // 'license_plate' => $request->vehicle_plate ?? $request->vehicle_plate2,
            'responsible_last_updated' => $responsible_last_updated
            // 'date_of_insert' => now(),
        ]);
        $vehicle->save();

       return redirect("veiculos-edit/$id")                 
                ->withSuccess('Veiculo editado com Sucesso');
      
    } //end update
    
}//end class
