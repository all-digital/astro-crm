<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest; 
use App\Http\Requests\UserEditRequest;

//use Illuminate\Support\Facades\Validator;

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
        // dd($request->all());
        return redirect('user')                
                   ->withSuccess('Usuario cadastrado com Sucesso');

        // if ($validator->fails()) {
        //     return redirect('user')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }       

    }//end store

    public function update(UserEditRequest $request)
    {
        return redirect('user')                
                   ->withSuccess('Usuario cadastrado com Sucesso');
      

    }//end update



}//end class

