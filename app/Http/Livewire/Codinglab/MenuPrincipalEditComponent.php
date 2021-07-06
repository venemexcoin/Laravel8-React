<?php

namespace App\Http\Livewire\Codinglab;

use Livewire\Component;
use App\Models\Menucodinglab;
use CArbon\Carbon;
use Livewire\WithFileUploads;

class MenuPrincipalEditComponent extends Component
{

    

    use WithFileUploads;

    public $title;
    public $image;
    public $widget1;
    public $widget2;
    public $widget3;
    public $ruta;
    public $newimage;
    public $vista_id;


    public function mount($vista_id)
    {
        
        $vista = Menucodinglab::find($vista_id);
        $this->title    = $vista->title;
        $this->image    = $vista->image;
        $this->widget1  = $vista->widget1;
        $this->widget2  = $vista->widget2;
        $this->widget3  = $vista->widget3;
        $this->ruta     = $vista->ruta;
        $this->vista_id = $vista->id;
    }


    public function vistaUpdate() {


        $vista = Menucodinglab::find($this->vista_id);
        $vista->title   = $this->title;
        $vista->widget1 = $this->widget1;
        $vista->widget2 = $this->widget2;
        $vista->widget3 = $this->widget3;
        $vista->ruta    = $this->ruta;
        if($this->newimage)
        {
            $imagename = Carbon::now()->timestamp. "." . $this->newimage->extension();
            $this->newimage->storeAs('Menu',$imagename);
            $vista->image = $imagename;
        }
        
        $vista->save();
        session()->flash('message', 'Menu actualizado con exito!');
    }
    public function render()
    {
        return view('livewire.codinglab.menu-principal-edit-component')->layout('layouts.CodingLab.base');
    }
}
