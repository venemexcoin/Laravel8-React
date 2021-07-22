const formularioLogin = document.getElementById('formularioLogin')
const formularioRes   = document.getElementById('formularioRes')

const inputs = document.querySelectorAll('#formularioLogin input')
const inputs1 = document.querySelectorAll('#formularioRes input')


function toggleForm() {
    container = document.querySelector('.container')
    container.classList.toggle('active')
}

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
    usuario: false,
    password: false,
    usuarioRed: false,
    emailRed:   false,
    passRed:    false
}



/* validacion del formulario de register */

const validarFormReg = (e) => {
    switch (e.target.name){
        case "loginName":
            validarCampos(expresiones.usuario, e.target, 'usuario')
        break
        case "loginPass":
            validarCampos(expresiones.password, e.target, 'password')
        break
        case "regname":
            validarCampos(expresiones.usuario, e.target, 'usuarioRed')
        break
        case "regemail":
            validarCampos(expresiones.correo, e.target, 'emailRed')
        break
        case "regpass":
            validarCampos(expresiones.password, e.target, 'passRed')
            validarPassword2()
        break
        case "regpass2":
                validarPassword2()
        break
    }
}

const validarCampos = (expresion, input, campo) => {

    if(expresion.test(input.value)){

        document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.remove('formulario__input-error-active')
        document.querySelector(`#grupo_${campo} .formulario__input`).classList.remove('formulario__input-active')
       campos[campo] = true
     }else {
         document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.add('formulario__input-error-active')
         document.querySelector(`#grupo_${campo} .formulario__input`).classList.add('formulario__input-active') 
         setTimeout(() => {
            document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.remove('formulario__input-error-active')
            document.querySelector(`#grupo_${campo} .formulario__input`).classList.remove('formulario__input-active')
         },5000)
         campos[campo] = false 
     }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormReg )
    input.addEventListener('blur', validarFormReg )
})

inputs1.forEach((input) => {
    input.addEventListener('keyup', validarFormReg )
    input.addEventListener('blur', validarFormReg )
})

formularioRes.addEventListener('submit', (e) => {
    e.preventDefault()

    if(campos.usuarioRed && campos.emailRed && campos.passRed){
        formularioRes.reset()

        document.getElementById('formulario__mensaje-exito2').classList.add('formulario__mensaje-exito-active')  
         setTimeout(() => {
            document.getElementById('formulario__mensaje-exito2').classList.remove('formulario__mensaje-exito-active')
         },3000)
         resetear()
         
    }else{
        document.getElementById('formulario__input-error2').classList.add('formulario__mensaje-active')
        setTimeout(() => {
            document.getElementById('formulario__input-error2').classList.remove('formulario__mensaje-active')
            formularioRes.reset()
         },3000)
        
    }
})

const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('password1')
    const inputPassword2 = document.getElementById('password2')

    if(inputPassword1.value !== inputPassword2.value){

        document.querySelector(`#grupo_passRed2 .formulario__input-error`).classList.add('formulario__input-error-active')
        campos['password'] = true
    }else {

        document.querySelector(`#grupo_passRed2 .formulario__input-error`).classList.remove('formulario__input-error-active')
        campos['password'] = false
    }
}

/* validacion de formulario de login */
inputs.forEach((input) => {
    input.addEventListener('keyup', () => {
        input.addEventListener('keyup', validarFormReg )
        input.addEventListener('blur', validarFormReg )
    })
})


formularioLogin.addEventListener('submit', (e) => {
    e.preventDefault()
    if(campos.usuario && campos.password){
        formularioLogin.reset()

        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-active')
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-active')
         },3000)
         resetear()
    } else{
        document.getElementById('formulario__input-error').classList.add('formulario__mensaje-active')
        setTimeout(() => {
            document.getElementById('formulario__input-error').classList.remove('formulario__mensaje-active')
            formularioLogin.reset()
         },3000)
         
    }
})

const resetear = () => {

    
    campos['usuario']    = false,
    campos['password']   = false,
    campos['usuarioRed'] = false,
    campos['emailRed']   = false,
    campos['passRed']    = false
    
}