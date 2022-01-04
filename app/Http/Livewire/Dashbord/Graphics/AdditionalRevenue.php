<?php

namespace App\Http\Livewire\Dashbord\Graphics;

use Livewire\Component;

class AdditionalRevenue extends Component
{

    public $valor = '33.750,28';

    public function mudar()
    {
        $this->valor = '33.000,00';
    }

    public function render()
    {
        return view('livewire..dashbord.graphics.additional-revenue');
    }
}
