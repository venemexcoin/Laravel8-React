@extends('layouts.layout')

@section('title_base')
    Botones & Social
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/onlinepanel.css')}}">
@endsection


@section('content')

<div class="galeria">
    <h1>Galeria Botones & Social</h1>
    <div class="linea"></div>
    <div class="contenedor-imagenes">
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/clipPath.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlinetutorial/ejercicio5')}}">Clip-path</a>
                <h4>Boton</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Servicio Unlock</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <!-- <div class="imagen">
            <img src="img/1 (2).jpg" alt="">
        </div> -->
    </div>
</div>
</div>



@endsection