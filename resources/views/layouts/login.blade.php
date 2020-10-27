<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title_base')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
    @yield('styles')

</head>
<body>

    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('assets/js/login.js')}}"></script>
    @yield('script')
</body>
</html>    