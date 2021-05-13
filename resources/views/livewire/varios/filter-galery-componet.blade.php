<div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif; 
        }
        section {
            padding: 20px;
            width: 100%;
            display: flex;
            justify-content:center;
            align-items: center;
            flex-direction: column;
            margin: 40px auto;
        }
        section ul {
            display: flex;
            justify-content:center;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        section ul li {
            list-style: none;
            background:#eee;
            padding: 12px 20px;
            margin: 5px;
            letter-spacing:1px;
            cursor: pointer;
        }
        section ul li.active {
            background: #03a9f4;
            color: #fff;
        }
        .product {
            display: flex;
            justify-content:center;
            align-items: center;
            flex-wrap: wrap;
        }
        .product .itemBox{
            position: relative;
            width: 200px;
            height: 200px;
            margin: 5px;
            display: block;
        }
        .product .itemBox.hide {
            display: none;
        }
        .product .itemBox img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
    
            <section>
                <ul>
                    <li class="list active" data-filter="all">All</li>
                    <li class="list" data-filter="mobile">Mobile</li>
                    <li class="list" data-filter="camera">Camera</li>
                    <li class="list" data-filter="watch">Watch</li>
                    <li class="list" data-filter="shoe">Shoe</li>
                    <li class="list" data-filter="headphone">Headephone</li>
                </ul>
                <div class="product">
                <div class="itemBox" data-item="mobile"><img src="{{asset   ('assets/img/galeria/ProductFilter/mobile1.jpg')}}" alt=""></div>

                <div class="itemBox" data-item="camera"><img src="{{asset('assets/img/galeria/ProductFilter/camera1.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="watch"><img src="{{asset('assets/img/galeria/ProductFilter/watch1.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="shoe"><img src="{{asset('assets/img/galeria/ProductFilter/shoe1.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="headphone"><img src="{{asset('assets/img/galeria/ProductFilter/headphone1.jpg')}}" alt=""></div>
        
                <div class="itemBox" data-item="mobile"><img src="{{asset   ('assets/img/galeria/ProductFilter/mobile2.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="camera"><img src="{{asset('assets/img/galeria/ProductFilter/camera2.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="watch"><img src="{{asset('assets/img/galeria/ProductFilter/watch2.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="shoe"><img src="{{asset('assets/img/galeria/ProductFilter/shoe2.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="headphone"><img src="{{asset('assets/img/galeria/ProductFilter/headphone2.jpg')}}" alt=""></div>
        
                <div class="itemBox" data-item="mobile"><img src="{{asset   ('assets/img/galeria/ProductFilter/mobile3.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="camera"><img src="{{asset('assets/img/galeria/ProductFilter/camera3.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="watch"><img src="{{asset('assets/img/galeria/ProductFilter/watch3.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="shoe"><img src="{{asset('assets/img/galeria/ProductFilter/shoe3.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="headphone"><img src="{{asset('assets/img/galeria/ProductFilter/headphone3.jpg')}}" alt=""></div>
        
                <div class="itemBox" data-item="mobile"><img src="{{asset   ('assets/img/galeria/ProductFilter/mobile4.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="watch"><img src="{{asset('assets/img/galeria/ProductFilter/watch4.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="shoe"><img src="{{asset('assets/img/galeria/ProductFilter/shoe4.jpg')}}" alt=""></div>
                <div class="itemBox" data-item="headphone"><img src="{{asset('assets/img/galeria/ProductFilter/headphone4.jpg')}}" alt=""></div>
               
                <div class="itemBox" data-item="mobile"><img src="{{asset   ('assets/img/galeria/ProductFilter/mobile5.jpg')}}" alt=""></div>
                
            </div>
            </section>    
            
            <script>
                let list = document.querySelectorAll('.list');
                let itemBox = document.querySelectorAll('.itemBox');

                for (let i = 0; i <list.length; i++) {
                    list[i].addEventListener('click', function(){
                        for(let j = 0; j <list.length; j++) {
                            list[j].classList.remove('active');
                        }
                        this.classList.add('active');

                        let dataFilter = this.getAttribute('data-filter');

                        for(let k = 0; k <itemBox.length; k++) {
                            itemBox[k].classList.remove('active');
                            itemBox[k].classList.add('hide');

                            if(itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
                                itemBox[k].classList.remove('hide');
                                itemBox[k].classList.add('active');
                            }
                        }
                    })
                }
            </script>
    </div>

