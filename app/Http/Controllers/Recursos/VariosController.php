<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VariosController extends Controller
{
    public function varios() {
        return view('varios.index');
    }

    /*---- Rutas de ejemplo ----*/

    public function ejercicio1() {
        return view('varios.ejemplos.ejercicio1');
    }
}
