<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta html-equiv="refresh" content="1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/css/codinglab/principal.css')}}">
    <title>@stack('title_base')</title>
    
    @livewireStyles

    @stack('styles')
</head>
<body>

    @livewire('codinglab.menuprincipal-component')
    
    <div class="contenedor">
        <div class="content">
            <h3 class="title">CodingLab Menu</h3>
            {{$slot}}
        </div>
    </div>

    @stack('scripts')
    
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>

{{-- usamos una libreia extena de javaScrip en esta direccion 
    https://micku7zu.github.io/vanilla-tilt.js/ --}}
    