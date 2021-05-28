<div>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
         * {
             margin: 0;
             padding: 0;
             box-sizing:border-box;
             font-family: 'Poppins', sans-serif;
         }
         body {
             display: flex;
             justify-content:center;
             align-items: center;
             min-height: 100vh;
             background: linear-gradient(#2b1055,#7597de);
         }
         section {
             width: 100%;
             height: 100vh;
             display: flex;
             justify-content:center;
             align-items: center;
            overflow: hidden;
         }
        section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            pointer-events: none;
        }
        section img#moon {
            mix-blend-mode: screen;
        }
    }
        section img#stars {
            height: 100%;
            object-fit: cover
        }
        section img#mountains_behind {
            bottom: 0;
            top: initial;
        }
        section img#mountains_front {
            bottom: 0;
            top: initial;
            z-index: 1000;
        }
        #text {
            position: absolute;
            color: #fff;
            font-size: 8vw;
            font-weight: 200;
        }
        #text span{
            font-weight: 700; 
        }
        #btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            margin-top: 80px; 
            text-decoration: none;
            display: inline-block;
            padding: 8px 50px;
            background:#fff;
            border-radius: 40px;
            font-size:1.4em;
            color: #2b1055;
            z-index: 10000;
        }

    </style>
    <section class="sectionf">
        <img src="{{asset('assets/img/galeria/timelineanimations/stars.png')}}" id="stars">
        <img src="{{asset('assets/img/galeria/timelineanimations/moon.png')}}" id="moon">
        <img src="{{asset('assets/img/galeria/timelineanimations/mountains_behind.png')}}" id="mountains_behind">
        <h2 id="text">Anime<span>JS</span></h2>
        <a href="#" id="btn">Play</a>
        <img src="{{asset('assets/img/galeria/timelineanimations/mountains_front.png')}}" id="mountains_front">
    </section>

</div>

@push('scripts')
<script>
const btc = document.getElementById('btn')

    var animation = anime.timeline({});

    animation
    .add({
        targets: 'btn', 
        top: '100px',
        duration: 500,
        easing: ''
    })

</script>
@endpush
