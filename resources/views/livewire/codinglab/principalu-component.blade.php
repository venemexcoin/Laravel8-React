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
           justify-content:center;
           align-items: center;
           min-height: 100vh;
           background: #dcdcdc;
       }
       .container {
           position: relative;
           width: 900px;
           display: grid;
           grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
           grid-gap: 20px;
           padding: 20px;
           margin-bottom: 60px;
       }
       .container .card {
           width: 100%;
           background: #fff;
       }
       .container .card .imgBx {
           position: relative;
           width: 100%;
           height: 310px;
           overflow: hidden;
       }
       .container .card .imgBx img {
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           object-fit: contain;
           transition: 0.5s ease-in-out;
           transform-origin: right;
       }
       .container .card:hover .imgBx img {
          transform: scale(1.5)          
        }
        .action {
            position: absolute;
            top: 10px;
            right: 10px; 
        }
        .action li {
            position: relative;
            list-style: none;
            width: 40px;
            height: 40px;
            background: #fff;
            display: flex;
            justify-content:center;
            align-items: center;
            margin: 4px;
            cursor: pointer;
            transition: transform 0.5s;
            transform: translateX(60px);
        }
        .action li:nth-child(2) {
            transition-delay: 0.15s; 
        }
        .action li:nth-child(3) {
            transition-delay: 0.3s; 
        }
        .container .card:hover .action li {
            transform: translateX(0px);
        }
        .action li:hover {
            background: #ff2020;
            color: #fff;
        }
        .action li span {
            position: absolute;
            right: 50px;
            top: 50%;
            transform: translateY(-50%) translateX(-20px);
            white-space: nowrap;
            padding: 4px 6px;
            background: #fff;
            color: #333;
            font-weight: 500;
            font-size: 12px;
            border-radius: 4px;
            pointer-events: none;
            opacity: 0;
            transition:0.5s         
        }
        .action li:hover span {
            transform: translateY(-50%) translateX(0px);
            opacity: 1;
        }
        .action li span::before {
            content: '';
            position: absolute;
            top: 50%;
            right: -4px;
            width: 8px;
            height: 8px;
            background: #fff;
            transform: translateY(-50%) rotate(45deg);
        }
        .container .card .content {
            padding: 10px;
        }
        .container .card .content .productName a {
           text-decoration: none;
        }
        .container .card .content .productName h3 {
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin: 5px 0
        }
        .container .card .content .price_reting {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container .card .content .price_reting h2{
            font-size: 20px;
            color: #ff2020;
            font-weight: 500;
        }
        .container .card .content .price_reting .fas {
            color: #ffd513;
            cursor: pointer;
        }
        .container .card .content .price_reting .fas.grey {
            color: #ccc;
        }
        .SinDato{
           color: #ff2020;
           text-align: center;
           font-size: 21px;
           font-weight: bold;
        }
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
    </style>

    <div class="container">
     
      @foreach($vistas as $vista)
        <div class="card">
            <div class="imgBx">
                <img src="{{asset('assets/img/Menu')}}/{{$vista->image}}" alt="">
                <ul class="action">
                    <li><i class="fas fa-heart"></i>
                    <span>{{$vista->widget1}}</span>
                    </li>
                    <li><i class="fas fa-shopping-cart"></i>
                    <span>{{$vista->widget2}}</span>
                    </li>
                    <li><i class="far fa-eye"></i>
                    <span>{{$vista->widget3}}</span>
                    </li>
                </ul> 
            </div>
            <div class="content">
                <div class="productName">
                   <a href="{{$vista->ruta}}">
                      <h3>{{$vista->title}}</h3>
                   </a>
                </div>
                <div class="price_reting">
                    <h2></h2>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas grey fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        @endforeach 
           
        </div>
        {{$vistas->links()}}
    </div>

</div>

</div>