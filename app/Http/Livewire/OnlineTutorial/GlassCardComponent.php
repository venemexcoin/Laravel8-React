<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class GlassCardComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.glass-card-component')->layout('layouts.onlinet.blanco');
    }
}
