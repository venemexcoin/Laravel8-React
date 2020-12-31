@extends('layouts.layout7')

@section('title_base')
    Crear de orden
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/layout1.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/cliente/create.css')}}">
@endsection


@section('content')
    
    <div class="main_container">
        <div class="card">
            <card-hear>
                <h3 class="cliente-create__title">Ingrese la orden</h3>
            </card-hear>
            <card-body>
                <div class="container_clien_body">
                    <form method="POST" action="{{route('clien.store')}}" class="form-client">
                        @csrf
                        <p class="clien-title">Nombre del cliente</p>
                        <input type="text" name="alias">

                        <p class="clien-title">imei</p>
                        <input type="number" name="imei">

                        <p class="clien-title">Compañia</p>
                        <input type="text" name="company">

                        <p class="clien-title">Nota</p> 
                        <textarea name="nota" id="note" cols="15" rows="2"></textarea>

                        <p class="clien-title">Email</p>
                        <input type="email" name="email">

                        <p class="clien-title">Precio</p>
                        <input type="number" name="mxn">

                        <button class="btn-sub" type="submit">Enviar</button>
                    </form>
                </div>
            </card-body>
        </div>

    </div>

@endsection