<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_base')</title>
    <link rel="stylesheet" href="{{asset('assets/css/varios/screen.css')}}">
    @yield('style')
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="navigation">
        <div id="hamburger-content">
            <img src="{{asset('assets/img/galeria/screen/icoms/menu.svg')}}" alt="">
        </div>
    </div>
    <div id='menu' class="menu">
        <nav>
            <ul>
                <li>
                    <a href="{{url('/')}}" class="home">home</a>
                </li>
                <li>
                    <a href="{{url('/api1')}}">APIS</a>
                </li>
                <li>
                    <a href="#">about us</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>        
        

        <div id="close">
            <img src="{{asset('assets/img/galeria/screen/icoms/close.svg')}}" alt="">
        </div>
        
    </div>
    <br>
    <br>
    <br>
    <br>
     <div class="contenedor-pricipal">
      @yield('contenido')
     </div>

     
     <script src="{{asset('assets/js/varios/screen.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>
    @yield('script')
</body>
</html>

   
  