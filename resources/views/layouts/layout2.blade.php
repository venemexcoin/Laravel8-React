<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_base')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/layout2.css')}}">
    @yield('styles')
</head>
<body>
    
</head>
<body>
<header class="header">
<div class="container">
<div class="btn-menu">
<label for="btn-menu">☰</label>
</div>
<div class="logo">
<h1>ChamocelDeveloper</h1>
</div>

</div>
</header>
<div class="capa"></div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
<div class="cont-menu">
<nav>
<a href="{{url('/')}}">Home</a>
<a href="{{url('/alexCG')}}">Alex CG Design</a>
<a href="#">Suscribirse</a>
<a href="#">Facebook</a>
<a href="#">Youtube</a>
<a href="#">Instagram</a>
</nav>
<label for="btn-menu">✖️</label>
</div>
</div>

    @yield('content')    

    <script src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>