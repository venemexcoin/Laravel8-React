<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="neumorphism" content="menu lateral trasparente">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neumorphism</title>
    <link rel="stylesheet" href="{{asset('assets/css/codinglab/neumorphism.css')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    @yield('style')
    
</head>
<body>
    <div class="main_box">

    <input type="checkbox" id="check">
    <label class="button bars" for="check"><i class="fas fa-bars"></i></label>
     <div class="side-bar">
         <div class="title">
             <div class="logo">ChamocellDev</div>
             <label class="button cancel" for="check"><i class="fas fa-times"></i></label>
         </div>

         
         <ul>
             <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home</a></li>
             <li><a href="{{url('/bluuweb')}}"><i class="fas fa-link"></i>Bluuweb</a></li>
             <li><a href="#"><i class="fas fa-stream"></i>Indefinido</a></li>
             <li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
             <li><a href="#"><i class="fas fa-question-circle"></i>About</a></li>
             <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
             <li><a href="#"><i class="fas fa-phone-volume"></i>Contact</a></li>
             <li><a href="#"><i class="fas fa-comments"></i>Feedback</a></li>
         </ul>
         <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-github"></i></a>
             <a href="#"><i class="fab fa-vk"></i></a>
         </div>        
     </div>
    </div>
    @yield('content')

    
     
    

     <script src="{{asset('js/app.js')}}"></script>
    @yield('script')
    
</body>
</html>