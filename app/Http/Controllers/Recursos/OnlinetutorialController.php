<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlinetutorialController extends Controller
{
    public function onlinetutorial() {
        return view('onlinetutorial.index');
    }
    public function panel() {
        return view('onlinetutorial.panel');
    }

    public function ejercicio1() {
        return view('onlinetutorial.ejemplos.ejercicio1');
    }

}
