<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class LoadingbarComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.loadingbar-component')->layout('layouts/onlinet/base');;
    }
}
