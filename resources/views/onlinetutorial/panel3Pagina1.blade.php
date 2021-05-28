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
            <img src="{{ asset('assets/img/galeria/oxygen.png
            ')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.oxygen')}}">oxygen</a>
                <h4>Red Social</h4>
            </div>
        </div>

        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/ContactUsForm.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.contact')}}">Responsive Contact</a>
                <h4>formulario</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/cssAnimate.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.cssanimation')}}">CSS Animations</a>
                <h4>css efectos</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Tarjeta</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Animation</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Animate</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Animate</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#"></a>
                <h4>Animaciones</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/disponible.png')}}" alt="">
            <div class="overlay">
                <a href="#">Visualizas</a>
                <h4>Animaciones</h4>
            </div>
        </div>
        <!-- <div class="imagen">
            <img src="img/1 (2).jpg" alt="">
        </div> -->
    </div>
    <!-- paginacion  --->
        

    <!-- fin paginacion --->
</div>





@endsection