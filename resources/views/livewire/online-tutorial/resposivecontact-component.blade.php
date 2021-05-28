<div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        body {
            overflow: hidden;
        }
        section {
            display: flex;
            justify-content:center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            width: 100%;
            background: #001923;
        }
        section::before {
            content: "";
            position:absolute;
            width: 400px;
            height: 400px;
            background: linear-gradient(#ffeb2b,#e91e63);
            border-radius: 50%;
            transform: translate(-420px,-180px);
        }
        section::after {
            content: "";
            position:absolute;
            width: 350px;
            height: 350px;
            background: linear-gradient(#2196f3,#83d8ff);
            border-radius: 50%;
            transform: translate(400px,180px);
        }
        .container {
            position: relative;
            z-index: 1000;
            width: 100%;
            max-width: 1000px;
            padding: 50px;
            background: rgba(255,255,255, 0.1);
            box-shadow: 0 25px 45px rgba(255,255,255, 0.1);
            border: 1px solid rgba(255,255,255, 0.25);
            border-right: 1px solid rgba(255,255,255, 0.1);
            border-bottom: 1px solid rgba(255,255,255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            backdrop-filter: blur(25px);
        }
        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: -40%;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255, 0.05);
            pointer-events: none;
            transform: skewX(-15deg);
        }
        .container h2 {
            width: 100%;
            text-align: center;
            color: #fff;
            font-size:36px;
            margin-bottom: 20px;
        }
        .container .row100 {
            position: relative;
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
        }
        .container .row100 .col{
            position: relative;
            width: 100%;
            padding: 0 10px;
            margin: 30px 0 20px;
        }
        .container .row100 .col .inputBox {
            position: relative;
            width: 100%;
            height: 40px;
            color: #fff;
        }
        
        .container .row100 .col .inputBox input,
        .container .row100 .col .inputBox textarea {
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            box-shadow: none;
            border: none;
            outline: none;
            font-size:15px;
            padding: 0 10px;
            z-index: 1;
            color: #000;
        }
        .container .row100 .col .inputBox .text {
            position: absolute;
            top: 0;
            left: 0;
            line-height: 40px;
            font-size: 18px;
            padding: 0 10px;
            display: block;
            transition: 0.5s;
            pointer-events: none;
        }
        .container .row100 .col .inputBox input:focus + .text,
        .container .row100 .col .inputBox input:valid + .text,
        .container .row100 .col .inputBox textarea:focus + .text,
        .container .row100 .col .inputBox textarea:valid + .text{

            top: -35px;
            left: -10px;
        }
        .container .row100 .col .inputBox .line {
            position: absolute;
            bottom: 0;
            display: block;
            width: 100%;
            height: 2px;
            background:#fff;
            transition: 0.5s;
            border-radius: 2px;
            pointer-events: none;
        }

        .container .row100 .col .inputBox .line.active {
            background: #df2029;
        }
        .container .row100 .col .inputBox .line.correct {
            background: #04fd64;
        }
         
        .container .row100 .col .inputBox input:focus ~ .line,
        .container .row100 .col .inputBox input:valid ~ .line{
            height: 100%;
        }
        .container .row100 .col .inputBox.textarea {
            position: relative;
            width: 100%;
            height: 100px;
            padding: 10px 0;
        }
        .container .row100 .col .inputBox textarea:focus ~ .line,
        .container .row100 .col .inputBox textarea:valid ~ .line{
            height: 100%;
        }
        .container .row100 .col input[type="submit"]
        {
            border: none;
            padding: 10px 40px;
            cursor: pointer;
            outline: none;
            background: #fff;
            color: #000;
            font-weight: 600;
            font-size: 18px;
            border-radius:2px;
        }
        
        .alert{
            width: 100%;
            height: 50px;
            background:#2196f3;
            color: #fff;
            text-align: center;
            font-size:18px;
            font-weight: 600;
        }
        .text-danger {
            color: red;
        }
        
        @media (max-width:768px)
        {
            section::before {
            transform: translate(-200px,-180px);
            } 
            section::after 
            {
            transform: translate(220px,180px);
            } 
            .container
            {
                padding: 20px;
            } 
            .container h2 {
                font-size: 28px;
            }
        }
    </style>

    <section>
       
        <form wire:submit.prevent="addClient" id="formulario">
        <div class="container">
            @if(Session::has('message'))
            <div class="alert" role="alert">{{Session::get('message')}}</div>
            @endif
            <h2>Glossmorphism Contact Us Form</h2>
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="firstName"  wire:model="name" required="required">
                    <span class="text">First Name</span>
                    <span class="line" id="grupo__usuario"></span>
                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                   
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="lastname" required="required" wire:model="lastname">
                    <span class="text">last Name</span>
                    <span class="line" id="grupo__apellido"></span>
                    @error('lastname') <p class="text-danger">{{$message}}</p> @enderror
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="email" required="required" wire:model="email">
                    <span class="text">Email</span>
                    <span class="line" id="grupo__correo"></span>
                </div>
                @error('email') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="mobile" required="required" wire:model="mobile">
                    <span class="text">Mobile</span>
                    <span class="line" id="grupo__telefono"></span>
                </div>
                @error('mobile') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <div class="inputBox textarea">
                    <textarea wire:model="message" name="message" required="required"></textarea>
                    <span class="text">type You Message Here...</span>
                    <span class="line"></span>
                    @error('message') <p class="text-danger">{{$message}}</p> @enderror
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <input type="submit" value="send">
            </div>
        </div>
    </div> 
   </form> 
  
</section>

<script>
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

    const expresiones = {
 usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
 nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
 apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
 password: /^.{4,12}$/, // 4 a 12 digitos.
 correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
 telefono: /^\d{10,10}$/ // 7 a 14 numeros.
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case"firstName":
        validarCampo(expresiones.usuario,e.target,'usuario');
        break;
        case"lastname":
        validarCampo(expresiones.apellido,e.target,'apellido');
        break;
        case"email":
        validarCampo(expresiones.correo,e.target,'correo');
        break;
        case"mobile":
        validarCampo(expresiones.telefono,e.target,'telefono');
        break;
    }
}

const validarCampo = (exprecion,input,campo) => {
    if(exprecion.test(input.value)){
            document.getElementById(`grupo__${campo}`).classList.remove('active');
            document.getElementById(`grupo__${campo}`).classList.add('correct');
        }else {
           document.getElementById(`grupo__${campo}`).classList.add('active');
           document.getElementById(`grupo__${campo}`).classList.remove('correct'); 
        }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario );
    input.addEventListener('blur', validarFormulario );
});

formulario.addEventListener('submit',(e) => {
    e.preventDefault();
});
</script>
</div>
