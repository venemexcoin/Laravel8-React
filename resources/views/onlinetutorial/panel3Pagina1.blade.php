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
            <img src="{{ asset('assets/img/galeria/Capitana.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.onlyimage')}}">CSS only Comparison</a>
                <h4>Tarjeta</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/profilecard.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.profilecard')}}">Profile Card Hover effect</a>
                <h4>Animation</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/cardDesign.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.carddesing')}}">card Desing using</a>
                <h4>Animate</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/checkout.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.checkout')}}">Tarjeta Ckeckout</a>
                <h4>Animate</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/cornertext.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.cornertext')}}">Corner Text Parallax</a>
                <h4>Animate</h4>
            </div>
        </div>
        <div class="imagen">
            <img src="{{ asset('assets/img/galeria/CardPersonal.png')}}" alt="">
            <div class="overlay">
                <a href="{{route('online.glasscard')}}">Gloss Card</a>
                <h4>Animated</h4>
            </div>
        </div>
        <!-- <div class="imagen">
            <img src="img/1 (2).jpg" alt="">
        </div> -->
          <!-- paginacion  --->
     @livewire('online-tutorial.paginacion-component')
     <!-- fin paginacion --->  
    </div>
    <!-- paginacion  --->
     

    <!-- fin paginacion --->
</div>





@endsection