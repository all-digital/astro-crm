<?php

namespace App\Http\Controllers\Vehicles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services;
use App\Models\Vehicles;
use App\Models\Clients;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\VehiclesCreateRequest;
use App\Http\Requests\VehiclesEditRequest;

class VehiclesController extends Controller
{
    public function index()
    {

        $rolesAuthUser = auth()->user()->roles()->get()->toArray(); 
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
       

        //dd($result);
        /////////////////////////////
                           
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
    }
    
    public function showCreate()
    {
        
        // $services1 = Services::where('company_id',1);
        // $services = $services1->simplePaginate(6);
        
        // $services1->count();
        // dd($services1->count());

        // return view('vehicles.index',["services"=>$services]);

        // $client = Clients::find();
        
        $client = auth()->user()->company->client->toArray();

        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        
        return view('vehicles.index',["permission" => $permission,"client" => $client]);
    }//end method


    public function store(VehiclesCreateRequest $request)
    {
        //VehiclesCreateRequest
        // dd($request->all());

        //verificando se o user vai ter um cliente vinculado
        if($request->client == "null"){
            $request->client = null;
        }

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
            'license_plate' => $request->license_plate,
            'responsible_for_insert' => auth()->user()->name,
            'date_of_insert' => now(),

            'client_id' => $request->client
                        
        ]);
        $vehicles->save();
        

        return redirect('veiculos')                
                   ->withSuccess('Veiculo cadastrado com Sucesso');

    }//end method




    public function editShow(Request $request, $id)
    {

        $vehicle = Vehicles::find($id);

        dd($vehicle);

        $client = auth()->user()->company->client->toArray();

        // dd( $id);
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        return view('vehicles.vehicles_edit',compact('id','permission','client','vehicle'));
    }



    public function update(VehiclesEditRequest $request, $id)
    {
        // dd( $request->all());

        $vehicle = Vehicles::find($id);

        $vehicle->update([
            'company'=> $request->company,
            'status' => $request->status,
            'type' => $request->type_vehicles,                                     
            'brand'=> $request->brand,       
            'model'=> $request->model,
            'year'=>$request->year,
            'vehicle_plate' => $request->vehicle_plate,
            'value' => $request->value,
            'equipment' => $request->equipment, 
            'license_plate' => $request->license_plate,
            // 'responsible_for_insert' => auth()->user()->name,
            // 'date_of_insert' => now(),
        ]);
        $vehicle->save();

       return redirect("veiculos-edit/$id")                 
                ->withSuccess('Veiculo editado com Sucesso');
      
    } //'vehicles.update'
}//end class
