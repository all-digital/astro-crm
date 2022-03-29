<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    
    public function index(Request $request)
    {
        return view('equipment.index');

    }//end method

    public function EquipmentList(Request $request)
    {
        return view('equipment.equipment_list');

    }//end method


}//end class