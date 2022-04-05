<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        
        //methods list user 

    }//end methods

    public function createUser()
    { 
        return view('users.create_user');
    }//end createUser

    public function editUser()
    {   
        return view('users.edit_user');
    }//editUser





}//end class

