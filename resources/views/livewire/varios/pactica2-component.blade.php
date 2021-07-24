@push('title_base')
    Tarjeta
@endpush    
@push('styles')
 <style>
     @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

     * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: consolas;
     }
     body {
         display: flex;
         justify-content:center;
         align-items: center;
         min-height: 100vh;
         background: linear-gradient(#73c1ff, #fff);
     }
     .payment {
         position: relative;
         display: flex;
         justify-content:center;
         align-items:center;
         flex-direction: column; 
         padding: 0px;
         transition: 0.5s;
     }
     .payment:hover {
        padding: 40px;
     }
     .payment .bg {
         position: absolute;
         bottom:0;
         height: 70%;
         width: 100%;
         border-radius: 25px;
         background: linear-gradient(225deg,#2196f3,#ff4efd);
     }
     .payment .card {
        position: relative;
        width: 580px;
        height: 350px;
        background: #fcfcfc;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 6px 6px 12px rgba(0, 0, 0, 0.05);
        z-index: 1000;
        overflow: hidden;
        transform: translateY(120px);
        transition:0.5S;
     }
     .payment:hover .card {
        transform: translateY(0);
     }
     .payment .card::before {
         content: "";
         position: absolute;
         top: -50%;
         left: -20%;
         width: 500px;
         height: 500px;
         border-radius: 50%;
         background: linear-gradient(to bottom,rgba(0,0,0, 0.05), transparent);
         pointer-events: none;
     }
     .chip {
         position: absolute;
         max-width: 70px;
     }
      .logo {
         position: absolute;
         top: 130px;
         right: 40px;
         width: 60px;
         height: 60px;
     } 
     .logo img {
         width: 80px;
         
     }
     .bankName {
         color: #999;
         text-align: end;
         outline:none;
         width: 100%;
         font-size: 1.5em;
     }
     form {
         margin-top: 45px;
     }
     .inputBox {
         display:flex;
         flex-direction: column;
        margin-bottom: 20px;
     }
     .inputBox span {
         color: #089cff;
         font-size: 1.1em;
     }
     .inputBox input {
         border: none;
         outline: none;
         background: trasparente;
         font-size: 1.8em;
         color: #333;
         font-family: 'Share Tech Mono', monospace;
         text-transform: capitalize;
     }
     .fecha {
         display: flex;
         flex-direction: row;
     }
     .fecha input {
         width: 30px;
     }
     .fecha p {
        font-family: 'Share Tech Mono', monospace;
        font-size:22px;
        margin-top: 5px;
     }
     
     .group {
         width: 100%;
         display: flex;
         justify-content:space-between;
         align-items: center;
     }
     .group .inputBox:last-child {
        max-width: 60px;
     }
     .btn {
         position: relative;
         margin-top: 40px;
         padding: 15px 20px;
         border-radius: 5px;
         border: none;
         outline: none;
         background: #fff;
         color: #333;
         font-size: 1.5em;
         cursor: pointer;
         box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1)
     }
 </style>
@endpush
<div>
    <div class="payment" id="payment">
        <div class="bg"></div>
        <div class="card">
            <img src="{{asset('assets/img/galeria/3Dfalcom/img/chip-tarjeta.png')}}" alt="ChipCard" class="chip">
            <div class="logo" id="logo-marca">
                {{-- <img src="{{asset('assets/img/galeria/3Dfalcom/img/logos/visa.png')}}" alt="ChipCard" class="chip"> --}}
            </div>
            <form id="formulario-tarjeta" class="formulario-tarjeta">

                <h2 class="bankName" contenteditable="true">Nombre del Banco</h2>

                <div class="inputBox">
                    <span>Card No.</span>
                    <input type="text" id="inputNumero" placeholder="0123 5432 9876 3043" maxlength="19" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Card Holder</span>
                    <input type="text" class="nombre" id="inputNombre" placeholder="John Doe">
                </div>
                <div class="group">
                    <div class="inputBox">
                        <span>Valid Thru</span>
                        <div class="fecha">
                            <input type="text" placeholder="YY" maxlength="2">
                            <p>/</p>
                            <input type="text" placeholder="MM" maxlength="2">
                        </div>
                    </div>
                    <div class="inputBox">
                        <span>CCV</span>
                        <input type="text" placeholder="***" maxlength="3" id="inputCCv">
                    </div>
                </div>
            </form>
        </div>
        <button class="btn">Confirm and Pay</button>
    </div>
</div>
@push('scripts')
<script> 

    const payment = document.querySelector('#payment'),
    formulario = document.querySelector('#formulario-tarjeta'),
    nombreTarjeta = document.querySelector('#payment .nombre'),
    logoMarca = document.querySelector('#logo-marca');

    /* Input numero de tarjeta */
    formulario.inputNumero.addEventListener('keyup', (e) => {
        let valorInput = e.target.value;
        
        formulario.inputNumero.value = valorInput
        // Eliminar espacios en blanco
        .replace(/\s/g,"")
        //Eliminar letras 
        .replace(/\D/g,'')
        //Espaciado cada cuatro numeros
        .replace(/([0-9]{4})/g,'$1 ')
        //Elimina el ultimo espacio de
        .trim();

        if (valorInput == ''){
            logoMarca.innerHTML = '';
        }

        // Comprobacion de Visa o master
        if(valorInput[0] == 4){
            logoMarca.innerHTML = '';
            const imagen = document.createElement('img');
            imagen.src = 'http://crudlaravel8.test/assets/img/galeria/3Dfalcom/img/logos/visaC.png';  
            logoMarca.appendChild(imagen);          
        }else if(valorInput[0] == 5){
            logoMarca.innerHTML = '';
            const imagen = document.createElement('img');
            imagen.src = 'http://crudlaravel8.test/assets/img/galeria/3Dfalcom/img/logos/mastercard.png';  
            logoMarca.appendChild(imagen);
        }
    });
    /* Input nombre de tarjeta */
        formulario.inputNombre.addEventListener('keyup', (e) => {
            let valorInput = e.target.value
            
            formulario.inputNombre.value = valorInput.replace(/[0-9]/g, '')
        });

        // validacion de CCV

        formulario.inputCCv.addEventListener('keyup', (e) => {

            formulario.inputCCv.value = formulario.inputCCv.value.replace()
            .replace(/\s/g, '')
            .replace(/\D/g, '');
        });

</script>
@endpush
