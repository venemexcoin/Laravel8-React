<?php

namespace App\Http\Livewire\CodigoNepal;

use Livewire\Component;

class PrincipalComponent extends Component
{
    public function render()
    {
        return view('livewire.codigo-nepal.principal-component')->layout('layouts.codigoNepal.base');
    }
}
