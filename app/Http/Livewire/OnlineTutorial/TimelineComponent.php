<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;

class TimelineComponent extends Component
{
    public function render()
    {
        return view('livewire.online-tutorial.timeline-component')->layout('layouts.onlinet.blanco1');
    }
}
