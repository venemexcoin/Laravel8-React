<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;
use App\Models\Menucodinglab;
use Livewire\WithPagination;

class PrincipaluComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $vistas = Menucodinglab::paginate(2);

        return view('livewire.codinglab.principalu-component', ['vistas'=> $vistas])->layout('layouts.CodingLab.base');
    }
}
