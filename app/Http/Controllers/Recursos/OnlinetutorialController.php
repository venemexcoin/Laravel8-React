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

    public function panel3pagina1() {
        return view('onlinetutorial.panel3Pagina1');
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
    public function ejercicio10() {
        return view('onlinetutorial.ejemplos.ejercicio10');
    }
    public function ejercicio11() {
        return view('onlinetutorial.ejemplos.ejercicio11');
    }
    public function ejercicio12() {
        return view('onlinetutorial.ejemplos.ejercicio12');
    }
    public function ejercicio13() {
        return view('onlinetutorial.ejemplos.ejercicio13');
    }
    public function ejercicio14() {
        return view('onlinetutorial.ejemplos.ejercicio14');
    }
    public function ejercicio15() {
        return view('onlinetutorial.ejemplos.ejercicio15');
    }
    public function ejercicio16() {
        return view('onlinetutorial.ejemplos.ejercicio16');
    }
    public function ejercicio17() {
        return view('onlinetutorial.ejemplos.ejercicio17');
    }
    public function ejercicio18() {
        return view('onlinetutorial.ejemplos.ejercicio18');
    }
    public function ejercicio19() {
        return view('onlinetutorial.ejemplos.ejercicio19');
    }
}
