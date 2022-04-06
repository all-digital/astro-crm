<?php

namespace App\Http\Controllers\Simcards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimcardsController extends Controller
{
    
    public function showEdit()
    {
        return view('simcards.edit_simcard');

    }//end showCreate


    public function edit(Request $request)
    {
        
        // dd($request->all());

        $validated = $request->validate([
            'company' => 'required|min:2|max:155',
            'status' => 'required|max:20',
            'provider' => 'required|min:2|max:155',
            'brand' => 'required|min:2|max:155',
            'iccid' => 'required|min:4|max:155',
            'numberLine' => 'required|min:4|max:155',
        ]);

        return redirect('simcards')                
        ->withSuccess('Edição de Simcard feita com Sucesso');

    }//end store


    public function index()
    {
        return view('simcards.index');

    }//end edit




}//end class
