<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;

class WorkingComponent extends Component
{
    public function render()
    {
        return view('livewire.codinglab.working-component')->layout('layouts.CodingLab.ejercicio1');
    }
}
