<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SemiTransparent #D Flip Debit Card Design</title>
    <link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/DebitCard.css')}}">
</head>
<body>
    <section>
        <div class="card">
            <div class="face front">
                <h3 class="debit">Debit Card</h3>
                <h3 class="bank">Bank Name</h3>
                <img src="{{asset('assets/img/galeria/chip/chip.png')}}" class="chip">
                <h3 class="number">0123 4567 8901 2345</h3>
                <h5 class="valid"><span>Valid<br>thru</span><span>10/23</span></h5>
                <h5 class="cardHolder">Muhammad Irshad</h5>
            </div>
            <div class="face back">
                <div class="blackbar"></div>
                <div class="ccvtext">
                    <h5>Autorized Signature-not valid unless signed</h5>
                    <div class="whiteBar"></div>
                    <div class="ccv">123</div>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Numquam modi alias autem fuga dignissimos labore ipsa, 
                        obcaecati unde adipisci, cupiditate ex nostrum corporis 
                        deleniti id consequuntur necessitatibus provident, vel ad!
                        Ex minima sunt suscipit velit adipisci error quae, ratione 
                        officiis quibusdam sequi voluptatem voluptates assumenda 
                        consequatur ea maiores tempora magnam reiciendis natus? 
                        Temporibus quia nesciunt facere! Dignissimos repellat tempora 
                        voluptatem reiciendis in. Tempore saepe architecto in doloremque, 
                        reiciendis hic.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>