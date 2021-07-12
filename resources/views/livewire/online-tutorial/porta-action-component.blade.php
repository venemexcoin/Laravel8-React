@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif;
    }
    body {
       
        background: lightblue;
        display: flex;
        justify-content:center;
        align-items:center;
        min-height: 100vh;
    }
    .container{
        position: relative;
        width: 100%;
        max-width: 900px;
        min-height: 1000px;
        background: #fff;
        margin: 50px;
        display:grid;
        grid-template-columns: 1fr 2fr;
        box-shadow: 0 35px 55px rgba(0, 0, 0,0.1)
    }
    .container .left_Side {
        position: relative;
        background: #003147;
        padding: 40px;
    }
    .profileText {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2)
    }
    .profileText .imgBx{
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
    }
    .profileText .imgBx img{
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .profileText h2 {
        color: #fff;
        font-size: 1.5em;
        margin-top: 20px;
        text-transform: uppercase;
        text-align: center;
        font-weight:600;
        line-height: 1.4em;
    }
    .profileText h2 span {
        font-size: 0.8em;
        font-weight: 300;
    }
    .contactInfo{
        padding-top: 40px;
    }
    .title {
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }
    .contactInfo ul{
        position: relative;
    }
    .contactInfo ul li{
        position: relative;
        list-style: none;
        margin: 10px 0;
        cursor: pointer;
    }
    .contactInfo ul li .icon {
        display: inline-block;
        width: 30px;
        font-size: 18px;
        color: #03a9f4;
    }
    .contactInfo ul li span {
        color: #fff;
        font-weight: 300;
    }
    .contactInfo.education li {
        margin-bottom: 15px;
    }
    .contactInfo.education h5 {
        color: #03a9f4;
        font-weight: 500;
    }
    .contactInfo.education h4:nth-child(2) {
        color: #fff;
        font-weight: 500;
    }
    .contactInfo.education h4 {
        color: #fff;
        font-weight: 300;
    }
    .contactInfo.language .percent{
        position: relative;
        width: 100%;
        height: 6px;
        background: #081921;
        display: block;
        margin-top: 5px;
    }
    .contactInfo.language .percent div {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: #03a9f4;
    } 


    .container .right_Side {
        position: relative;
        background: #fff;
        padding: 40px;
    }
    .about {
        margin-bottom: 50px;
    }
    .about:last-child
    {
        margin-bottom: 0;
    }
    .title2 {
        color: #003147;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }
    p {
        color: #333;
    }
    .about .box {
        display: flex;
        flex-direction: row;
        margin: 20px 0;
    }
    .about .box .year_company{
        min-width: 150px;
    }
    .about .box .year_company h5{
        text-transform: uppercase;
        color: #848c90;
        font-weight: 600;
    }
    .about .box .text h4 {
        text-transform: uppercase;
        color: #2a7da2;
        font-size: 16px;
    }
    .skills .box {
        position: relative;
        width: 100%;
        display: grid;
        grid-template-columns: 150px 1fr;
        justify-content:center;
        align-items:center;
    }
    .skills .box h4 {
        text-transform: uppercase;
        color: #848c99;
        font-weight: 500;
    }
    .skills .box .percent{
        position: relative;
        width: 100%;
        height: 10px;
        background: #f0f0f0;
    }
    .skills .box .percent div {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: #03a9f4;
    }
    .interest ul {
        display: grid;
        grid-template-columns: repeat(4,1fr);
    }
    .interest ul li {
        list-style: none;
        color: #333;
        font-weight: 500;
        margin: 10px 0;
    }
    .interest ul li .fa {
        color: #03a9f4;
        font-size: 18px;
        width: 20px;
    }

    @media (max-width: 1000px)
    {
        .container
        {
            margin: 10px;
            grid-template-columns:repeat(1,1fr);
        }
        .interest ul
        {
            grid-template-columns: repeat(2,1fr);
        }
    }

    @media (max-width: 600px){
        .about .box 
        {
            flex-direction: column;
        }
        .about .box .year_company
        {
            margin-bottom: 5px;
        }
        .interest ul
        {
            grid-template-columns: repeat(1,1fr);
        }
        .skills .box
        {
            grid-template-columns: repeat(1,1fr)
        }
    }
</style>

@endpush
<div>
    <div class="container">
        <div class="left_Side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="{{asset('assets/img/galeria/portafolio/user.jpg')}}" alt="">
                </div>
                <h2>Muhammad Irshad<br><span>Web Developer</span></h2>
            </div>

            <div class="contactInfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text">+1 234 5678 900</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text">john_doe@email.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                        <span class="text">www.mywebsite.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                        <span class="text">www.linkedin.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text">Patna, Bihar, India</span>
                    </li>
                </ul>
            </div>

            <div class="contactInfo education">
                <h3 class="title">Education</h3>
                <ul>
                    <li>
                        <h5>2010 - 2013</h5>
                        <h4>Master Degree in Computer Science</h4>
                        <h4>University Name</h4>
                    </li>
                    <li>
                        <h5>2007 - 2010</h5>
                        <h4>Bachelor Degree in Computer Science</h4>
                        <h4>University Name</h4>
                    </li>
                    <li>
                        <h5>1997 - 2007</h5>
                        <h4>Matriculation</h4>
                        <h4>University Name</h4>
                    </li>    
                </ul>
            </div>

            <div class="contactInfo language">
                <h3 class="title">Languages</h3>
                <ul>
                    <li>
                       <span class="text">English</span>
                        <span class="percent">
                            <div style="width: 10%;"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text">Spanish</span>
                         <span class="percent">
                            <div style="width: 90%;"></div>
                         </span>
                     </li>
                     <li>
                        <span class="text">Paja</span>
                         <div class="percent">
                            <div style="width: 58%;"></div>
                         </div>
                     </li>
                </ul>       
            </div>
                
        </div>
        <div class="right_Side">
            <div class="about">
                <h2 class="title2">Profile</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, eligendi? Sapiente facere fugit itaque in labore molestiae corporis recusandae illo quas labore! commodi error fuga! Quasi incidunt, ex voluptatem atque animi inventore iusto fugiat.<br><br> eveniet commodi et debitis consequuntur sunt deleniti soluta dolore modi excepturi quia reiciendis nisi eligendi! Minus qui quas, aliquam ipsa quasi laboriosam harum architecto saepe at labore?</p>
            </div>
            <div class="about">
                <h2 class="title2">Experience</h2>
                <div class="box">
                    <div class="year_company">
                        <h5>2019 - Present</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Senior UX Designer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repudiandae sapiente aut libero cumque recusandae ratione, officia impedit nulla ad, commodi nisi magnam totam corrupti fugit? Reiciendis laboriosam vero amet!</p>
                    </div>
                </div>

                <div class="box">
                    <div class="year_company">
                        <h5>2019 - 2019</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Senior UX Designer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repudiandae sapiente aut libero cumque recusandae ratione, officia impedit nulla ad, commodi nisi magnam totam corrupti fugit? Reiciendis laboriosam vero amet!</p>
                    </div>
                </div>

                <div class="box">
                    <div class="year_company">
                        <h5>2016 - 2016</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Junio UX Designer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repudiandae sapiente aut libero cumque recusandae ratione, officia impedit nulla ad, commodi nisi magnam totam corrupti fugit? Reiciendis laboriosam vero amet!</p>
                    </div>
                </div>
            </div>
            <div class="about skills">
                <h2 class="title2">Professional Skills</h2>
                <div class="box">
                    <h4>Html</h4>
                    <div class="percent">
                        <div style="width: 85%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>CSS</h4>
                    <div class="percent">
                        <div style="width: 80%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>JavaScript</h4>
                    <div class="percent">
                        <div style="width: 70%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Photoshop</h4>
                    <div class="percent">
                        <div style="width: 50%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Illustrator</h4>
                    <div class="percent">
                        <div style="width: 12%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Adobe XD</h4>
                    <div class="percent">
                        <div style="width: 8%;"></div>
                    </div>
                </div>

            </div>

            <div class="about interest">
                <h2 class="title2">Interest</h2>
                <ul>
                    <li><i class="fa fa-gamepad" aria-hidden="true"></i> Gaming</li>
                    <li><i class="fa fa-microphone" aria-hidden="true"></i> Singing</li>
                    <li><i class="fa fa-book" aria-hidden="true"></i> Reading</li>
                    <li><i class="fa fa-cutlery" aria-hidden="true"></i> Cooking</li>
                </ul>
            </div> 
                
        </div>
    </div>
</div>
@push('scripts')

@endPush




