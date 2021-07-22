@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        min-height: 100vh;
        background: #fff;
        font-family: 'Poppins', sans-serif;
    }
    .navigation {
        position: fixed;
        top: 20px;
        left: 20px;
        bottom:20px;
        width: 70px;
        border-radius:10px;
        box-sizing: initial;
        border-left: 5px solid #4d5bf9;
        background: #4d5bf9;
        transition: width 0.5s;
        overflow: hidden;
    }
    .navigation.active {
        width: 300px;
    }
    .navigation ul {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding-left: 5px;
        padding-top: 40px; 
    }
    .navigation ul li {
        position: relative;
        list-style: none;
        width: 100%;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    .navigation ul li.active {
        background: #fff;
    }
    .navigation ul li b:nth-child(1) {
        position: absolute;
        top: -20px;
        height: 20px;
        width: 100%;
        background: #fff;
        display: none;
    }
    .navigation ul li b:nth-child(1):before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-bottom-right-radius: 20px;
        background: #3d5bf9;
    }
    .navigation ul li b:nth-child(2) {
        position: absolute;
        bottom: -20px;
        height: 20px;
        width: 100%;
        background: #fff;
        display: none;
    }
    .navigation ul li b:nth-child(2):before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top-right-radius: 20px;
        background: #3d5bf9;
    }

    .navigation ul li a {
        position: relative;
        display: block;
        width: 100%;
        display: flex;
        text-decoration: none;
        color: #fff;
    }
    .navigation ul li.active a {
        color: #333;
    }
    .navigation ul li a .icon {
        position: relative;
        display: block;
        min-width: 60px;
        height:60px;
        line-height: 70px;
        text-align: center;
    }
    .navigation ul li a .icon ion-icon{
        font-size: 1.5em;
    }
    .navigation ul li a .title {
        position: relative;
        display: block;
        padding-left: 10px;
        height: 60px;
        line-height: 60px;
        white-space: normal;

    }
    .toggle {
        position: fixed;
        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: #4d5bf9;
        border-radius: 10px;
        cursor: pointer;
        display: flex;
        justify-content:center;
        align-items: center;
    }
    .toggle.active {
        background: #ff0707;
    }
    .toggle ion-icon {
        position: absolute;
        color: #fff;
        font-size: 34px;
        display: none;
    }
    .toggle ion-icon.open,
    .toggle.active ion-icon.close {
        display: block;
    }
    .toggle ion-icon.close,
    .toggle.active ion-icon.open {
        display: none;
    }
    .navigation ul li.active b:nth-child(1), 
    .navigation ul li.active b:nth-child(2) {
        display: block;
    }
</style>

@endpush

<div>
<div class="navigation">
    <ul>
        <li class="list active">
            <b></b>
            <b></b>
            <a href="#">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="list">
             <b></b>
            <b></b>
            <a href="#">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="title">Profile</span>
            </a>
        </li>

        <li class="list">
             <b></b>
            <b></b>
            <a href="#">
                <span class="icon">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </span>
                <span class="title">Messages</span>
            </a>
        </li>

        <li class="list">
             <b></b>
            <b></b>
            <a href="#">
                <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title">Setting</span>
            </a>
        </li>

        <li class="list">
             <b></b>
            <b></b>
            <a href="#">
                <span class="icon">
                    <ion-icon name="help-outline"></ion-icon>
                </span>
                <span class="title">Help</span>
            </a>
        </li>

        <li class="list">
             <b></b>
            <b></b>
            <a href="#">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">Password</span>
            </a>
        </li>

        <li class="list">
             <b></b>
            <b></b>
            <a href="#">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sign Out</span>
            </a>
        </li>
    </ul>
</div>

<div class="toggle">
    <ion-icon name="menu-outline" class="open"></ion-icon>
    <ion-icon name="close-outline" class="close"></ion-icon>
</div>



</div>
@push('scripts')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let menuToggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    menuToggle.onclick = function() {
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active')
    }


    // add active class in selected list item
    let list = document.querySelectorAll('.list');
    for(let i = 0; i < list.length; i++) {
        list[i].onclick = function(){
            let j = 0;
            while(j < list.length){
                list[j++].className = 'list';
            }
            list[i].className = 'list active';
        }
    }
</script>

@endpush

