<?php

namespace App\Http\Controllers\OrderService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\OrderServicesCreateRequest; 

class OrderServiceController extends Controller
{
    //

    public function show()
    {
        return view('orderService.create_os');

    }//end show 


    public function store(OrderServicesCreateRequest $request)
    {
        
        dd($request->all());

    }//end store
}
