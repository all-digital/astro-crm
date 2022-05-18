<?php

namespace App\Http\Livewire\Leads;

use Livewire\Component;

class Lead extends Component
{

    public $groupId;
    public $name;

    public function render()
    {
        return view('livewire.leads.lead');
    }
}
