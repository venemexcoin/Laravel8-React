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
            <img src="{{ asset('assets/img/galeria/Navnar1.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlinetutorial/ejercicio15')}}">Navigation Drawer</a>
                <h4>NavBAr</h4>
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