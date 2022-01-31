<?php

namespace App\Http\Controllers;

use App\Models\Services;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ServicesExport;

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


        $services1 = Services::where('company_id',1);
        $services = $services1->simplePaginate(6);
        
        // $services1->count();

        // dd($services1->count());

        return view('home',["services"=>$services]);
    }




    public function index1()
    {
        $name = "darcio soares";
        $array = ['nome'=>'darcio','sobrenome'=>'soares'];
        //$array = json_encode($array);
        // dd($name);

    //     $array = collect($array);
        
    //     $array = $array->toJson();

    //    // $array = (object) $array;
    //    //pego o valor como objeto no blade

    //     //dd($ob);

        return view('home1',['array'=>$array]);
    }

    public function finance()
    {
        return view('dashboard_finance');
    }


    public function companies()
    {
        return view('empresas');
    }

    public function addCompanies()
    {
        return view('addCompanies');
    }


    public function exportServices() 
    {
        return Excel::download(new ServicesExport, 'services.xlsx');
    }



}//end class
