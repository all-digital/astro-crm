<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest; 
use App\Http\Requests\UserEditRequest;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRole;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    
    public function index()
    {        
        //methods list user 
    }//end index

    public function show()
    { 
        return view('users.create_user');
    }//end show

    public function showEdit()
    {   
        return view('users.edit_user');
    }//end showEdit

    public function store(UserCreateRequest $request)
    {     
        $user = User::create([
            'name'=> $request->user_create_name,
            'email' => $request->create_user_loginEmail,
            'password' => Hash::make($request->create_user_password),                                 
        ]);

        foreach ($request->create_user_perfil as $value) {            
            // UserRole::create(['user_id'=> $user->id, 'role_id' => $value]);
            // echo "$user->id  $value ||";
            DB::table('user_roles')->insert([
                "user_id"=> $user->id,
                "role_id" => $value
            ]);
        }      
        
        $imagem = $request->create_user_avatar;
        $extension = $imagem->extension();
        
        $nameImage = "$user->id.$extension";

        $PathImage = $imagem->storeAs('users',$nameImage);     

        $user->profile()->create([
            'login'=> $request->user_create_name,
            'profile' => $nameImage,
            'companie' => $user->profile()->get('companie')[0]->companie, 
            'superiors'=> $request->create_user_upper,
            'status'=> $request->create_user_status,
            'avatar' => $PathImage     
        ]);

        $user->address()->create([
            'address' => "teste_address",
            'number_address' => "teste_address",
            'zip_code'=> "teste",
            'city' => "teste_address",
            'country' => "teste_address",
            'state'=> "teste_address",
            'complement'=> "teste_address",
        ]);

        return redirect('user')                
        ->withSuccess('Usuario cadastrado com Sucesso');
       
    }//end store

    public function update(UserEditRequest $request)
    {
        return redirect('user')                
                   ->withSuccess('Usuario cadastrado com Sucesso');
      

    }//end update



}//end class

