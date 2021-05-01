<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_base')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/layout3.css')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    @yield('styles')
</head>
<body>

    <div class="page" id="sidebar">
        <span class="menu_toggle">
            <i class="menu_open fa fa-bars lg"></i>
            <i class="menu_close fas fa-times"></i>
        </span>
        <ul class="menu_items">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
       
        
        <main class="content">
            <div class="content_inner">
                <h1>Mené de Diseños Variados</h1>
                <ul class="layout3_ul">
                    <li><a href="{{url("/varios/ejercicio1")}}">CSS Card Hover Animation</a></li>
                    <li><a href="{{url("/varios/ejercicio2")}}">Shining text Animation</a></li>
                    <li><a href="{{url("/varios/ejercicio3")}}">iOS Progress Bar Amimacion</a></li>
                    <li><a href="{{url("/varios/ejercicio4")}}">Como Crear un indicador de carga Web</a></li>
                    <li><a href="{{url("/varios/ejercicio5")}}">Preloader con HTML</a></li>
                    <li><a href="{{url("/varios/ejercicio6")}}">Munu Full SCREEN vertical</a></li>
                    <li><a href="{{url("/varios/ejercicio7")}}">Base de datos Clientes</a></li>
                    <li><a href="{{route("javascript.home")}}">Practicas de Javascript</a></li>
                </ul>
        </main>
    </div> 
        
    
    <script src="{{asset('assets/js/layout3.js')}}"></script>
    @yield('scripts')
</body>
</html>