<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class CornerTextComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.corner-text-component')->layout('layouts.onlinet.blanco');
    }
}
