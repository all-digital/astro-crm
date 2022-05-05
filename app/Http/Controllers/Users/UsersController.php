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
        $idCompany = auth()->user()->profile->company->id;

        $users = Profiles::where('company_id', $idCompany)      
        ->get();
                    
        $users = $users->toArray();

        //teste 
        $admin = true;

        $url = url('/profile');
        $urlEditUser = url('/user-edit');
        //
        $users = array_map(function($value)use ($url, $urlEditUser, $admin){

            // $created_at = Carbon::parse($value['created_at'], 'UTC');
            // $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            // $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            // $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');           

            $id = $value['id'];

            if($admin)
            {
                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$url\\$id' >Perfil</a> <a class='btn btn-primary' target ='_blank' href='$urlEditUser\\$id' >Alterar</a> </div>";
            }else{
                $value['button'] = "<div class='d-flex justify-content-center' > <a class='btn btn-primary' target ='_blank' href='$url\\$id' >Perfil</a></div>" ;
            }
           
            $avatar = $value['avatar'];
            $value['avatar'] = "<div class='d-flex justify-content-center'><img class=avatar-lg header-profile-user' m-0 p-0 src='storage\\$avatar'  style='max-width: 40px; max-height: 40px;' >";  

            return $value; 
        },$users);

        return view('users.list_user',compact('users')); 
    }//end index


    public function show()
    {   
        $company = User::find(auth()->user()->id)->profile->company->social_Reason;

        //test
        $admin = false;

        return view('users.create_user',compact('company','admin'));
    }//end show

    public function showEdit(Request $request, $id)
    {          
        $avatar = User::find($id)->profile->avatar;
    //    dd( $avatar);
        return view('users.edit_user',compact('id', 'avatar'));
    }//end showEdit


    public function store(UserCreateRequest $request)
    {   
        //get company_id to user logged
        $companyUserAuth = auth()->user()->profile->company_id; 

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
       if( $request->has('create_user_avatar') )
       {
            $imagem = $request->create_user_avatar;
            $extension = $imagem->extension();
            
            $nameImage = "$user->id.$extension";
            $PathImage = $imagem->storeAs('users',$nameImage);           
       }else{  

            $PathImage = 'users/user.png';            
       }
        
            

        //create of profile
        $user->profile()->create([
            'login'=> $request->create_user_loginEmail,
            'profile' => $request->user_create_name,
            'companie' => auth()->user()->profile->companie,
            'superiors'=> $request->create_user_upper,
            'status'=> $request->create_user_status,
            'company_id'=>$companyUserAuth,
            'avatar' => $PathImage     
        ]);

        $user->save();


        return redirect('user')                
        ->withSuccess('Usuario Cadastrado com Sucesso');
       
    }//end store


    public function update(UserEditRequest $request, $id)
    {      
        debug($id);
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

            $userUpdate->name = $request->update_user_name;            
            $userUpdate->password = Hash::make($request->update_user_password);     
            $userUpdate->save();

       }//end valided password
       
       $userUpdate->name = $request->update_user_name;
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
            
            $userUpdate->profile()->update([
                    'login'=> $request->update_user_name,
                    'profile' => "profile",
                    'companie' => auth()->user()->profile->companie,
                    'superiors'=> $request->update_user_upper,
                    'status'=> $request->update_user_status,
                    'avatar' => $PathImage  
            ]);
        }//end if valid image  
        
        $userUpdate->profile()->update([
                'login'=> $request->update_user_name,
                'profile' => "profile",
                'companie' => auth()->user()->profile->companie,
                'superiors'=> $request->update_user_upper,
                'status'=> $request->update_user_status,            
        ]);
        
                                    
        
        return redirect("user-edit/$id")                
                   ->withSuccess('Usuario Alterado com Sucesso');
      

    }//end update



}//end class

