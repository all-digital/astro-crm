<?php

namespace App\Http\Livewire\Dashbord\Graphics;

use Livewire\Component;

class SalesOfMonth extends Component
{
    public $valor = 155;

    // public function booted()
    // {
    //     dd("para");
    // }

    // public function mudar($name)
    // {
    //     dd("parou mano $name");
    // }

    public function render()
    {
        return view('livewire..dashbord.graphics.sales-of-month');
    }
}
