<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clients;

class ClientController extends Controller
{
    
    public function show()
    {
        $rolesAuthUser = auth()->user()->roles()->get()->toArray(); 
        $idCompany = auth()->user()->company->id;
       
        
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        
        // if(in_array('Super Admin',$permission))
        // {
        //     $users = User::all()->toArray();

        // }else{

        //     $users = User::where('company_id', $idCompany)->get();    
        //     $users = $users->toArray();
        // }
        //compact('id', 'user','roles','permission')
        return view('clients.create_client');

    }//end index 
   
    public function index()
    {
        $rolesAuthUser = auth()->user()->roles()->get()->toArray(); 
        $idCompany = auth()->user()->company->id;
              
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        
        if(in_array('Super Admin',$permission))
        {
            $clients = Clients::all()->toArray();

        }else{

            $clients = Clients::where('company_id', $idCompany)->get();    
            $clients = $clients->toArray();
        }


        $urlProfile = url('/profile');
        $urlEditUser = url('/user-edit');

        
        $clients = array_map(function($value)use ($urlProfile, $urlEditUser, $permission){

            // $created_at = Carbon::parse($value['created_at'], 'UTC');
            // $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            // $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');z
            // $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');           
           
           $id = $value['id'];
           $value['company'] = 'teste';

            if(in_array('Super Admin',$permission) || in_array('Admin',$permission))
            {
                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlProfile\\$id' >Perfil</a> <a class='btn btn-primary' target ='_blank' href='$urlEditUser\\$id' >Alterar</a> </div>";
            }else{
                $value['button'] = "<div class='d-flex justify-content-center' > <a class='btn btn-primary' target ='_blank' href='$urlProfile\\$id' >Perfil</a></div>" ;
            }           
         

            return $value; 
        },$clients);

        // dd($clients);



        return view('clients.index',compact('clients'));
    }

   
    public function showEdit()
    {

    }



}//end class
