<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/navigationDrawer.css')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ url('/onlinetutorial')}}">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Home</span>    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user" aria-hidden="true"></i></span>
                        <span class="title">Profile</span>    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="far fa-comment" aria-hidden="true"></i></span>
                        <span class="title">Message</span>    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="far fa-question-circle" aria-hidden="true"></i></span>
                        <span class="title">Help</span>    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog"aria-hidden="true"></i></span>
                        <span class="title">Setting</span>    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-lock" aria-hidden="true"></i></span>
                        <span class="title">Password</span>    
                    </a>
                </li>
                <li>
                    <a href="{{ url('panel4')}}">
                        <span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span>
                        <span class="title">Sign Out</span>    
                    </a>
                </li>
            </ul>
        </div>
        <div class="toggle"></div>
    </div>
    

    <script src="{{asset('assets/js/onlinetutorial/navigationDrawer.js')}}"></script>
</body>
</html>