<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest; 
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    
    public function index()
    {        
        //methods list user 
    }//end methods

    public function show()
    { 
        return view('users.create_user');
    }//end createUser

    public function showEdit()
    {   
        return view('users.edit_user');
    }//editUser

    public function store(UserCreateRequest $request)
    {
        
        // $validated = $request->validate([
        //     'create_user_password' => 'required|min:6',
            
        // ]);


        
        //dd($request->all());

        // $validator = Validator::make($request->all(), [

        //     'create_user_password' => 'required'
            
        // ]);
 
        // if ($validator->fails()) {
        //     return redirect('user')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
       


    }//end store




}//end class

