<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;
use App\Models\Menucodinglab;
use CArbon\Carbon;
use Livewire\WithFileUploads;

class MenuPrincipalAddComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $widget1;
    public $widget2;
    public $widget3;
    public $ruta;

    public function AddMenu () {

        $this->validate ([
            'title'   => 'required',
            'image'   => 'required',
            'widget1' => 'required',
            'widget2' => 'required',
            'widget3' => 'required',
            'ruta'    => 'required'
        ]);

        $menu = new Menucodinglab();
        $menu->title = $this->title;
        $menu->widget1 = $this->widget1;
        $menu->widget2 = $this->widget2;
        $menu->widget3 = $this->widget3;
        $menu->ruta = $this->ruta;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('Menu',$imageName);
        $menu->image = $imageName;
        
        $menu->save();
        session()->flash('message', 'Menu creado con exito!');

    }

    public function render()
    {
        return view('livewire.codinglab.menu-principal-add-component')->layout('layouts.CodingLab.base');
    }
}
