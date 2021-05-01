<?php

namespace App\Http\Livewire\Javascript;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.javascript.home-component')->layout('layouts.javascript.base');
    }
}
