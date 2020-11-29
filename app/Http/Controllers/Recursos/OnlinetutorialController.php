<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlinetutorialController extends Controller
{
    public function onlinetutorial() {
        return view('onlinetutorial.index');
    }

    // Menu Principales

    public function panel() {
        return view('onlinetutorial.panel');
    }

    public function panel1() {
        return view('onlinetutorial.panel1');
    }

    public function panel2() {
        return view('onlinetutorial.panel2');
    }

    public function panel3() {
        return view('onlinetutorial.panel3');
    }

    public function panel4() {
        return view('onlinetutorial.panel4');
    }

    // Rutas de ejemplos
    
    public function ejercicio1() {
        return view('onlinetutorial.ejemplos.ejercicio1');
    }

    public function ejercicio2() {
        return view('onlinetutorial.ejemplos.ejercicio2');
    }
}
