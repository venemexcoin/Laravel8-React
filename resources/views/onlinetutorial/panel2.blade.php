@extends('layouts.layout')

@section('title_base')
            Form & Login
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/onlinepanel.css')}}">
@endsection


@section('content')

<div class="galeria">
    <h1>Galeria Form & Login</h1>
    <div class="linea"></div>
    <div class="contenedor-imagenes">
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/LoginAnimado.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlinetutorial/ejercicio16')}}">AnimacionLogin</a>
                <h4>Login</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/LoginAnimado1.png')}}" alt="">
            <div class="overlay">
                <a href="{{ url('/onlinetutorial/ejercicio17')}}">Popup Login Form</a>
                <h4>Login</h4>
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