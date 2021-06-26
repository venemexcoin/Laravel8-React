@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    .socialMedia {
        display: flex;
        justify-content:center;
        align-items: center;
        min-height: 100vh;
        transition: 0.5s;
    }
    .sci {
        position: relative;
        display: flex;
    }
    .sci li {
        list-style: none;
    }
    .sci li::before {
        content: attr(data-text);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,calc(-50% + 120px));
        font-size: 14vw;
        pointer-events: none;
        font-weight: 700;
        transition: 0.5s;
        opacity: 0;
    }
    .sci li:hover::before {
        opacity: 0.3;
        transform: translate(-50%,calc(-50% + 150px));
    }
    .sci li a {
        position: relative;
        display: inline-block;
        width: 120px;
        height: 120px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
        border-radius: 10px;
        text-decoration: none;
        margin: 20px;
        font-size: 4em;
        transform-style:preserve-3d;
        perspective: 500px;
        box-shadow: 0 25px 35px rgba(0, 0, 0,0.1);
        trransition: background 0.25s;
    }
    .js-tilt-glare {
        border-radius: 10px;
    }
    .sci li a:hover.facebook {
        background: #1877f2;
    }
    .sci li a:hover.youtube {
        background: #ff0000;
    }
    .sci li a:hover.twitter {
        background: #0099ff;
    }
    .sci li a:hover.instagram {
        background: #e4405f;
    }
    .sci li .fa,
    .sci li .fab {
        transition: 0.25s;
        pointer-events: none;
    }
    .sci li a:hover .fa,
    .sci li a:hover .fab {
        color: #fff;
        transform: scale(1.75) translateZ(50px);
    }

    @media (max-width: 800px){
        .sci {
            flex-direction: column;
        }
    }
 
</style>
@endpush
<div>
    <div class="socialMedia">
        <ul class="sci">
            <li data-text="Facebook" data-color="#1877f2">
                <a href="#" class="facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li data-text="Youtube" data-color="#ff0000">
                <a href="#" class="youtube">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
            <li data-text="Twitter" data-color="#0099ff">
                <a href="#" class="twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li data-text="Instagram" data-color="#e4405f">
                <a href="#" class="instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
@push('scripts')
<script src="{{asset('assets/js/vanilla-tilt.min.js')}}"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".sci li a"), {
		max: 30,
		speed: 400,
        glare: true,
        "max-glare": 1
	});

    let list = document.querySelectorAll('.sci li');
    let bg = document.querySelector('.socialMedia');
    list.forEach(elements => {
        elements.addEventListener('mouseenter', function (event){
            let color = event.target.getAttribute('data-color');
            bg.style.backgroundColor = color;
        })

        elements.addEventListener('mouseleave', function (event){
            bg.style.backgroundColor = '#fff';
        })
    })
</script>
@endpush

{{-- usamos una libreia extena de javaScrip en esta direccion 
    https://micku7zu.github.io/vanilla-tilt.js/ --}}