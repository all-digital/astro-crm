<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $name = "darcio soares";
        $array = ['nome'=>'darcio','sobrenome'=>'soares'];


        return view('dashboard.index',['array'=>$array]);
    }






}//end class
