<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('equipment.equipment_list');

    }//end method

    public function create(Request $request)
    {
        dd($request->all());

        return redirect()                   
        ->route('equipment.create')
        ->withSuccess('Equipamento cadastrado com Sucesso');
    }

    public function update(Request $request)
    {
        dd($request->all());

        return redirect()                   
        ->route('equipment.create')
        ->withSuccess('Equipamento cadastrado com Sucesso');
    }

    public function edit(Request $request)
    {
        return view('equipment.equipment_edit');

        return redirect()                   
        ->route('equipment.create')
        ->withSuccess('Equipamento cadastrado com Sucesso');
    }



}//end class