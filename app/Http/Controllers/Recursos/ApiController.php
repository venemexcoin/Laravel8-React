<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function api1() {
        return view('apis.fiatcripto');
    }
    // Ejercicios

    public function ejercicio1() {
        return view('apis.ejemplos.ejercicio1');
    }
    public function ejercicio2() {
        return view('apis.ejemplos.ejercicio2');
    }
    public function ejercicio3() {
        return view('apis.ejemplos.ejercicio3');
    }
}
