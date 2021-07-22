<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/base1.css')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    @stack('styles')
    @livewireStyles
</head>
<body>

  
    
    {{$slot}}


    <script src="{{asset('assets/js/onlinetutorial/base1.js')}}"></script>
    @livewireScripts
    @stack('scripts')
</body>
</html>