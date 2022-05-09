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
        $rolesAuthUser = auth()->user()->roles()->get()->toArray();
        $permission = array_map(function($value){
            return $value['name'];    
        },$rolesAuthUser);
        

        if(in_array('Super Admin',$permission))
        {
            $companies = Companies::all()->toArray();
        }else{

            $companiesResult = Companies::where('id', auth()->user()->profile->company_id)->get();         
            $companies = $companiesResult->toArray();              

        }//end else

        
        $urlEditCompany = url('/company-edit');

        $companies = array_map(function($value)use($urlEditCompany, $permission){


            $created_at = Carbon::parse($value['created_at'], 'UTC');
            $updated_at = Carbon::parse($value['updated_at'], 'UTC');

            $value['created_at'] = $created_at->isoFormat('DD/MM/YYYY HH:mm');
            $value['updated_at'] = $updated_at->isoFormat('DD/MM/YYYY HH:mm');

            $id = $value['id'];
           
            if(in_array('Super Admin',$permission) || in_array('Admin',$permission))
            {
                $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='#' >Modulos</a> <a class='btn btn-primary' target ='_blank' href='$urlEditCompany\\$id' >Editar</a> </div>";
            }else{
                $value['button'] = "<div class='d-flex justify-content-center' > <a class='btn btn-primary' target ='_blank' href='$urlEditCompany\\$id' >Editar</a></div>" ;
            }


            return $value;

        },$companies);
      

        
        return view('companies.index', compact('companies'));

    }//end method



    public function showCreateCompany()
    {
        return view('companies.create_company');   

    }//end method

    public function showEditCompany(Request $request, $id)
    {
        $company = Companies::find($id)->toArray();

        debug($id);
        debug($company);

       return view('companies.edit_company',compact('company'));

    }//method
   
    public function update($request, $id)
    {

    }//end update

}//end class
