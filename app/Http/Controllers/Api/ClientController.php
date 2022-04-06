<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        debug($request->all());

       return response()->json(['status'  => 'Sucesso cliente ok']);  

    }//end method store

}//end class
