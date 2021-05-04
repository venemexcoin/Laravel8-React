@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body {
        background: lightblue;
        display: flex;
        justify-content:center;
        align-items: center;
        min-height: 100vh;
    }
    .container {
        position: relative;
        width: 100%;
        max-width: 1000px;
        min-height: 1000px;
        background: #fff;
        margin: 50px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        box-shadow: 0 35px 55px rgba(0, 0, 0,0.1);
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
        padding-bottom:20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
    .profileText .imgBx{
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
    }
    .profileText .imgBx img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .profileText h2{
        color: #fff;
        font-size: 1.5em;
        margin-top: 20px;
        text-transform: uppercase;
        text-align: center;
        font-weight: 600;
        line-height: 1.4em;
    }
    .profileText h2 span{
        font-size: 0.8em;
        font-weight: 300;
    }
    .contactInfo{
        
    }
    .contactInfo{
        padding-top: 40px;
    }
    .title {
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing:1px;
        margin-bottom:20px;
    }
    .contactInfo ul{
        position: relative;
    }
    .contactInfo ul li {
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
        font-weight: 300px;
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
   


    .container .right_Side {
        position: relative;
        background: #fff;
        padding: 40px;
    }
    
   
</style>
@endpush

   <div class="container">
       <div class="left_Side">
           <div class="profileText">
               <div class="imgBx">
                   <img src="{{asset('assets/img/galeria/portafolio/b1.jpg')}}" alt="">
               </div>
               <h2>Eduardo Liendo<br><span>Web Developer</span></h2>
           </div>
           <div class="contactInfo">
               <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                    <span class="icon"><i class="fas fa-phone-alt"></i></span>
                    <span class="text">+1 234 5678 900</span>
                </li>
                <li>
                    <span class="icon"><i class="far fa-envelope"></i></span>
                    <span class="text">eduarlien@gmail.com</span>
                </li>
                <li>
                    <span class="icon"><i class="fas fa-globe-asia"></i></span>
                    <span class="text">www.mywebsite.com</span>
                </li>
                <li>
                    <span class="icon"><i class="fab fa-linkedin"></i></span>
                    <span class="text">www.linkedin.com/me</span>
                </li>
                <li>
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="text">Mexico,Venezuela</span>
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
                <h5>2007 -2013</h5>
                <h4>BACHELOR Degree in Computer Science</h4>
                <h4>University Name</h4>
            </li>
            <li>
                <h5>1997 - 2007</h5>
                <h4>Matriculation</h4>
                <h4>University Name</h4>
            </li>
         </ul>
        </div>

       </div>
           <div class="right_Side"></div>
   </div>
