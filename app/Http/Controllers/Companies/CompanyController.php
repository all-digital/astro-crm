<?php

namespace App\Http\Controllers\Companies;

use App\Models\Companies;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {        

        $companiesResult = Companies::where('user_id', auth()->user()->id)->get();            

        $companies = $companiesResult->toArray();


        $companies = array_map(function($value){


            $created_at = Carbon::parse($value['created_at'], 'UTC');
            $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');

            $id = $value['id'];
            $value['modulos'] = "<button class='btn btn-primary p-1' onClick='alert(`o id é $id`)'>Modulos</button>";


            return $value;

        },$companies);
      

        
        return view('companies.index', compact('companies'));

    }//end method



    public function createCompany()
    {
        return view('companies.create_companies');   

    }//end method

    public function editCompany()
    {
        return view('companies.edit_companies');

    }//method
   

}//end class
