@extends('layouts.layout')

@section('title_base')
            Animaciones
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/onlinepanel.css')}}">
@endsection


@section('content')

<div class="galeria">
    <h1> Animaciones</h1>
    <div class="linea"></div>
    <div class="contenedor-imagenes">
        
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/particles.png')}}" alt="">
            <div class="overlay">
                <a href="{{url('/onlinetutorial/ejercicio1')}}">Visualizas</a>
                <h4>Red Social</h4>
            </div>
        </div>

        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/animated404.png')}}" alt="">
            <div class="overlay">
                <a href="{{url("/onlinetutorial/ejercicio2")}}">Animated 404 Text Typography</a>
                <h4>404</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/effect.png')}}" alt="">
            <div class="overlay">
                <a href="{{url("/onlinetutorial/ejercicio3")}}">CSS Creative List Item Hover Effects</a>
                <h4>Listas Con efectos</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/card3D.png')}}" alt="">
            <div class="overlay">
                <a href="{{url("/onlinetutorial/ejercicio4")}}">3D Flip Debit Card</a>
                <h4>Tarjeta</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/perpetual.png')}}" alt="">
            <div class="overlay">
                <a href="{{url("/onlinetutorial/ejercicio6")}}">Pure CSS Perpetual Animation</a>
                <h4>Animation</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/effect2.png')}}" alt="">
            <div class="overlay">
                <a href="{{url("/onlinetutorial/ejercicio7")}}">Efecto2</br>Chrome</a>
                <h4>Animate</h4>
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