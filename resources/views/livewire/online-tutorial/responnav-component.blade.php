@push('styles')
<style>
    * {
        scroll-behavior: smooth;
    }
    body{
        background: #fff;
        min-height: 100vh;
        overflow: hidden;
        }
    header {
        position: fixed;
        top: 0;
        right: 0;
        display: flex;
        justify-content: space-between;
        width: 100%;
        background: #fff;
        box-shadow: 0 5px 25px rgba(0,0,0,0.05);
        z-index: 1000;
    }    
    .logo {
        height: 60px;
        line-height: 60px;
        color: #12334e;
        font-weight: 700;
        font-size: 2em;
        text-decoration: none;
        cursor: pointer;
        padding-left: 20px;
    }
    #toggle {
        position: absolute;
        top: 0;
        right: 0;
        width: 60px;
        height: 60px;
        background: #9051ff;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #toggle::before {
        content: '';
        position: absolute;
        width: 28px;
        height: 2px;
        background: #fff;
        transform: translateY(-5px);
        transition: 0.2s;
    }
    #toggle::after {
        content: '';
        position: absolute;
        width: 28px;
        height: 2px;
        background: #fff;
        transform: translateY(5px);
        transition: 0.2s;
    }
    #toggle.active::before {
        transform: translateY(0px) rotate(45deg);
    }
    #toggle.active::after {
        transform: translateY(0px) rotate(-45deg);
    }
    #toggle.active {
        background: #f7226a;
    }
    #navbar {
        position: relative;
        height: 60px;
        right: 60px;
        background: #fff;
        transition: 0.5s;
        width: 0px;
        overflow: hidden;
    }
    #navbar.active {
        width: 660px;
    }
    #navbar ul {
    position: relative;
    display: flex;
    flex-direction: row;
    }
    #navbar ul li {
        list-style: none;
    }
    #navbar ul li a {
        color: #12334e;
        height: 60px;
        line-height: 60px;
        display: inline-block;
        text-decoration: none;
        font-size: 1.2em;
        padding: 0 15px;
        letter-spacing: 2px;
    }
    #navbar ul li a:hover {
        color: #fff;
        background: #9051ff;
    }
    section {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: #f5f5f5;
        font-size: 18vw;
        font-weight: 700;
    }

    /* Now make it resposive */

    @media (max-width: 991px){
        #navbar
        {
            position: fixed;
            bottom: -100%;
            right: 0;
            width: 100%;
            transition: 0.5s;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #navbar.active
        {
            height: calc(100vh - 60px);
            bottom: 0;
            width: 100%;
        }
        #navbar ul
        {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    }
</style>

@endpush

<header id="header">
    <a href="#" class="logo">Logo</a>
    <div id="toggle"></div>
    <div id="navbar">
        <ul>
            
            <li><a href="#home">Home</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#Team">Team</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="{{route('online.index')}}">logout</a></li>
            
        </ul>
    </div>
</header>

<section id="home">Home</section>
<section id="Services">Services</section>
<section id="Team">Team</section>
<section id="Portfolio">Portfolio</section>
<section id="Contact">Contact</section>
@push('scripts')
    <script>
        const header = document.getElementById('header');
        const toggle = document.getElementById('toggle');
        const navbar = document.getElementById('navbar');
        
        document.onclick = (e) => {
            if(e.target.id !== 'header'&& e.target.id !== 'toggle' && e.target.id !== 'navbar'){
                toggle.classList.remove('active');
                navbar.classList.remove('active');
            }
        }
        
        toggle.onclick = () => {
            toggle.classList.toggle('active');
            navbar.classList.toggle('active');
        }
    </script>
@endpush