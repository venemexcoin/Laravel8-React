@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    width: 100%;
    background: #fdfcfc;
    }
    .text-boxes{
        height:100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items:center;
        padding: 0 30px; 
        marging-bottom:60px; 
    }
    .text-boxes .text-box{
        heigth:480px;
        max-width: 600px;
        width: 100%;
        margin:55px 0;
    }
    .text-boxes .text-box .tepic{
        font-size: 18px;
        font-weight: 600;
        color: #265df2;
        margin: 4px;
    }
    .text-boxes .text-box textarea{
        height:100%;
        width: 100%;
        padding: 30px;
        font-size: 15px;
        font-weight:400;
        outline: none;
        border: 1px solid #265df2;
        border-radius:8px;
        background: #e7edfe;
    }
    .text-box textarea::-webkit-scrollbar{
        display:none;
    }
    .text-boxes .text-box button{
        height: 45px;
        width: 155px;
        color: #fff;
        background: #265df2;
        outline: none;
        border: none;
        border-radius:8px;
        font-weight: 400;
        margin: 8px 0;
        cursor: pointer;
        transition: all 0.4s ease;
    }
    .text-boxes .text-box button:hover{
        background: #0e4bf1;
    }
    .botonRetur{
        height: 45px;
        width: 155px;
        color: #fff;
        background: #265df2;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .botonRetur:hover{
        background: #0e4bf1;
    }

    @media (max-width: 400px){
        .text-boxes .text-box button{
            width: 100%;
        }   
        .botonRetur{
            width: 100%;
        }
    }
</style>

@endpush

<div class="text-boxes">
    <div class="text-box HTMLBox">
        <div class="tepic">HTML Codigo:</div>
        <textarea id="HTMLBox" readinly style="height: 300px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet provident nostrum, officiis dolores vitae commodi repudiandae praesentium nam, eaque ea vero voluptatum quas deserunt non architecto vel odio quod pariatur!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet provident nostrum, officiis dolores vitae commodi repudiandae praesentium nam, eaque ea vero voluptatum quas deserunt non architecto vel odio quod pariatur!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet provident nostrum, officiis dolores vitae commodi repudiandae praesentium nam, eaque ea vero voluptatum quas deserunt non architecto vel odio quod pariatur!
        </textarea>
        <button id="HTMLButton">Copy Codes</button>
    </div>
    <div class="text-box CSSBox">
        <div class="tepic">CSS Codigo:</div>
        <textarea id="CSSBox" readinly style="height: 300px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet provident nostrum, officiis dolores vitae commodi repudiandae praesentium nam, eaque ea vero voluptatum quas deserunt non architecto vel odio quod pariatur!
            
        </textarea>
        <button id="CSSButton">Copy Codes</button>
    </div>
    <div class="text-box JSBox">
        <div class="tepic">JavaScript Codigo:</div>
        <textarea id="JSBox" readinly style="height: 300px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet provident nostrum, officiis dolores vitae commodi repudiandae praesentium nam, eaque ea vero voluptatum quas deserunt non architecto vel odio quod pariatur!
            
        </textarea>
        <button id="JSButton">Copy Codes</button>
    </div>
    <a href="{{route('index.codinglab')}}" type="boton" class="botonRetur">Retornar</a>
</div>
 
@push('scripts')
<script>
    // HTML Box JS Code
    let HTMLBox = document.getElementById('HTMLBox');
    let HTMLButton = document.getElementById('HTMLButton');

    HTMLButton.onclick = function() {
        HTMLBox.select();
        document.execCommand("copy"); 
        HTMLButton.innerHTML = "Codes Copied";
    }
    // CSS Box JS Code
    let CSSBox = document.getElementById('CSSBox');
    let CSSButton = document.getElementById('CSSButton');

    CSSButton.onclick = function() {
        CSSBox.select();
        document.execCommand("copy"); 
        CSSButton.innerHTML = "Codes Copied";
    }
     // CSS Box JS Code
    let JSBox = document.getElementById('JSBox');
    let JSButton = document.getElementById('JSButton');

    JSButton.onclick = function() {
        JSBox.select();
        document.execCommand("copy"); 
        JSButton.innerHTML = "Codes Copied";
    }
</script>
@endpush