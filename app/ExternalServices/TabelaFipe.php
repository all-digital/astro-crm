<?php

namespace App\ExternalServices;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;

//https://deividfortuna.github.io/fipe/

class TabelaFipe 
{

    protected $url;

    public function __construct()
    {
        $this->url  = 'http://parallelum.com.br/fipe/api/v1/';
        $this->headers = ['headers' => ['Accept' => 'application/json']];

    }//end construct


    public function getMarcas($veiculo)
    {
         
          switch ($veiculo) {
              case "Carro":
                
                $response = Http::get($this->url . 'carros/marcas', $this->headers);

                break;
              case "Moto":

                $response = Http::get($this->url . 'motos/marcas', $this->headers);
                break;
              case "Caminhao":
                  
                $response = Http::get($this->url . 'caminhoes/marcas', $this->headers);
                break;
                
              default:
                
          } 

          Cache::forget('marcas');

          Cache::put('marcas', $response->json());

          debug($response->json());

          return $response->json();

          

    }//end getMarcas

    
   public function getModelos($veiculo, $codigoModelo)
   {
      debug($veiculo, $codigoModelo);        
      switch ($veiculo) {
        case "Carro":
          
          $response = Http::get($this->url . "carros/marcas/$codigoModelo/modelos", $this->headers);
          break;
        case "Moto":

          $response = Http::get($this->url . "motos/marcas/$codigoModelo/modelos", $this->headers);
          break;
        case "Caminhao":
            
          $response = Http::get($this->url . "caminhoes/marcas/$codigoModelo/modelos", $this->headers);
          break;
          
        default:

        
      }// end 

        debug($response->json());
        return $response->json();

 }//end getModelos

 
 public function getAnos($veiculo, $codigoModelo, $codigoAno)
 {
  //https://parallelum.com.br/fipe/api/v1/carros/marcas/59/modelos/5940/anos
    debug($veiculo, $codigoModelo, $codigoAno);        
    switch ($veiculo) {
      case "Carro":
        
        $response = Http::get($this->url . "carros/marcas/$codigoModelo/modelos/$codigoAno/anos", $this->headers);
        break;
      case "Moto":

        $response = Http::get($this->url . "motos/marcas/$codigoModelo/modelos/$codigoAno/anos", $this->headers);
        break;
      case "Caminhao":
          
        $response = Http::get($this->url . "caminhoes/marcas/$codigoModelo/modelos/$codigoAno/anos", $this->headers);
        break;
        
      default:

      
    }// end 

      debug($response->json());
      return $response->json();

}//end getAnos


public function getValor($veiculo, $codigoModelo, $codigoAno, $codigoValor)
{
  //https://parallelum.com.br/fipe/api/v1/carros/marcas/59/modelos/5940/anos/2014-3
    debug($veiculo, $codigoModelo, $codigoAno, $codigoValor);        
    switch ($veiculo) {
      case "Carro":
        
        $response = Http::get($this->url . "carros/marcas/$codigoModelo/modelos/$codigoAno/anos/$codigoValor", $this->headers);
        break;
      case "Moto":

        $response = Http::get($this->url . "motos/marcas/$codigoModelo/modelos/$codigoAno/anos/$codigoValor", $this->headers);
        break;
      case "Caminhao":
          
        $response = Http::get($this->url . "caminhoes/marcas/$codigoModelo/modelos/$codigoAno/anos/$codigoValor", $this->headers);
        break;
        
      default:

      
    }// end 

      debug($response->json());
      return $response->json();

}//end getValor

}//end class