<?php

namespace App\Http\Controllers\Companies;

use App\Models\Companies;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {

        $companies = Companies::All();

        // dd($companies->toArray());
        
        return view('companies.index');

    }//end method



    public function createCompany()
    {
        return view('companies.create_companies');   

    }//end method

    public function editCompany()
    {
        return view('companies.edit_companies');

    }//method


    // public function teste(Request $request)
    // {
    //     debug(Auth::user());
    //     debug(Auth::user()->name);
    //     debug($request->user());
    //     debug("teste company");

    //     return view('teste');
    // }

    

}//end class
