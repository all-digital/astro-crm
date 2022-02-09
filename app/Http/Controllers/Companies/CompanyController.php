<?php

namespace App\Http\Controllers\Companies;

use App\Models\Companies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        return view('companies.index');
    }//end method

    public function addCompany()
    {
        return view('companies.add_companies');        
    }//end method

    public function editCompany()
    {
        return view('companies.edit_companies');
    }//method
    

}//end class
