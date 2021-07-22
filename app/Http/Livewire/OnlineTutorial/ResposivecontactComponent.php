<?php

namespace App\Http\Livewire\OnlineTutorial;

use Livewire\Component;
use App\Models\Formulariocontac;
use Livewire\WithFileUploads;


class ResposivecontactComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $lastname;
    public $email;
    public $mobile;
    public $message;

    

    public function addClient()
    {
        $this->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric|max:10',
            'message' => 'required|max:255'
        ]);

        $client = new Formulariocontac();
        $client->name     = $this->name;
        $client->lastname = $this->lastname;
        $client->email    = $this->email;
        $client->mobile   = $this->mobile;
        $client->message  = $this->message;
        $client->save();
        session()->flash('message','User has been created successfully!');
            
    }

    

    public function render()
    {

        return view('livewire.online-tutorial.resposivecontact-component')->layout('layouts.onlinet.blanco');
    }
}
