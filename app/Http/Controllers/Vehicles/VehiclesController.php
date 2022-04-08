<?php

namespace App\Http\Controllers\Vehicles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services;
use App\Http\Requests\VehiclesCreateRequest;
use App\Http\Requests\VehiclesEditRequest;

class VehiclesController extends Controller
{
    


    public function store(VehiclesCreateRequest $request)
    {
        return redirect('veiculos')                
                   ->withSuccess('Veiculo cadastrado com Sucesso');

    }//end method


    public function showCreate()
    {
        
        $services1 = Services::where('company_id',1);
        $services = $services1->simplePaginate(6);
        
        // $services1->count();
        // dd($services1->count());

        return view('vehicles.index',["services"=>$services]);
    }//end method


    public function editShow()
    {
        return view('vehicles.vehicles_edit');
    }

    public function editStore(VehiclesEditRequest $request)
    {
       return redirect('veiculos-edit')                 
                ->withSuccess('Veiculo editado com Sucesso');
      
    }
}//end class
