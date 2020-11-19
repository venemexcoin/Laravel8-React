<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BluuwebController extends Controller
{
    public function bluuweb() {
        return view('bluuweb.index');
    }

    public function ejercicio1() {
        return view('bluuweb.ejemplos.ejercicio1');
    }
}
