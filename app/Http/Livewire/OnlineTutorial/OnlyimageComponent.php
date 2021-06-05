<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class OnlyimageComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.onlyimage-component')->layout('layouts.onlinet.blanco');
    }
}
