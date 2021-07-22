<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class LiveTrackComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.live-track-component')->layout('layouts/onlinet/layout1');
    }
}
