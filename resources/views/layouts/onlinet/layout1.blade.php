<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/liveTrack.css')}}">
    @livewireStyles
    <title>Track Stuck Ship in Suez Canal</title>
</head>
<body>

    {{$slot}}

    <script src="{{asset('assets/js/onlinetutorial/liveTrack.js')}}"></script>
    <script type="text/javascript" src="https://www.vesselfinder.com/aismap.js"></script>
    @livewireScripts
</body>
</html>