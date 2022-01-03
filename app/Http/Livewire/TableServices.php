<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableServices extends Component
{
    public $services = "SERVIÇOS";
    public $teste = "teste";

    public function submitInfo(){

        $this->teste = "mudou nome";

    }

    public function render()
    {
        return view('livewire.table-services');
    }
}
