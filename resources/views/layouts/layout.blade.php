<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title_base')</title>
    <link rel="stylesheet" href="{{asset('assets/css/layout.css')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    @yield('style')
   </head>
<body>

    <div class="main_box">

    @include('layouts/sidebar')
      
    @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    @yield('script')
</body>
</html>    
