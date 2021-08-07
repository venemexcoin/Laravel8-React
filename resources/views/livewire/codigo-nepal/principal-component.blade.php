<div>
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
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #2e557c;
            transition: 0.5s;
        }
        
        .container {
            position: relative;
            width: 1000px;
            height: 400px;
            margin-bottom:200px;
        }
        .container .card {
            position: absolute;
            top: calc(50% - 200px);
            left: 50%;
            width: 300px;
            height: 400px;
            background: #fff;
            border-radius: 10px;
            transform: translateX(-50%) translateY(calc(50px * var(--i))) rotate(40deg) skew(-20deg,-10deg) scale(0.6);
            box-sizing: 25px 25px 100px rgba(0,0,0,0.2);
            z-index: calc(-1 * var(--i));
            transition: 0.5s;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container .card:nth-child(2) {
            opacity: 0.8;
        }
        .container .card:nth-child(3) {
            opacity: 0.6;
        }
        .container:hover .card {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            opacity: 1;
            transform: translateX(calc(-50% + calc(350px * var(--i)))) translateY(-50%) rotate(0deg) skew(0deg,0deg) scale(1);
            border-radius: 13px;
            background: #e0e0e0;
            box-shadow:  11px -11px 2px #d9d9d9,
             -11px 11px 2px #e7e7e7;
        }
        .container .card .content {
            position: relative;
            padding: 25px;
            color: #333;
            opacity: 0;
            transition: 0.5s
            transsform: traslateY(50px);
        }
        .container:hover .card .content {
            opacity: 1;
            transition-delay: calc(0.2s * var(--j)); 
            transform: translateY(0px);
        }

        @media (max-width: 991px){
            body::before {
                clip-path: circle(0px at center);
            }
            .container{
                width: 100%;
                height: initial;
                padding: 20px;
                display: flex;
                justify-content:center;
                align-items: center;
                flex-wrap: wrap;
            }
            .container .card {
                position: relative;
                top: initial;
                left: initial;
                transform: initial;
                margin: 20px;
                opacity: 1 !important;
            }
            .container:hover,
            .container:hover .card {
                position: relative;
                top: initial;
                left: initial;
                transform: initial;
            }
            .container .card .content {
                opacity: 1;
            }
             
        }
    </style>

  
    <div class="container">
        <div class="card" style="--i:-1;">
            <div class="content" style="--j:1;">
                <h2>Captcha in JavaScript</h2> 
                <a href="{{route('codigonepal.capcha')}}"> <img src="{{asset('assets/img/galeria/Captcha.png')}}" alt="" width="220"></a>
            </div>
        </div>
        <div class="card" style="--i:0;">
            <div class="content" style="--j:2;">
                <h2>Draggable Div Element</h2>
                <a href="{{route('codigonepal.draggable')}}"> <img src="{{asset('assets/img/galeria/DraggableDiv.png')}}" alt="" width="220"></a>
            </div>
        </div>
        <div class="card" style="--i:1;">
            <div class="content" style="--j:3;">
                <h2>Hot to Get udrt Location No Terminado</h2>
                <a href="{{route('codigonepal.userlocation')}}"> <img src="{{asset('assets/img/galeria/Geolocation.png')}}" alt="" width="220"></a>
            </div>
        </div>
        
    </div>

    
</div>
