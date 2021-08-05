<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class LayeredImageComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.layered-image-component')->layout('layouts.onlinet.blanco');
    }
}
