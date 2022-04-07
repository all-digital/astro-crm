<?php

namespace App\Http\Controllers\Services;

use App\Models\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ServicesExport;


class ServicesController extends Controller
{
    
    public function servicesTable()
    {

        $services = Services::where('company_id',1);
        $services = $services->simplePaginate(6);
        

        return view('services.services_table',["services"=>$services]);
    }//end method

    public function exportServices() 
    {
        return Excel::download(new ServicesExport, 'services.xlsx');
    }



}//end class
