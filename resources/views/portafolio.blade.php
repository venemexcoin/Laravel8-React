<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PortaFolio</title>
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/portafolio.css')}}">
</head>
<body>
    <header>
        <a href="#" class="logo">Portafolio</a>
        <div class="menu1">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    </header>
    <section class="banner">
        <div class="textBx w50">
            <h2>Hello, I'm<br><span>Eduardo Liendo.</span></h2>
            <h3>I'm a Front End Web Developer.</h3>
            <a href="#" class="btn">About Me</a>
        </div>
    </section>
    <section class="about" id="about">
        <div class="heading">
            <h2>About Me</h2>
        </div>
        <div class="content">
            <div class="contentBx">
                <h3>I'm a Front End Web Developer.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Eos sunt fugiat inventore blanditiis culpa aut veniam 
                     laborum earum a doloribus animi optio voluptatem maiores 
                     sequi porro ipsa, ducimus obcaecati distinctio!<br><br>Lorem ipsum 
                     dolor sit amet consectetur adipisicing elit. Quaerat earum odit 
                     quis cumque, aliquid odio voluptate voluptas neque illum vel illo 
                     voluptatem, doloremque ipsa.</p>  
            </div>
            <div class="w50">
                <img src="{{ asset('assets/img/portafolio/img1.jpg')}}" class="img">
            </div>
            </div>
    </section>
    <section class="serveces" id="serveces">
    <div class="heading white">
    <h2>Our Services</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>    
    </div>
    <div class="content">
    <div class="servicesBx">
    <img src="{{ asset('assets/img/portafolio/icon1.png')}}" alt="">
    <h2>Web Design</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur numquam 
        aspernatur nisi cum corrupti mollitia. Molestiae atque voluptatum sed.</p>    
    </div> 
    <div class="servicesBx">
        <img src="{{ asset('assets/img/portafolio/icon2.png')}}" alt="">
        <h2>Web Development</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur numquam 
            aspernatur nisi cum corrupti mollitia. Molestiae atque voluptatum sed.</p>    
        </div> 
        <div class="servicesBx">
            <img src="{{ asset('assets/img/portafolio/icon3.png')}}" alt="">
            <h2>Android App</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur numquam 
                aspernatur nisi cum corrupti mollitia. Molestiae atque voluptatum sed.</p>    
            </div> 
            <div class="servicesBx">
                <img src="{{ asset('assets/img/portafolio/icon4.png')}}" alt="">
                <h2>Photography</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur numquam 
                    aspernatur nisi cum corrupti mollitia. Molestiae atque voluptatum sed.</p>    
                </div> 
                <div class="servicesBx">
                    <img src="{{ asset('assets/img/portafolio/icon5.png')}}" alt="">
                    <h2>Content Writeng</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur numquam 
                        aspernatur nisi cum corrupti mollitia. Molestiae atque voluptatum sed.</p>    
                    </div> 
                    <div class="servicesBx">
                        <img src="{{ asset('assets/img/portafolio/icon6.png')}}" alt="">
                        <h2>Video Editing</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur numquam 
                            aspernatur nisi cum corrupti mollitia. Molestiae atque voluptatum sed.</p>    
                        </div>    
    </div>    
    </section> 
    
    <section class="work" id="work">
        <div class="heading">
            <h2>Our Latest Work</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>    
            </div>
            <div class="content">
                <div class="workBx">
                    <img src="{{ asset('assets/img/portafolio/product1.jpg')}}" alt="">
                </div>
                <div class="workBx">
                    <img src="{{ asset('assets/img/portafolio/product2.jpg')}}" alt="">
                </div>
                <div class="workBx">
                    <img src="{{ asset('assets/img/portafolio/product3.jpg')}}" alt="">
                </div>
                <div class="workBx">
                    <img src="{{ asset('assets/img/portafolio/product4.jpg')}}" alt="">
                </div>
            </div>
            <div class="heading">
                <a href="#" class="btn">View More</a>    
                </div>
    </section>
    <section class="testimonial" id="testimonial">
        <div class="heading">
            <h2>Testimonial</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>    
            </div>
            <div class="content">
                <div class="testimonialBx">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Asperiores vel dicta magnam laborum nulla laudantium tempora,
                          doloremque corrupti quasi placeat mollitia qui accusantium </p>
                          <h3>Someone Famous<br><span>Creative Designer</span></h3>
                </div>
                <div class="testimonialBx">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Asperiores vel dicta magnam laborum nulla laudantium tempora,
                          doloremque corrupti quasi placeat mollitia qui accusantium </p>
                          <h3>Someone Famous<br><span>Creative Designer</span></h3>
                </div>
            </div>
    </section>

    <section class="contact" id="contact">
        <div class="heading white">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>    
            </div>
        <div class="content">
            <div class="contactInfo">
                <h3>Contact Info</h3>
                <div class="contactInfoBx">
                  <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>4671 Sugar Camp Road,<br>Owatonna,Minnesota,<br>55060</p>
                    </div>
                  </div>
                  <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>467-155-060</p>
                    </div>
                </div> 
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>godoyMarcano@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="formBx">
            <form>
                <h3>Message Me</h3>
                <input type="text" name="" placeholder="Full Name">
                <input type="email" name="" placeholder="Email">
                <textarea placeholder="Your Message"></textarea>
                <input type="submit" value="Send">
            </form>
        </div> 
    </div>    
    </section>

    <div class="copyright">
        <p>Copyright ©  2020 online Tutorials. All right Reserved</p>
    </div>

    
    <script src="{{asset('assets/js/portafolio.js')}}"></script>
</body>
</html>