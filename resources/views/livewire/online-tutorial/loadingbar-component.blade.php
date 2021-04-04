@push('styles')
<style>
.body {
    width: 100%;
    height: 100Vh;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #1c1c1c;
}
.container{
    position: relative;
    width: 500px;
}
.container .loading{
    position: relative;
    display: flex;
    background: linear-gradient(#616161 0%,#333 10%,#222);
    border: 2px solid #000;
    padding: 20px;
    box-shadow: 0 20px 35px rgba(0,0,0,0.5);
    border-radius:8px; 
}
.container .loading::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50%;
    background: rgba(255,255,255,0.1);
    z-index: 10;
    pointer-events: none;
}
.container .loading::after {
    content: '';
    position: absolute;
    top: 27px;
    right: 20px;
    width: 10px;
    height: 10px;
    border-radius: 10px;
    background: #22e4e3;
    box-shadow: 0 0 5px #22e4e3,
                0 0 10px #22e4e3,
                0 0 40px #22e4e3;
    animation: animateLight 1s linear infinite;            
}
@keyframes animateLight {
    0%,49.99%{
        box-shadow: 0 0 5px #22e4e3,
                    0 0 10px #22e4e3,
                    0 0 40px #22e4e3; 
    }
    50%,100% {
        background: #000;
        box-shadow: none; 
    }
}


.container .loading .text {
position: relative;
width: 80px;
color: #fff;
text-align: right;
letter-spacing: 1px;
}
.container .loading .percent{
    position: relative;
    top: 2px;
    width: calc(100% - 120px);
    height: 20px;
    background: #151515;
    border-radius: 20px;
    margin: 0 10px;
    box-shadow: inset 0 0 10px #000;
    overflow: hidden;
}    
.container .loading .percent .progress {
    position: absolute;
    top: 0;
    left: 0;
    width: %;
    height: 100%;
    border-radius: 20px;
    background: linear-gradient(45deg,#22ffde,#2196f3);
    animation: animate 6s ease-in-out infinite;
}  
@keyframes animate {
    0%{
        width: 0;
        left: 0;
    }
    50%{
        width: 100%;
        left: 0;
    }
    100%{
        width: 100%;
        left: 100%;
    }
}
</style>
@endpush

<div class="body">
    <div class="container">
        <div class="loading">
            <span class="text">Loading</span>
            <div class="percent">
                <div class="progress">
    
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

@endpush