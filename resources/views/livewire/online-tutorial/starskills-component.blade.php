
<div>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #0a2b3c;
        }
        .container {
            position: relative;
            display: flex;
            justify-content:center;
            align-items: center;
            flex-direction:column;
            padding: 30px;
            border-radius: 10px;
            box-shadow: -1px -1px 2px rgba(255,255,255,0.25),
                        inset 2px 2px 5px rgba(255,255,255,0.25),
                        8px 30px 30px rgba(0,0,0,0.4),
                        inset -2px -2px 5px rgba(0,0,0,0.3);
        }
        .container h2 {
            margin-bottom: 10px;
            font-weight: 500;
            color: #1f9cff;
        }
        .container .skills {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
            padding-right: 10px; 
            box-shadow: -1px -1px 2px rgba(255,255,255,0.25),
                        inset 2px 2px 5px rgba(255,255,255,0.25),
                        8px 30px 30px rgba(0,0,0,0.4),
                        inset -2px -2px 5px rgba(0,0,0,0.3);
            transition: 0.5s;                                       
        }
        .container:hover .skills {
            filter: blur(5px);
            opacity: 0.2;
        }
        .container .skills:hover {
            filter: blur(0px);
            opacity: 1;
        }
        .container .skills h3 {
            min-width: 180px;
            text-align: right;
            padding-right: 20px;
            color: #fff;
            font-size: 20px;
            font-weight: 400;
            letter-spacing: 2px;
        }
        .container .skills .rating {
            position: relative;
            display: flex;
            margin: 10px 0;
            flex-direction: row-reverse;
        }
        .container .skills .rating input {
            position: relative;
            width: 20px;
            height: 40px;
            display: flex;
            justify-content:center;
            align-items: center;
            cursor: pointer;
            -webkit-appearance: none;
            appearance: none;
            overflow: hidden;
        }
        .container .skills .rating input::before {
            content: '\f005';
            position: absolute;
            font-family: fontAwesome;
            font-size: 34px;
            position: absolute;
            left: 4px;
            color: #030b0f;
            transition: 0.5s;
        }
        .container .skills .rating input:nth-child(2n+1)::before {
            right: 4px;
            left: initial;
        }
        .container .skills .rating input:hover ~ input::before,
        .container .skills .rating input:hover::before,
        .container .skills .rating input:checked ~ input::before,
        .container .skills .rating input:checked::before
        {
            color: #1f9cff;
        }
        .container .btn {
            margin-top: 30px;
            padding: 10px;
            width: 100%;
            background: #0a2b3c;
            border-radius: 5px;
            box-shadow: -1px -1px 2px rgba(255,255,255,0.25),
                        inset 2px 2px 5px rgba(255,255,255,0.25),
                        8px 30px 30px rgba(0,0,0,0.4),
                        inset -2px -2px 5px rgba(0,0,0,0.3);
            border: none;
            color: #fff;   
            font-size: 20px;
            font-weight: 400;
            letter-spacing: 2px;
            cursor: pointer;         
        }
        .container .btn:hover {
            background: #0b3f59;
        }
    </style>
    <form id="formulario">
    <div class="container">
        <h2>5 Star Skills Rating BAr</h2>
        <div class="skills">
            <h3 class="name">Html</h3>
            <div class="rating">
                <input type="radio" id="uno" name="html">
                <input type="radio" id="dos" name="html">
                <input type="radio" id="tres" name="html">
                <input type="radio" id="cuatro" name="html">
                <input type="radio" id="cinco" name="html">
                <input type="radio" id="seis" name="html">
                <input type="radio" id="siete" name="html">
                <input type="radio" id="ocho" name="html">
                <input type="radio" id="nueve" name="html">
                <input type="radio" id="dies" name="html">
            </div>
        </div>

        <div class="skills">
            <h3 class="name">CSS</h3>
            <div class="rating">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
            </div>
        </div>

        <div class="skills">
            <h3 class="name">JavaScript</h3>
            <div class="rating">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
            </div>
        </div>

        <div class="skills">
            <h3 class="name">Photoshop</h3>
            <div class="rating">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
                <input type="radio" name="photoshop">
            </div>
        </div>

        <div class="skills">
            <h3 class="name">Illustrator</h3>
            <div class="rating">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
                <input type="radio" name="illustrator">
            </div>
        </div>
        <button class="btn"  type="submit">Enviar</button>
    </div>
</form>

    <script>
        const formulario = document.getElementById('formulario');
        const inputs = document.querySelectorAll('#formulario input');

        const calificacion = (name) => {

            const res = () => {
                
            }

            let uno = document.getElementById('uno').checked;
            let dos = document.getElementById('dos').checked;
            let tres = document.getElementById('tres').checked;
            let cuatro = document.getElementById('cuatro').checked;
            let cinco = document.getElementById('cinco').checked;
            let seis = document.getElementById('seis').checked;
            let siete = document.getElementById('siete').checked;
            let ocho = document.getElementById('ocho').checked;
            let nueve = document.getElementById('nueve').checked;
            let dies = document.getElementById('dies').checked;

            const resuntado = new res(
                uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,dies
            );
            console.log(reultado)
           
            if(name == 'html'){
                console.log(uno);
                console.log(dos);
                console.log(tres);
                console.log(cuatro);
                console.log(cinco);
                console.log(seis);
                console.log(siete);
                console.log(ocho);
                console.log(nueve);
                console.log(dies);
            }
            
           }
        

        const validarFormulario = (e) => {
            switch(e.target.name){
               case "html": 
                calificacion( e.target.name);
            break;
            }
        }

        inputs.forEach((input) => {
            input.addEventListener('click', validarFormulario);
            input.addEventListener('blur', validarFormulario);
        });

        formulario.addEventListener('submit', (e) => {
            e.preventDefault();
            validarFormulario();        
        });
    </script>
</div>
