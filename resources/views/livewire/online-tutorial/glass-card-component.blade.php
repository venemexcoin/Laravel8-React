@push('title_base')
    Glass Card
@endpush

@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;    
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card span {
            position: absolute;
            top: 0;
            width: 250px;
            height: 250px;
            display: block;
            background: #000;
            border-radius: 50%;
            transform-origin: 125px 0;
            transform: rotate(calc(90deg * var(--i)));
            filter:blur(80px);
            opacity: 0.75;
        }
        .card span:nth-child(1) {
            background: #01b2fe;
        }
        .card span:nth-child(2) {
            background: #ff008c;
        }
        .card span:nth-child(3) {
            background: #ffcd00;
        }
        .card span:nth-child(4) {
            background: #00c456;
        }
        .card .glass {
            position: absolute;
            width: 450px;
            height: 300px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            border: 1px solid #fff;
            overflow: hidden;
            display: flex;
            justify-content: flex-start;
            align-items: flex-end;
        }
        .card .glass::before {
            content:'';
            position: absolute;
            top: 0;
            left: -50%;
            width: 100%;
            height: 100%;
            background: rgba(250, 250, 250, 0.2);
            pointer-events: none;
            /* transform: skewY(345deg); en y se ve exselete */
            transform: skewX(345deg);
        }
        .card .glass h2 {
            padding: 20px;
            font-weight: 400;
            width: 100%;
            background: rgba(250, 250, 250, 0.2);
            color: #333;
            text-align:end;
        }
        .card .glass h2 i {
            font-weight: 300;
            font-size: 0.75em;
            font-style: normal;
        }
        .card .imgBox {
            position: absolute;
            z-index: 100;
            top: -138px;
            left: -217px;
        }
        
        .imgBox img{
            width: 150px;
            border-radius: 50%;
        } 
        .card .imgBox p {
            font-size: 1em;
            margin-left: 10px;
            
        }

    </style>
@endpush
<div>
  <div class="card">
      <span style="--i:0;"></span>
      <span style="--i:1;"></span>
      <span style="--i:2;"></span>
      <span style="--i:3;"></span>
      <div class="imgBox">
          <img src="{{asset('assets/img/galeria/portafolio/img1yo.jpeg')}}" alt="Eduardo imagen">
          <p>Desarrollador Web </p>
      </div>
      <div class="glass">
          <h2>Eduardo Liendo<br><i>+52 55 14 67 44 80</i></h2>
      </div>
  </div>
</div>

@push('scripts')
<script>

</script>
@endpush
