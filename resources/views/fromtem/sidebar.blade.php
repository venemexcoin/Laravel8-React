

    <input type="checkbox" id="check">
    <div class="btn_one">
      <label for="check">
        <i class="fas fa-bars"></i>
      </label>
      
    </div>
    <div class="sidebar_menu">
      <div class="logo">
        <a href="#">ChamocellDEV</a>
          </div>
        <div class="btn_two">
          <label for="check">
            <i class="fas fa-times"></i>
          </label>
        </div>
      <div class="menu">
        <ul>
          <li><i class="fas fa-qrcode"></i>
            <a href="{{ url('employee')}}">CRUD</a>
          </li>
          <li>
            <i class="fas fa-link"></i>
            <a href="{{ url('/api1')}}">Primera API</a>
          </li>
          <li>
            <img src="{{asset('assets/img/fromtem/Online.png')}}" class="fromtem-img__online">
            <a href="{{ url('/onlinetutorial')}}">Online Tutorial</a>
          </li>
          <li>
            <img src="{{asset('assets/img/fromtem/codigoNepal.png')}}" class="fromtem-img__nepal">
            <a href="{{ url('/codigonepal')}}">CodigoNepal</a>
          </li>
          <li>
            <img src="{{asset('assets/img/fromtem/CodingLab.png')}}" class="fromtem-img__nepal">
            <a href="{{ url('/codinglab')}}">CodingLab</a>
          </li>
          <li>
            <img src="{{asset('assets/img/fromtem/bluuweb2.png')}}" class="fromtem-img__nepal">
            <a href="{{ url('/bluuweb')}}">Bluuweb</a>
          </li>
          <li>
            <i class="fas fa-phone-volume"></i>
            <a href="#">Contact</a>
          </li>
          <li>
          <i class="far fa-comments"></i>
            <a href="#">Feedback</a>
          </li>
        </ul>
      </div>
      <div class="social_media">
        <ul>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </ul>
      </div>
    </div>
  