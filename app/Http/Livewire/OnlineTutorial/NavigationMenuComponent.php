<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class NavigationMenuComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.navigation-menu-component')->layout('layouts.onlinet.blanco');
    }
}
