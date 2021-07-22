<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create(){
        return view('cliente.create');
    }

    public function storeClient(Request $request)
    {
        $client = new Cliente();
        $client->alias   = $request->alias;
        $client->imei    = $request->imei;
        $client->company = $request->company;
        $client->nota    = $request->nota;
        $client->email   = $request->email;
        $client->mxn     = $request->mxn;
        $client->save();
        return redirect()->route('cliente_path')->with('ciente_Add', '');
    }
}
