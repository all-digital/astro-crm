<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        $name = "darcio soares";
        $array = ['nome'=>'darcio','sobrenome'=>'soares'];
        //$array = json_encode($array);
        // dd($name);

        $array = collect($array);
        
        $array = $array->toJson();

       // $array = (object) $array;
       //pego o valor como objeto no blade

        //dd($ob);

        return view('home1',['name'=>$name,'array'=>$array]);
    }

    public function finance()
    {
        return view('dashboard_finance');
    }



}//end class
