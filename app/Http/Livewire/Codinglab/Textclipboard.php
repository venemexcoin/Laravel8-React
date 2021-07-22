<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;

class Textclipboard extends Component
{
    public function render()
    {
        return view('livewire.codinglab.textclipboard')->layout('layouts.CodingLab.base');
    }
}
