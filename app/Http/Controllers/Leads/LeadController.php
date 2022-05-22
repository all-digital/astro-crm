<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(Request $request)
    {

        return view('kanban');
        
    }//end index

    public function store(Request $request)
    {
        dd($request->all());
    }


}//end class
