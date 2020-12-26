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

      <input type="checkbox" id="check">
      <div class="btn_one">
        <label for="check">
          <i class="fas fa-bars"></i>
        </label>
        
      </div>
      <div class="sidebar_menu">
        <div class="logo">
          <a href="#">ChamocellDEV</a>
            </div>
          <div class="btn_two">
            <label for="check">
              <i class="fas fa-times"></i>
            </label>
          </div>
        <div class="menu">
          <ul>
            <li><i class="fas fa-home"></i>
            <a href="{{ url('/')}}">Home</a>
            </li>
            <li>
              <i class="fas fa-link"></i>
              <a href="{{ url('/codinglab')}}">CodingLab</a>
            </li>
            <li>
              <i class="fas fa-stream"></i>
              <a href="#">Overview</a>
            </li>
            <li>
              <i class="fas fa-calendar-week"></i>
              <a href="#">Events</a>
            </li>
            <li>
              <i class="fas fa-question-circle"></i>
              <a href="#">About</a>
            </li>
            <li>
              <i class="fas fa-sliders-h"></i>
              <a href="#">Services</a>
            </li>
            <li>
              <i class="fas fa-phone-volume"></i>
              <a href="#">Contact</a>
            </li>
            <li>
            <i class="far fa-comments"></i>
              <a href="#">Feedback</a>
            </li>
          </ul>
        </div>
        <div class="social_media">
          <ul>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </ul>
        </div>
      </div>
      
    @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    @yield('script')
</body>
</html>    
