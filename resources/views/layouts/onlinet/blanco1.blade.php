<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta html-equiv="refresh" content="1">
    
    <title>Blanco</title>
      
    @livewireStyles

    @stack('styles')
</head>
<body>
    
    {{$slot}}

    
    @stack('scripts')
    
    <script src="{{asset('assets/js/anime.min.js')}}"></script>
    @livewireScripts
</body>
</html>