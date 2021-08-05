@push('title_base')
2D to 3D 
@endpush
@push('styles')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        min-height: 100vh;
        background: #262e31;
        display: flex;
        justify-content:center;
        align-items: center;
    }
    .imageBx {
        display: grid;
        grid-template-columns: repeat(3,1fr)
        grid-gap: 5px;
        grid-auto-rows: minmax(100px, auto);
        grid-column-gap: 20px;
        display: flex;
    }
    .imgBx {
        position: relative;
        width: 200px;
        height: 200px;
        transform-style: preserve-3d;
        perspective: 1000px;
    }
    .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: 0.5s;
        z-index: calc(1 + var(--i));
        opacity: calc(1 - (0.2 * var(--j)));
    }
    .imgBx:hover img {
        transform: rotate(-30deg) skew(25deg) translateX(calc(35px * var(--i)))
        translateY(calc(-35px * var(--i)));
        box-shadow: -20px 20px 20px rgba(0, 0, 0,0.25);
    }
</style>
@endpush
<div class="imageBx">
    <div class="imgBx">
        <img src="{{asset('assets/img/galeria/layeredimage/img1.jpg')}}" alt="" style="--i:2;--j:0;">
        <img src="{{asset('assets/img/galeria/layeredimage/img1.jpg')}}" alt="" style="--i:1;--j:1;">
        <img src="{{asset('assets/img/galeria/layeredimage/img1.jpg')}}" alt="" style="--i:0;--j:2;">
        <img src="{{asset('assets/img/galeria/layeredimage/img1.jpg')}}" alt="" style="--i:-1;--j:3;">
        <img src="{{asset('assets/img/galeria/layeredimage/img1.jpg')}}" alt="" style="--i:-2;--j:4;">
    </div>
    <div class="imgBx">
        <img src="{{asset('assets/img/galeria/layeredimage/img2.jpg')}}" alt="" style="--i:2;--j:0;">
        <img src="{{asset('assets/img/galeria/layeredimage/img2.jpg')}}" alt="" style="--i:1;--j:1;">
        <img src="{{asset('assets/img/galeria/layeredimage/img2.jpg')}}" alt="" style="--i:0;--j:2;">
        <img src="{{asset('assets/img/galeria/layeredimage/img2.jpg')}}" alt="" style="--i:-1;--j:3;">
        <img src="{{asset('assets/img/galeria/layeredimage/img2.jpg')}}" alt="" style="--i:-2;--j:4;">
    </div>
    <div class="imgBx">
        <img src="{{asset('assets/img/galeria/layeredimage/img4.jpg')}}" alt="" style="--i:2;--j:0;">
        <img src="{{asset('assets/img/galeria/layeredimage/img4.jpg')}}" alt="" style="--i:1;--j:1;">
        <img src="{{asset('assets/img/galeria/layeredimage/img4.jpg')}}" alt="" style="--i:0;--j:2;">
        <img src="{{asset('assets/img/galeria/layeredimage/img4.jpg')}}" alt="" style="--i:-1;--j:3;">
        <img src="{{asset('assets/img/galeria/layeredimage/img4.jpg')}}" alt="" style="--i:-2;--j:4;">
    </div>
</div>
@push('scripts')

@endpush
