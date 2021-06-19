@extends('layouts.layout')

@section('title_base')
    Botones & Social
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/onlinepanel.css')}}">
@endsection


@section('content')

<div class="galeria">
    <h1>Galeria Paginas Completas</h1>
    <div class="linea"></div>
    <div class="contenedor-imagenes">
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/scrollToSeeMagic.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlinetutorial/ejercicio10')}}">CSS3 transform </a>
                <h4>Boton</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/reloj.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlinetutorial/ejercicio13')}}">Glassmorphism</a>
                <h4>Animacion</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/navegacion.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlineTutorial/livetrack')}}">Rutas de Navigacion</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/css3d.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlineTutorial/Css3D')}}">CSS 3D Text Animate</a>
                <h4>Animacion</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/ResponsiveNavbar.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.responav')}}">responsive Navbar</a>
                <h4>Complit</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/start5.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.starskills')}}">5 Start Skills</a>
                <h4>Animacion</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.timeline')}}">Timeline Animacions</a>
                <h4>Animacion</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/google.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.google')}}">Make Working Google Search</a>
                <h4>Red Social</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.ecomer')}}">Responsive eCommerce</a>
                <h4>eComer</h4>
            </div>
        </div>
        <!-- <div class="imagen">
            <img src="img/1 (2).jpg" alt="">
        </div> -->
    </div>
</div>
</div>



@endsection