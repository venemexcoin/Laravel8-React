@push('title_base')
    Portafolio
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     scroll-behavior: smooth;
 }
 :root 
 {
     --black: #333;
     --black2: #333;
     --white: #fff;
     --white2: #fff;
     --prueba: rgb(248, 3, 3);
 }

 .dark 
 {
     --black: #fff;
     --black2: #444;
     --white: #333;
     --white2: #444;
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
    transition: width 0.5s, left 0.5s;
 }
 .dark .navigation {
    border-right: 1px solid rgba(0,0,0,0.5);
 }
 .navigation.active {
    width: 0;
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
    left: 0;
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

 .dark .main .topbar {
    border-bottom: 1px solid rgba(0, 0, 0,0.5);
 }
 .main .topbar.active {
    width: calc(100% - 0px);
    left: 0;
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
 .dark p {
     color: var(--black);
 }
 .btn {
     position: relative;
     display: inline-block;
     padding: 10px 30px;
     background: var(--black2);
     color: #fff;
     font-weight: 400;
     letter-spacing: 1px;
     margin-top: 10px;
     text-decoration: none;
 }
 .dark .btn:hover {
     background: #2196f3;
 }
 .socialMedia {
     position: absolute;
     bottom: 0px;
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
 .dark .socialMedia li a:hover {
     background: #2196f3;
 }
 .socialMedia li a:hover {
     background: var(--black2);
     color: #fff;
 }
 .adjust {
     position: relative;
     min-height: 100vh;
     width: 100%;
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
     margin-left: 50px;
 }
 .about .content .imgBx {
     margin-left: 4px;
 }
 .about .content .imgBx img {
     max-width: 100%;
 }
 .services .content {
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     grid-gap: 20px;
     margin: 40px 0;
 }
 .services .content .serviceBox {
     border: 1px solid rgba(0, 0, 0, 1);
     padding: 50px 20px;
     display: flex;
     background: var(--white2);
     justify-content:center;
     align-items: center;
     flex-direction: column;
 }
 .dark .services .content .serviceBox:hover {
     background: #2196f3;
 }
 .services .content .serviceBox img {
     max-width: 50px;
 }
 .dark .services .content .serviceBox img {

 }
 .services .content .serviceBox h2 {
     font-size: 1.1em;
     margin-top: 20px;
     margin-bottom: 10px;
     font-weight: 600;
     color: var(--black);
     text-align: center;
     letter-spacing: 2px;
    text-transform: uppercase;
 }
 .services .content .serviceBox p {
     text-align: center;
 }
 .projects .content 
 {
    display: grid;
     grid-template-columns: repeat(3, 1fr);
     grid-gap: 20px;
     margin: 40px 0;
 }
 .projects .content .workBx {
     position: relative;
     width: 100%;
     height: 300px;
     overflow: hidden;
 }
 .projects .content .workBx .img {
     position: relative;
     width: 100%;
     height: 100%;
     transform: translateY(0);
     transition: 0.5s ease-in-out;
 } 
 .projects .content .workBx:hover .imgBx {
    transform: translateY(-100%);
 }
 .projects .content .workBx .imgBx  img {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     object-fit: cover;
 }
 .projects .content .workBx .textBx {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background: var(--black);
     display: flex;
     justify-content: center;
     align-items: center;
     transform: translateY(100%);
     transition: 0.5s ease-in-out;
 }
 .dark .projects .content .workBx .textBx {
     background: #444;
 }
 .projects .content .workBx:hover .textBx {
    transform: translateY(0);
 }
 .projects .content .workBx .textBx h3 {
     Color: #fff;
     font-size: 1em;
 }
 .tstimonials .content {
    display: grid;
     grid-template-columns: repeat(2,1fr);
     grid-gap: 20px;
     margin: 40px 0;
 }
.tstimonials .content .testimonialsBox{
     background: var(--white2);
     border: 1px solid rgba(0,0,0, 0.05);
     box-shadow: 0 5px 15px rgba(0, 0, 0,0.05);
     padding: 20px;
 }
 .dark .tstimonials .content .testimonialsBox:hover {
     background: #2196f3;
 }
 .tstimonials .content .testimonialsBox .imgBx {
     position: relative;
     width: 80px;
     height: 80px;
     margin-bottom: 10px;
 }
 .tstimonials .content .testimonialsBox .imgBx img {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     object-fit: cover;
 }
 .tstimonials .content .testimonialsBox p {
     font-style: italic;
 }
 .tstimonials .content .testimonialsBox h4 {
     text-align: right;
     margin-top: 20px;
     text-transform: uppercase;
     letter-spacing: 2px;
     font-size:1em;
     color: var(--black);
     line-height: 1.2em;
     font-weight: 600;
     border-right: 4px solid var(--black);
     padding-right:10px; 
 }
 .tstimonials .content .testimonialsBox h4 span {
     text-transform: initial;
     color: #aaa;
     letter-spacing: 1px;
     font-weight: 300;
     font-size: 0.7em;
 }
 .contact {
     display: flex;
     justify-content:flex-start;
     align-items: center;
     flex-direction: column;
 }
 .contact .contactForm {
     position: relative;
     width: 100%;
     max-width: 700px;
     margin-top: 20px;
 }
 .contact .contactForm .row {
     width: 100%;
    display: grid;
     grid-template-columns: repeat(2,1fr);
     grid-gap: 20px;
     margin-top: 20px;
 }
 .contact .contactForm .row2 {
     width: 100%;
     display: flex;
     justify-content: center;
     align-items: center;
     margin-top: 20px;
     
 }
 .contact .contactForm .row input,
 .contact .contactForm .row2 textarea {
     width: 100%;
     padding: 10px;
     border: none;
     outline: none;
     color: var(--black);
     background: var(--white2);
     font-size: 16px;
     border: 1px solid rgba(0,0,0,0.1);
 }
 .contact .contactForm .row2 textarea {
     resize: none;
     height: 200px;
 }
 .contact .contactForm .row2 input[type="submit"]
 {
     background: var(--black2);
     color: #fff;
     padding: 10px 30px;
     display: inline-block;
     font-weight: 500;
     letter-spacing: 2px;
     cursor: pointer;
     font-size: 16px;
     text-transform: uppercase;
     max-width: 150px;
     border: none;
     margin-bottom: 30px;
 }
 .contact .contactForm .row2 input[type="submit"]:hover {
    background: #2196f3;
 }
 .copyright {
     position: relative;
     bottom: 0px;
     padding: 10px 40px;
     text-align: center;
     margin-bottom: 30px;
 }

 /* Dark and Light mode switch */

 .themeSwitch {
     position: absolute;
     bottom: 20px;
     left: 40px;
     width: 30px;
     height: 30px;
     background: var(--black);
     color: var(--white);
     cursor: pointer;
     border-radius: 50%;
     display: flex;
     justify-content:center;
     align-items: center;
 }

 .themeSwitch::before
 {
     content: "\f186";
     font-family: fontAwesome;
 }
 .dark .themeSwitch::before {
    content: "\f185";
     font-family: fontAwesome;
 } 
 .themeSwitch::after {
     content: 'Switch To Night Mode';
     position: absolute;
     left: 40px;
     font-size: 0.7em;
     color: var(--black);
     white-space: nowrap;
     font-weight: 300;
     letter-spacing: 1px;
     pointer-events: none;
 }

 .dark .themeSwitch::after {
    content: 'Switch To Day Mode';
 }

 /* Now, Make it resposive */

 @media (max-width: 992px)
 {
     .themeSwitch {
         left: 20px;
     }
     .navigation {
         left: -100%;
     }
     .navigation.active {
         left: 0px;
         width: 100%;
     }
     .main {
         width: 100% ;
         left: 0px;
     }
     .main.active {
         left: 100%;
     }
     .main .topbar {
        width: 100%;
        left: 0px;
        padding: 0px 20px;
     }
    .navigation ul {
        padding: 20px 20px;
    }
    .banner .imgBx {
        width: 250px;
        height: 250px;
    }
    .banner h3,
    .banner p {
        text-align: center;
    }
    .adjust
    {
        padding: 0 20px;
        padding-top: 80px; 
    }
    .about .content {
        flex-direction: column;
    }
    .about .content .textBox{
        width: 100%;
        min-width: 100%;
    }
    .about .content .imgBx {
        margin-left: 0;
        margin-top: 20px;
    }
    .services .content {
        grid-template-columns: repeat(2,2fr); 
    }
    .projects .content {
        grid-template-columns: repeat(2,2fr); 
    }
}  

@media (max-width: 767px)
{
    .services .content {
        grid-template-columns: repeat(1,2fr); 
    }
    .projects .content {
        grid-template-columns: repeat(1,2fr); 
    }
    .tstimonials .content {
        grid-template-columns: repeat(1,2fr); 
    }
    .contact .contactForm .row {
        grid-template-columns: repeat(1,2fr);  
    }
    .contact {
        margin-bottom: 100px; 
    }
    .copyright {
        padding: 10px 20px;
    }
}

</style>
@endpush
<div>
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
                <li><a href="#about" onclick="toggleMenu();">About</a></li>
                <li><a href="#services" onclick="toggleMenu();">Services</a></li>
                <li><a href="#projects" onclick="toggleMenu();">Projects</a></li>
                <li><a href="#testimonials" onclick="toggleMenu();">Testimonials</a></li>
                <li><a href="#contect" onclick="toggleMenu();">Contect</a></li>
            </ul>
            <div class="themeSwitch"></div>
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
                            <img src="{{asset('assets/img/galeria/portafolio/img1yo.jpeg')}}" alt="Foto de perfil">
                        </div>
                        <h3>Eduardo Liendo</h3>
                        <p>I'm a Creative Back End Web Developer.</p>
                        <a href="{{route('online.dataporta')}}" class="btn">Download My CV</a>
                        <ul class="socialMedia">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/eduardo-liendo-152243120/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://github.com/venemexcoin"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </section>

                {{-- about --}}
               <section class="about adjust" id="about">
                    <div class="title">
                        <h2>About Me</h2>
                    </div>
                    <div class="content">
                        <div class="textBox">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem suscipit amet asperiores dolorem voluptas, esse minus ad culpa pariatur assumenda voluptatum? Maiores facere, molestias aliquam consequatur provident quasi earum autem odio, inventore mollitia sed sit nisi beatae cupiditate, cum alias sint in itaque aliquid. Harum explicabo doloremque non sed at expedita illum a blanditiis ullam quas, molestiae quaerat repudiandae nisi laborum consequuntur totam.<br><br> Dicta quos reiciendis minus in ex vero doloremque placeat ad dolorum labore voluptates quam, error magni consequatur facilis eius exercitationem est maiores omnis, recusandae laudantium nostrum saepe. Consequatur, autem? Cumque, cupiditate. Vero praesentium laboriosam totam tempora. </p>
                        </div>
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/imgMedio2.png')}}" alt="Perfil">
                        </div>
                    </div>
               </section>
                {{-- Services --}}
               <section class="services adjust" id="services">
                <div class="title">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="content">
                    <div class="serviceBox">
                        <img src="{{asset('assets/img/galeria/portafolio/icon1.png')}}" alt="img Web Design">
                        <h2>Web Design</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore similique itaque fugiat neque nihil dolores</p>
                    </div>
                    <div class="serviceBox">
                        <img src="{{asset('assets/img/galeria/portafolio/icon2.png')}}" alt="img Web Design">
                        <h2>Web Developer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore similique itaque fugiat neque nihil dolores</p>
                    </div>
                    <div class="serviceBox">
                        <img src="{{asset('assets/img/galeria/portafolio/icon3.png')}}" alt="img Web Design">
                        <h2>Android Apps</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore similique itaque fugiat neque nihil dolores</p>
                    </div>
                    <div class="serviceBox">
                        <img src="{{asset('assets/img/galeria/portafolio/icon4.png')}}" alt="img Web Design">
                        <h2>Photography</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore similique itaque fugiat neque nihil dolores</p>
                    </div>
                    <div class="serviceBox">
                        <img src="{{asset('assets/img/galeria/portafolio/icon5.png')}}" alt="img Web Design">
                        <h2>Content Writing</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore similique itaque fugiat neque nihil dolores</p>
                    </div>
                    <div class="serviceBox">
                        <img src="{{asset('assets/img/galeria/portafolio/icon6.png')}}" alt="img Web Design">
                        <h2>Video Editing</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore similique itaque fugiat neque nihil dolores</p>
                    </div>
                </div>
               </section> 

               {{-- Project --}}
               <section class="projects adjust" id="projects">
                <div class="title">
                    <h2>Recent Work</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="content">
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img1.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 01</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img2.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 02</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img3.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 03</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img4.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 04</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img5.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 05</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img6.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 06</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img7.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 07</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img8.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 08</h3>
                        </div>
                    </div>
                    <div class="workBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/img9.jpg')}}" alt="img Web Design">
                        </div>
                        <div class="textBx">
                            <h3>Projet 09</h3>
                        </div>
                    </div>
                </div>
               </section> 

               {{-- testimonials --}}
               <section class="tstimonials adjust" id="testimonials">
                <div class="title">
                    <h2>Testimonials</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="content">
                    <div class="testimonialsBox">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/user1.jpg')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat omnis fugiat, dolor cupiditate inventore illum sed laboriosam odit aut est in iusto voluptates rerum perferendis? Placeat ex veritatis quidem in.</p>
                        <h4>Someone Famouse<br><span>Website Designer</span></h4>
                    </div>
                
                
                    <div class="testimonialsBox">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/user3.jpg')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat omnis fugiat, dolor cupiditate inventore illum sed laboriosam odit aut est in iusto voluptates rerum perferendis? Placeat ex veritatis quidem in.</p>
                        <h4>Someone Famouse<br><span>Website Designer</span></h4>
                    </div>
                
                
                    <div class="testimonialsBox">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/user2.jpg')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat omnis fugiat, dolor cupiditate inventore illum sed laboriosam odit aut est in iusto voluptates rerum perferendis? Placeat ex veritatis quidem in.</p>
                        <h4>Someone Famouse<br><span>Website Designer</span></h4>
                    </div>
                
                
                    <div class="testimonialsBox">
                        <div class="imgBx">
                            <img src="{{asset('assets/img/galeria/portafolio/user1.jpg')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat omnis fugiat, dolor cupiditate inventore illum sed laboriosam odit aut est in iusto voluptates rerum perferendis? Placeat ex veritatis quidem in.</p>
                        <h4>Someone Famouse<br><span>Website Designer</span></h4>
                    </div>
                </div>
               </section>

               {{-- Contact --}}

               <section class="contact adjust" id="contect">
                <div class="title">
                    <h2>Let's Say Hi</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="contactForm">
                    <div class="row">
                        <input type="text" name="" placeholder="First Name">
                        <input type="text" name="" placeholder="Last Name">
                    </div>
                    <div class="row">
                        <input type="text" name="" placeholder="Email Address">
                        <input type="text" name="" placeholder="Mobile N.">
                    </div>
                    <div class="row2">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="row2">
                        <input type="submit" value="Send">
                    </div>
                </div>
               </section>
               
               {{-- Copyright Text --}}

               <div class="copyright">
                   <p>Copyright &copy; 2021 online tutorials. All Reght Reserved.</p>
               </div>
            </div>
    </div>
</div>
@push('scripts')
<script>
    let toggle = document.querySelector('.toggle');
    let topbar = document.querySelector('.topbar');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    let themeSwitch = document.querySelector('.themeSwitch');
    let body = document.querySelector('body');

    toggle.onclick = function() {
        toggle.classList.toggle('active');
        topbar.classList.toggle('active');
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }

    // theme switch toggle 

    themeSwitch.onclick = function() {
        body.classList.toggle('dark');
    }

    // now, we fix menu active class issue for mobile devices
    function toggleMenu(){
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');
        navigation.classList.remove('active');
        main.classList.remove('active');
    } 
</script>
@endpush



