<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodigonepalController extends Controller
{
    public function codigonepal() {
        return view('codigoNepal.index');
    }
}
