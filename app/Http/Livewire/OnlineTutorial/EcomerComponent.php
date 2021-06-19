<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class EcomerComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.ecomer-component')->layout('layouts.onlinet.blanco');
    }
}
