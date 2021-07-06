<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;
use App\Models\Menucodinglab;

class MenuPrincipaAllComponent extends Component
{

    public function deleteMenu ($vista_id)
    {
        $vista = Menucodinglab::find($vista_id);
        $vista->delete();
        session()->flash('message', 'Menu Eliminado con exito!');
    }

    public function render()
    {
        $vistas = Menucodinglab::all();
        return view('livewire.codinglab.menu-principa-all-component', ['vistas' => $vistas])->layout('layouts.CodingLab.base');
    }
}
