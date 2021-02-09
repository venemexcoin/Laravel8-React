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
    public function ejercicio3() {
        return view('onlinetutorial.ejemplos.ejercicio3');
    }
    public function ejercicio4() {
        return view('onlinetutorial.ejemplos.ejercicio4');
    }
    public function ejercicio5() {
        return view('onlinetutorial.ejemplos.ejercicio5');
    }
    public function ejercicio6() {
        return view('onlinetutorial.ejemplos.ejercicio6');
    }
    public function ejercicio7() {
        return view('onlinetutorial.ejemplos.ejercicio7');
    }
    public function ejercicio8() {
        return view('onlinetutorial.ejemplos.ejercicio8');
    }
    public function ejercicio9() {
        return view('onlinetutorial.ejemplos.ejercicio9');
    }
}
