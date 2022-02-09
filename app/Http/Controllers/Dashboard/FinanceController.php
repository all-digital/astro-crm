<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{

    public function finance()
    {
        return view('finance.index');
    }
    
}//end class
