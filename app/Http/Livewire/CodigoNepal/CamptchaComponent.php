<?php

namespace App\Http\Livewire\CodigoNepal;

use Livewire\Component;

class CamptchaComponent extends Component
{
    public function render()
    {
        return view('livewire.codigo-nepal.camptcha-component')->layout('layouts.CodigoNepal.blanco');
    }
}
