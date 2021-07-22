<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;

class NavigationComponent extends Component
{
    public function render()
    {
        return view('livewire.codinglab.navigation-component')->layout('layouts.CodingLab.blanco');
    }
}
