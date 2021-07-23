<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.checkout-component')->layout('layouts.onlinet.blanco');
    }
}
