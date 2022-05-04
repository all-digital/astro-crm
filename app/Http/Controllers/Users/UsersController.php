<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest; 
use App\Http\Requests\UserEditRequest;

use App\Models\User;
use App\Models\Profiles;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class UsersController extends Controller
{
    
    public function index()
    {    
        // dd(auth()->user()->profile->company);
        $idCompany = auth()->user()->profile->company->id;

        $users = Profiles::where('company_id', $idCompany)      
        ->get();
                    
        $users = $users->toArray();

        $url = url('/profile');
        //
        $users = array_map(function($value)use ($url){

            // $created_at = Carbon::parse($value['created_at'], 'UTC');
            // $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            // $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            // $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');

            $id = $value['id'];
            $value['button'] = "<a class='btn btn-primary px-3' target ='_blank' href='$url\\$id' >Perfil</a>";
           
            $avatar = $value['avatar'];
            $value['avatar'] = "<img class=avatar-lg header-profile-user' m-0 p-0 src='storage\\$avatar'  style='max-width: 40px; max-height: 40px;' >";  

            return $value; 
        },$users);

        return view('users.list_user',compact('users')); 
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

        $user->save();        

        //add roles and permissions
        foreach ($request->create_user_perfil as $value) {           

            DB::table('user_roles')->insert([
                "user_id"=> $user->id,
                "role_id" => $value
            ]);
        }      
        
        //save upload of image
        $imagem = $request->create_user_avatar;
        $extension = $imagem->extension();
        
        $nameImage = "$user->id.$extension";
        $PathImage = $imagem->storeAs('users',$nameImage);     

        //create of profile
        $user->profile()->create([
            'login'=> $request->user_create_name,
            'profile' => $nameImage,
            'companie' => auth()->user()->profile->companie,
            'superiors'=> $request->create_user_upper,
            'status'=> $request->create_user_status,
            'avatar' => $PathImage     
        ]);

        $user->save();


        return redirect('user')                
        ->withSuccess('Usuario Cadastrado com Sucesso');
       
    }//end store


    public function update(UserEditRequest $request)
    {      
                   
        $updateUser = User::find(1);
                
       if($request->update_user_password || $request->update_user_password_confirm) {
        
            if ($request->update_user_password != $request->update_user_password_confirm )
            {                              
                return redirect('user-edit')->with('errorPassword','Senhas divergentes');
            }

            if (strlen($request->update_user_password) <= 8 )
            {                              
                return redirect('user-edit')->with('errorPassword','Senha deve ter no minimo 9 caracteres');
            }

            $updateUser->name = $request->update_user_name;            
            $updateUser->password = Hash::make($request->update_user_password);     
            $updateUser->save();

       }//end valided password
       
       $updateUser->name = $request->update_user_name;
       $updateUser->save();
        

        if($request->has('update_user_perfil'))
        {
            DB::table('user_roles')->where("user_id", $updateUser->id )->delete();

            foreach ($request->update_user_perfil as $value) {           

                DB::table('user_roles')->insert([
                    "user_id"=> $updateUser->id,
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
            $nameImage = "$nameDirectory.$updateUser->id.$extension";
    
            Storage::delete($nameImage);
            $PathImage = $imagem->storeAs(null,$nameImage);        
            
            $updateUser->profile()->update([
                    'login'=> $request->update_user_name,
                    'profile' => "profile",
                    'companie' => auth()->user()->profile->companie,
                    'superiors'=> $request->update_user_upper,
                    'status'=> $request->update_user_status,
                    'avatar' => $PathImage  
            ]);
        }//end if valid image  
        
        $updateUser->profile()->update([
                'login'=> $request->update_user_name,
                'profile' => "profile",
                'companie' => auth()->user()->profile->companie,
                'superiors'=> $request->update_user_upper,
                'status'=> $request->update_user_status,            
        ]);
        
                                    
        
        return redirect('user-edit')                
                   ->withSuccess('Usuario Alterado com Sucesso');
      

    }//end update



}//end class

