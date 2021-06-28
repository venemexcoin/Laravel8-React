@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Josefin Sans', sans-serif;
    }
    .body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .container {
        position: relative;
        width: 1280px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    .container .cards {
        position: relative;
        width: 240px;
        height: 359px;
        background: linear-gradient(#2196f3, #2196f3 30%,#1d3548 30%,#1d3548);
        margin: 10px;
        border-radius: 20px;
        overflow: hidden;
    }
    .container .cards .imgBx {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: 0.5s;
        z-index: 100000;
        border-radius: 20px;
        overflow: hidden;
        transform-origin:top;
        
    }
    .container .cards:hover .imgBx
    {
        transform: translateY(30px) scale(0.5);
    }
    .container .cards .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .container .cards .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content:center;
        align-items: flex-end;
        border-bottom: 30px;
        transform: translateY(100%);
        transition:0.5s;
    }
    .container .cards:hover .content {
        transform: translateY(0);

    }
    .container .cards .content .details{
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
        text-align:center;
    }
    .container .cards .content .details h2{
        color: #fff;
        font-size: 1.2em;
        font-weight: 500;
    }
    .container .cards .content .details h2 span{
        font-size: 0.8em;
        font-weight: 400;
        color: #03a9f4;
    }
    .social_icons {
        position: relative;
        display: flex;
        margin: 5px 0px 15px 0px;
    }
    .social_icons li {
        list-style: none;
        margin: 4px;
    }
    .social_icons li a {
        width: 45px;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #294d69;
        border-radius: 50%;
        font-size: 1.5em;
        color: #fff;
        text-decoration: none;
        transition: 0.5s;
    }
    .social_icons li a:hover {
        transform: rotate(360deg);
        background: #03a9f4;
    }
</style>
@endPush
<div>
    <div class="body">
    <div class="container">
        <div class="cards">
            <div class="imgBx">
                <img src="{{asset('assets/img/galeria/profilecard/img1.jpg')}}" alt=""></div>
                <div class="content">
                    <div class="details">
                        <h2>Maria Paola<br>
                                <span>Senior Designer</span>
                            </h2>
                            <ul class="social_icons">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <div class="imgBx">
                        <img src="{{asset('assets/img/galeria/profilecard/img2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h2>Maria Paola<br>
                                        <span>Senior Designer</span>
                                    </h2>
                                    <ul class="social_icons">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cards">
                            <div class="imgBx">
                                <img src="{{asset('assets/img/galeria/profilecard/img3.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h2>Maria Paola<br>
                                                <span>Senior Designer</span>
                                            </h2>
                                            <ul class="social_icons">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="cards">
                                    <div class="imgBx">
                                        <img src="{{asset('assets/img/galeria/profilecard/img4.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <div class="details">
                                                <h2>Maria Paola<br>
                                                        <span>Senior Designer</span>
                                                    </h2>
                                                    <ul class="social_icons">
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>