<?php

namespace App\Http\Controllers\Simcards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Simcards;
use Carbon\Carbon;

use App\Http\Requests\SimcardEditRequest;

class SimcardsController extends Controller
{

    public function index()
    {
                                                // obs -> filtar os simcards 
        $simcards = Simcards::all()->toArray();
        // dd($simcards);


        $rolesAuthUser = auth()->user()->roles()->get()->toArray(); 
        $idCompany = auth()->user()->company->id;       
                           
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);
        


        $urlEditSimcard = url('simcard-edit');
        //
        $simcards = array_map(function($value)use ($urlEditSimcard, $permission){

            $created_at = Carbon::parse($value['created_at'], 'UTC');
            $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');           

            $id = $value['id'];
            

            if(in_array('Super Admin',$permission) || in_array('Admin',$permission))
            {
                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlEditSimcard\\$id' >Editar</a> <a class='btn btn-primary' target ='_blank' href='$urlEditSimcard\\$id' >Excluir</a> </div>";
            }else{
                $value['button'] = "<div class='d-flex justify-content-center' > <a class='btn btn-primary' target ='_blank' href='$urlEditSimcard\\$id' >Perfil</a></div>" ;
            }          

            return $value; 
        },$simcards);

        // dd($simcards);

        return view('simcards.index', compact('permission','simcards'));
    
    }//end edit
    
    public function showEdit(Request $request, $id)
    {
        
        return view('simcards.edit_simcard', compact('id'));

    }//end showCreate


    public function update(SimcardEditRequest $request, $id)
    {              
       
        return redirect()
            ->route('simcard.edit.show',$id)                
            ->withSuccess('Edição de Simcard feita com Sucesso');

    }//end store






}//end class
