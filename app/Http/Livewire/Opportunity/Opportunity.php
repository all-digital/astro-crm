<?php

namespace App\Http\Livewire\Opportunity;

use Livewire\Component;

class Opportunity extends Component
{

    public $Pedido;
    public $ContatoPendente;
    public $AguardandoRetorno;
    public $Convertido;

    public function pedido($params)
    {
        dd("pedido opportunity",$params);
    }

    public function pedidoRemove($params)
    {
        dd("pedidoRemove opportunity",$params);
    }

    public function contatoPendente($params)
    {
        dd("contatoPendente opportunity",$params);
    }

    public function aguardandoRetorno($params)
    {
        dd("aguardandoRetorno opportunity",$params);
    }

    public function convertido($params)
    {
        dd("convertido opportunity",$params);
    }
    

    public function render()
    {
        return view('livewire.opportunity.opportunity');
    }
}
