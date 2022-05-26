<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EquipmentStoreRequest;
use App\Models\Equipments;

class EquipmentController extends Controller
{
    
    public function index(Request $request)
    {


        //dd("teste");
       // return redirect()->route('equipment.index');
        return view('equipment.index');

    }//end method

    public function show(Request $request)
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

            // $created_at = Carbon::parse($value['created_at'], 'UTC');
            // $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            // $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            // $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');           

            $id = $value['id'];
            $value['user_last_alter'] = 'user_last_alter';
            $value['company'] = 'name company';
            $value['veiculo'] = 'veiculo';


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

    public function store(EquipmentStoreRequest $request)
    {

        $equipment = Equipments::create([
            'status' => $request->company,
            'responsible_for_insert' => auth()->user()->name,    
            'provider' => $request->provider,
            'brand' => $request->brand,
            'model' => $request->model,
            'imei' => $request->imei,
            'simcard' => $request->simcards,
            'company_id' => auth()->user()->company->id
        ]);

        return redirect()                   
        ->route('equipment.index')
        ->withSuccess('Equipamento cadastrado com Sucesso');
    }

    public function edit(Request $request, $id)
    {

        return view('equipment.equipment_edit',compact('id'));

        // return redirect()                   
        // ->route('equipment.create')
        // ->withSuccess('Equipamento cadastrado com Sucesso');
    }


    public function update(Request $request)
    {
        dd($request->all());

        return redirect()                   
        ->route('equipment.store')
        ->withSuccess('Equipamento cadastrado com Sucesso');
    }




}//end class