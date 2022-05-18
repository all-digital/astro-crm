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
        dd($params);
    }

    public function contatoPendente($params)
    {
        dd($params);
    }

    public function aguardandoRetorno($params)
    {
        dd($params);
    }

    public function convertido($params)
    {
        dd($params);
    }
    


    /////////////////
    public function render()
    {
        return view('livewire.leads.kanban');
    }
}
