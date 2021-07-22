<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blanco</title>
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body {
                display: flex;
                justify-content:left;
                align-items: top;
                min-height: 100vh;
                background: #fff;
                overflow: hidden;
                padding: 10px
            }
            .navigation{
                position: relative;
                width: 50px;
                height:50px;
                background: #fff;
                transition: width 0.5s, height 0.5s;
                transition-delay: 0s,0.75s;
                z-index: 100000;
                border-radius: 4px;
                overflow: hidden;
            }
            .navigation.active{
                width: 250px;
                height: 350px;
                transition:  height 0.5s, width 0.5s;
                transition-delay: 0s,0.75s;
            }
            .navigation .toggle{
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 50px;
                display: flex;
                justify-content:flex-end;
                align-items: center;
                background: #40ff99;
                transition: 0.5s;
                cursor: pointer;
            }
            .navigation .toggle.active {
                background: #2196f3;
            }
            .navigation .toggle::before {
                content: '+';
                position: absolute;
                font-size: 2em;
                display: flex;
                justify-content:center;
                align-items: center;
                width: 50px;
                height: 50px;
                color: #fff;
                font-weight: 400;
                transition:0.5s;
            }
            .navigation .toggle.active::before{
                transform: rotate(315deg);
            }
            .navigation ul {
                position: absolute;
                left: 0;
                width: 100%;
            }
            .navigation ul li {
                position: relative;
                list-style: none;
                width: 100%;
            }
            .navigation ul li:hover {
                background: #03a9f4;
            }
            .navigation ul li a{
                position: relative;
                display: block;
                width: 100%;
                display: flex;
                text-decoration: none;
                color: #154367;
            }
            .navigation ul li a .icon {
                position: relative;
                display: block;
                min-width: 50px;
                text-align: center;
                line-height: 50px;
            }
            .navigation ul li a .icon .fa {
                font-size:24px;
                color: #154367;
            }
            .navigation ul li a .title {
                position: relative;
                display: block;
                line-height: 50px;
                text-align: start;
                white-space: nowrap;
            }
            .navigation ul li:hover a .icon .fas,
            .navigation ul li:hover a .icon .far,
            .navigation ul li:hover a .title {
                color: #fff;
            }
        
            .containerBase.active {
                display: none;
            }
            
        </style>

    @stack('styles')
</head>
<body>
    <div class="navigation">
        <div class="toggle"></div>
        <ul>
            <li>
                <a href="{{route('varios.index')}}">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="title">HOME</span>
                </a>
            </li>
            <li>
             <a href="">
                 <span class="icon"><i class="fas fa-user"></i></span>
                 <span class="title">Profile</span>
             </a>
         </li>
         <li>
             <a href="">
                 <span class="icon"><i class="far fa-comments"></i></span>
                 <span class="title">Messages</span>
             </a>
         </li>
         <li>
             <a href="">
                 <span class="icon"><i class="fas fa-cog"></i></span>
                 <span class="title">Settings</span>
             </a>
         </li>
         <li>
             <a href="">
                 <span class="icon"><i class="fas fa-lock"></i></span>
                 <span class="title">Password</span>
             </a>
         </li>
         <li>
             <a href="">
                 <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                 <span class="title">Sing Out</span>
             </a>
         </li>
        </ul>
     </div>

    <div class="containerBase">
        {{$slot}}

    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
      const navigation = document.querySelector(".navigation");
    const containerBase = document.querySelector(".containerBase");
    document.querySelector('.toggle').onclick = function() {
        // on double click = ondblclick
        this.classList.toggle('active');
        navigation.classList.toggle('active');
        containerBase.classList.toggle('active');
    }

    $( function() {
    $( ".navigation" ).draggable();
  } );
  </script>
    @stack('scripts')
</body>
</html>
