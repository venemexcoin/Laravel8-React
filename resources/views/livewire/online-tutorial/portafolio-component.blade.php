@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
 }
 :root 
 {
     --black: #333;
     --black2: #333;
     --white: #fff;
     --white2: #fff;
     --prueba: rgb(248, 3, 3);
 }
 body {
     font-family:'Poppins', sans-serif;
     overflow-x: hidden;
 }
 
 .container {
     position: relative;
     width: 100%;
 }
 .navigation
 {
     position: fixed;
     width: 300px;
    height: 100%;
    border-right: 1px solid rgba(0,0,0,0.05);
    background: var(--white2);
    display: flex;
    justify-content:center;
    align-items:center;
    overflow: hidden;
    transition: width 0.5s;
 }
 .navigation.active {
    width: 0px;
 }
 .navigation ul {
     position: relative;
     top: 0;
     left: 0;
     width: 100%;
     padding: 20px 40px;
 }
 .navigation ul li {
     position: relative;
     width: 100%;
     list-style:none;
 }
 .navigation ul li a {
     position: relative;
     display: block;
     width: 100%;
     margin: 10px 0;
     white-space: normal;
     display: flex;
     text-transform: uppercase;
     text-decoration: none;
     color: var(--black);
     font-weight: 500;
     letter-spacing: 2px;
     opacity: 0.5;
 }
 .navigation ul li a:hover {
     opacity: 1;
 }
 .main {
     position: absolute;
     width: calc(100% - 300px);
     left: 300px;
     background:var(--white);
     min-height: 100vh;
     transition:width 0.5s,left 0.5s;
     
 }
 .main.active {
    width: calc(100% - 0px);
    left: 0px;
 }
 .main .topbar {
     position: fixed;
     top: 0;
     width: calc(100% - 300px);
     left: 300px;
     background: var(--white2);
     border-bottom: 1px solid rgba(0, 0, 0,0.05);
     height: 60px;
     padding: 0 40px;
     display: flex;
     justify-content:space-between;
     align-items: center;
     z-index: 10000;
     transition: width 0.5s,left 0.5s;
 }
 .main .topbar.active {
    width: calc(100% - 0px);
    left: 0px;
 } 
 .main .topbar .logo {
     color: var(--black);
     font-weight: 700;
     text-decoration: none;
     font-size: 1.4em;
     text-transform: uppercase;
     letter-spacing: 1px; 
 }
 .main .topbar .toggle {
     position: relative;
     width: 60px;
     height: 60px;
     cursor: pointer;
     display: flex;
     justify-content:center;
     align-items: center;
     font-size: 24px;
     color: var(--black);
 }
 section {
     position: relative;
     min-height: 100vh;
 }
 .banner {
     display: flex;
     justify-content: center;
     align-items: center;
     padding: 0px 20px;
 }
 .banner .content {
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
 }
 .banner .imgBx {
     position: relative;
     width: 300px;
    height: 300px;
    overflow: hidden;
    border-radius: 50%;
    margin-bottom:20px;
 }
 .banner .imgBx img {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     object-fit: contain;
 }
 h3 {
     position: relative;
     font-size: 1.4em;
     color: var(--black);
     letter-spacing: 2px;
     text-transform: uppercase;
 }
 p {
     color: #777;
 }
 .btn {
     position: relative;
     display: inline-block;
     padding: 10px 30px;
     background: var(--black);
     color: #fff;
     font-weight: 400px;
     letter-spacing: 1px;
     margin-top: 10px;
     text-decoration: none;
 }
 .socialMedia {
     position: absolute;
     bottom: 20px;
     display: flex;
 }
 .socialMedia li {
     list-style: none;
 }
 .socialMedia li a {
     display: inline-block;
     width: 40px;
     height: 40px;
     background: rgba(0, 0, 0,0.05);
     margin: 5px;
     display: flex;
     justify-content: center;
     align-items: center;
     text-decoration: none;
     color: var(--black);
     font-size: 1.2em;
 }
 .socialMedia li a:hover {
     background: var(--black2);
     color: #fff;
 }
 .adjust {
     position: relative;
     min-height: 100vh;
     padding: 0 40px;
     padding-top: 80px;
     background: var(--white);
     color: var(--black);
     display: inline-block;
 }
 .title {
     width: 100%;
     text-align: center;
 }
 .title h2 {
     position: relative;
     text-transform: uppercase;
     letter-spacing: 2px;
     font-size: 1.2em;
     margin-bottom: 30px;
 }
 .title h2::before {
     content: '';
     position: absolute;
     left: 50%;
     transform: translateX(-50%);
     bottom: -10px;
     width: 50px;
     height: 1px;
     background: var(--black);
 }
 .about .content {
     display: flex;
     justify-content:space-between;
     margin-top: 40px;
 }
 .about .content .textBox {
     width: 49%;
     min-width: 49%;
 }
 .about .content .imgBx {
     margin-left: 40px;
 }
 .about .content .imgBx {
     margin-left: 40px;
 }
</style>
@endpush
<div>
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li><a href="#banner">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#"">Testimonials</a></li>
                <li><a href="#"">Contact</a></li>
            </ul>
        </div>
            <div class="main">
                <div class="topbar">
                    <a href="{{route('online.dataporta')}}" class="logo">Portafolio</a>
                    <div class="toggle">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>
                {{-- banner --}}
                <section class="banner" id="banner">
                    <div class="content">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/user.jpg')}}" alt="">
                        </div>
                        <h3>Muhammad Irshad</h3>
                        <p>I'm a Creative Front End Web Developer.</p>
                        <a href="#" class="btn">Download My CV</a>
                        <ul class="socialMedia">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </section>

               <section class="about" id="about">
                    <div class="title">
                        <h2>About</h2>
                    </div>
               </section>
            </div>
    </div>
</div>
@push('scripts')
<script>
    let toggle = document.querySelector('.toggle');
    let topbar = document.querySelector('.topbar');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function() {
        toggle.classList.toggle('active');
        topbar.classList.toggle('active');
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }
</script>
@endpush



