<?php

namespace App\ExternalServices;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ReceitaService 
{
    protected $url;

    public function __construct()
    {
        $this->url    = 'http://www.receitaws.com.br/v1/cnpj/';

    }

    public function searchCNPJ($cnpj)
    {
        $response = Http::get($this->url . $cnpj,[

            'headers' => [
                'Accept' => 'application/json'
            ]

        ]);
       

        return $response->json();
        //return $response->object();
        

     }//end method



}//end class


// // Determine if the status code is >= 200 and < 300...
// $response->successful();

// // Determine if the status code is >= 400...
// $response->failed();

// // Determine if the response has a 400 level status code...
// $response->clientError();

// // Determine if the response has a 500 level status code...
// $response->serverError();