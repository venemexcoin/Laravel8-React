@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    * {
        marging: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Poppins', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: radial-gradient(#777,#222);
    }
    .card {
        position: relative;
        width: 340px;
        height: 450px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden; 
    }
    .circle {
        position: absolute;
        top: -190px;
        left: 50%;
        transform: translate(-50%);
        width: 500px;
        height: 500px;
        background: #333;
        clip-path: circle();
    }
    .circle::before {
        content: "";
        position: absolute;
        top: -8px;
        left: -15px;
        width: 100%;
        height: 100%;
        background: transparent;
        box-shadow: 0 0 0 20px rgba(255, 0, 0,.5);
        border-radius: 50%;
        z-index: 1000;
        pointer-events: none;
    }
    .circle .imgBx {
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 340px;
        height: 310px;
        background: #ff0;
    }
    .circle .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height:100%;
        object-fit:cover;
        transition: 0.5s;
        transform-origin: top; 
    }
    .circle .imgBx:hover img {
        transform: scale(1.5);
    }
    .content {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 170px;
        padding: 20px 30px;
    }
    .fa-linkedin {
        background: #0077b5;
        color: #fff;
        padding: 2px 4px;
        border-radius:2px;
    }
    .content h3 {
        font-size: 1.4em;
        color: #333;
        margin-top: 7px; 
        margin-bottom:2px;
    }
    .textIcon {
        display: flex;
        justify-content: space-between;
    
    }
    .textIcon h4 {
        font-weight: 400;
        color: #e91e63;
    }
    .textIcon a {
        margin-top: 25px;
    }
    .textIcon .fa {
        color: #e91e63;
    }
</style>
@endpush
<div>
    <div class="card">
        <div class="circle">
            <div class="imgBx">
                <img src="{{asset('assets/img/galeria/cardDesign/img1.jpg')}}" alt="">
            </div>
        </div>
        <div class="content">
            <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <h3>Sophia Anderson</h3>
            <div class="textIcon">
                <h4>Frontent Developer</h4>
                <a href="#">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    
</div>
