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
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class UsersController extends Controller
{
    
    public function index()
    {         
        $rolesAuthUser = auth()->user()->roles()->get()->toArray(); 
        $idCompany = auth()->user()->company->id;

        
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        
        if(in_array('Super Admin',$permission))
        {
            $users = User::all()->toArray();

        }else{

            $users = User::where('company_id', $idCompany)->get();    
            $users = $users->toArray();
        }


        $urlProfile = url('/profile');
        $urlEditUser = url('/user-edit');
        //
        $users = array_map(function($value)use ($urlProfile, $urlEditUser, $permission){

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
           
            $avatar = $value['avatar'];
            $value['avatar'] = "<div class='d-flex justify-content-center'><img class=avatar-lg header-profile-user' m-0 p-0 src='storage\\$avatar'  style='max-width: 40px; max-height: 40px;' >";  

            return $value; 
        },$users);

        // dd($users);
        return view('users.list_user',compact('users','permission')); 
    }//end index


    public function show()
    {   
        $company = User::find(auth()->user()->id)->company->social_Reason;

        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        return view('users.create_user',compact('company','permission'));
    }//end show


    public function showEdit(Request $request, $id)
    {   
        $user = User::find($id);  

        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);

        
        $roles = $user->roles()->get()->toArray();                
        $roles = array_map(function($value){
            return $value['id'];    
        },$roles);
    
        // dd($user);
        return view('users.edit_user',compact('id', 'user','roles','permission'));
    }//end showEdit



    public function store(UserCreateRequest  $request)
    {               
        //get company_id to user logged
        $companyUserAuth = auth()->user()->company_id; 

        // $user = User::create([
        //     'name'=> $request->user_create_name,
        //     'email' => $request->create_user_loginEmail,
        //     'password' => Hash::make($request->create_user_password),                                 
        // ]);
        // $user->save();     

        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);


        //add o id escolhido pelo super admin
        if(in_array('Super Admin',$permission))
        {
            $companyUserAuth = $request->create_user_company;
        };

        $user = User::create([
            'name'=> $request->user_create_name,
            'last_name' => $request->user_create_lastname,
            'email' => $request->create_user_loginEmail,
            'password' => Hash::make($request->create_user_password),                         
            'login'=> $request->create_user_loginEmail,       
            'status'=> $request->create_user_status,
            'company_id'=>$companyUserAuth,
            
        ]);
        $user->save();
        
        //save upload of image
        if( $request->has('create_user_avatar') )
       {
           $imagem = $request->create_user_avatar;
           $extension = $imagem->extension();
            
            $nameImage = "$user->id.$extension";
            $PathImage = $imagem->storeAs('users',$nameImage);           
       }else{  

            $PathImage = 'users/user.png';            
       }

       //apagar depois
       //$user->last_name = "testesss";

        //save path image    
        $user->avatar = $PathImage;
        $user->save();


       

        //add roles and permissions
        foreach ($request->create_user_perfil as $value) {           

            DB::table('user_roles')->insert([
                "user_id"=> $user->id,
                "role_id" => $value
            ]);
        }    

        // //create of profile
        // $user->profile()->create([
        //     'login'=> $request->create_user_loginEmail,
        //     'profile' => $request->user_create_name,
        //     'companie' => auth()->user()->company,
        //     'superiors'=> $request->create_user_upper,
        //     'status'=> $request->create_user_status,
        //     'company_id'=>$companyUserAuth,
        //     'avatar' => $PathImage     
        // ]);
        // $user->save();

        debug($user->id);

        return redirect('user')                
        ->withSuccess('Usuario Cadastrado com Sucesso');
       
    }//end store


    public function update(UserEditRequest $request, $id)
    {      
        debug($id);
        // dd($request->all());
        $userUpdate = User::find($id);
                
       if($request->update_user_password || $request->update_user_password_confirm) {
        
            if ($request->update_user_password != $request->update_user_password_confirm )
            {                              
                return redirect("user-edit/$id")->with('errorPassword','Senhas divergentes');
            }

            if (strlen($request->update_user_password) <= 8 )
            {                              
                return redirect("user-edit/$id")->with('errorPassword','Senha deve ter no minimo 9 caracteres');
            }

            $LastName = auth()->user()->last_name;

            $userUpdate->name = $request->update_user_name;
            $userUpdate->last_name = $request->update_user_lastname;
            $userUpdate->responsible_last_updated = auth()->user()->name . $LastName;

            $userUpdate->password = Hash::make($request->update_user_password);     
            $userUpdate->save();

       }//end valided password
       
        $LastName = auth()->user()->last_name;
            
        $userUpdate->name = $request->update_user_name;
        $userUpdate->last_name = $request->update_user_lastname;
        $userUpdate->responsible_last_updated = auth()->user()->name . " $LastName";
        $userUpdate->save();
        

        if($request->has('update_user_perfil'))
        {
            DB::table('user_roles')->where("user_id", $userUpdate->id )->delete();

            foreach ($request->update_user_perfil as $value) {           

                DB::table('user_roles')->insert([
                    "user_id"=> $userUpdate->id,
                    "role_id" => $value
                ]);
            }      
        }

        //save upload of image
       
        if($request->has('update_user_avatar'))
        {
            $imagem = $request->update_user_avatar;
            $extension = $imagem->extension();
            
            $nameDirectory = "users/";
            $nameImage = "$nameDirectory.$userUpdate->id.$extension";
    
            Storage::delete($nameImage);
            $PathImage = $imagem->storeAs(null,$nameImage);        
            
            $userUpdate->update([
                    'login'=> $request->update_user_name,                                         
                    'status'=> $request->update_user_status,
                    'avatar' => $PathImage  
            ]);
        }//end if valid image  
        
        $userUpdate->update([
                'login'=> $request->update_user_name,                               
                'status'=> $request->update_user_status,            
        ]);
        
                                    
        
        return redirect("user-edit/$id")                
                   ->withSuccess('Usuario Alterado com Sucesso');
      

    }//end update



}//end class

