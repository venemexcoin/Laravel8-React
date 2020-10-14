<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //

    public function ejemplo1() {
        return view('prueba/ejemplo1');            
    }

    public function ejemplo2() {
        return view('prueba/ejemplo2');            
    }

   
}
