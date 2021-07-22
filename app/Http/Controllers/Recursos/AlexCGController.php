<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlexCGController extends Controller
{
    public function alexCG() {
        return view('alexCG.index');
    }
}
