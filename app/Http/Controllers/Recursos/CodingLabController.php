<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodingLabController extends Controller
{
    public function codinglab() {
        return view('codinglab.index');
    }

    public function panelcodelab() {
        return view('codinglab.panelcodelab');
    }

    public function panelcodelab1() {
        return view('codinglab.panelcodelab1');
    }

    public function panelcodelab2() {
        return view('codinglab.panelcodelab2');
    }

    public function panelcodelab3() {
        return view('codinglab.panelcodelab3');
    }


    


    public function ejercicio1() {
        return view('codinglab.ejemplos.ejercicio1');
    }
    public function ejercicio2() {
        return view('codinglab.ejemplos.ejercicio2');
    }
}
