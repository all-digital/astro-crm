<?php

namespace App\Http\Controllers\Vehicles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services;

class VehiclesController extends Controller
{
    


    public function store(Request $request)
    {

        
        $validated = $request->validate([
            'company' => 'required|min:2|max:155',
            'status' => 'required|max:20',
            'vehicles' => 'required|min:2|max:155',
            'brand' => 'required|min:2|max:155',
            'model' => 'required|min:2|max:155',
            'year' => 'required',
            'vehicle_plate' => 'required',
            'value' => 'required',
        ]);


        return redirect()                   
                   ->route('vehicles.create')
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


}//end class
