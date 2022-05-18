<?php

namespace App\Http\Livewire\Leads;

use Livewire\Component;

class Kanban extends Component
{

    public $Pedido;
    public $ContatoPendente;
    public $AguardandoRetorno;
    public $Convertido;

    public function pedido($params)
    {
        dd("pedido",$params);
    }

    public function pedidoRemove($params)
    {
        dd("pedidoRemove",$params);
    }

    public function contatoPendente($params)
    {
        dd("contatoPendente",$params);
    }

    public function aguardandoRetorno($params)
    {
        dd("aguardandoRetorno",$params);
    }

    public function convertido($params)
    {
        dd("convertido",$params);
    }
    


    /////////////////
    public function render()
    {
        return view('livewire.leads.kanban');
    }
}
