<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;
use App\Models\Menucodinglab;

class PrincipaluComponent extends Component
{
    public function render()
    {
        $vistas = Menucodinglab::all();

        return view('livewire.codinglab.principalu-component', ['vistas'=> $vistas])->layout('layouts.CodingLab.base');
    }
}
