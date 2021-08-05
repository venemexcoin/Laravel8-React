@push('title_base')
    Corner Text
@endpush

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    * {
        margin: 0; 
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    section {
        position: relative;
        width: 100%;
        height: 100vh;
        background: #222;
        overflow: hidden;
    }
    section .textBx {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:#333;
        clip-path: polygon(0 0, 50% 0, 50% 100%, 0% 100%);
    }
    .skew1 h2,
    .textBx .skew2 h2 {
        position: absolute;
        width: 100%;
        text-align: center;
        font-size: 12em;
        line-height: 1em;
        color: #0488f5;
        cursor: pointer;
    }
    .skew1 h2 {
        opacity: 0.6;
    }
    .skew1 {
        position: relative;
        top: 50px;
        transform: skewY(20deg);
    }
    .skew2 {
        position: relative;
        top: 50px;
        transform: skewY(340deg);
    }
</style>
@endpush

<div>
    <section>
        <div class="skew1">
            <h2 class="layer">Corner Text</h2>
        </div>
        <div class="textBx">
            <div class="skew2">
                <h2 class="layer">Corner Text</h2>
            </div>
        </div>
    </section>
</div>

@push('scripts')
    <script>
        document.addEventListener('mousemove', parallaxText);
        function parallaxText(e) {
            this.querySelectorAll('.layer').forEach(layer => {
                let X = (window.innerWidth - e.pageX * 2)/2;
                layer.style.transform = `translateX(${X}px)`;
            })
        }
    </script>
@endpush

{{-- Usamos https://bennettfeely.com/clippy/ para hacer los efectos de esquinas --}}