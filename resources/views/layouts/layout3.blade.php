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
            <i class="menu_close fa fa-times lg"></i>
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
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                </ul>
        </main>

    </div> 
        @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('assets/js/layout3.js')}}"></script>
    @yield('scripts')
</body>
</html>