<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class VariosController extends Controller
{
    public function varios() {
        return view('varios.index');
    }

    /*---- Rutas de ejemplo ----*/

    public function ejercicio1() {
        return view('varios.ejemplos.ejercicio1');
    }
    public function ejercicio2() {
        return view('varios.ejemplos.ejercicio2');
    }
    public function ejercicio3() {
        return view('varios.ejemplos.ejercicio3');
    }
    public function ejercicio4() {
        return view('varios.ejemplos.ejercicio4');
    }
    public function ejercicio5() {
        return view('varios.ejemplos.ejercicio5');
    }
    public function ejercicio6() {
        return view('varios.ejemplos.ejercicio6');
    }
    public function ejercicio7() {

        $clients = Cliente::all();
        return view('varios.ejemplos.ejercicio7', compact('clients'));
    }
}
