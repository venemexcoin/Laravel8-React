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
        break
        case "regpass2":
        
        break
    }
}

const validarCampos = (expresion, input, campo) => {

    if(expresion.test(input.value)){

        document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.remove('formulario__input-error-active')
        document.querySelector(`#grupo_${campo} .formulario__input`).classList.remove('formulario__input-active')
       
     }else {
         document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.add('formulario__input-error-active')
         document.querySelector(`#grupo_${campo} .formulario__input`).classList.add('formulario__input-active')  
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
})

/* validacion de formulario de login */
inputs.forEach((input) => {
    input.addEventListener('keyup', () => {
        input.addEventListener('keyup', validarFormReg )
        input.addEventListener('blur', validarFormReg )
    })
})


formularioLogin.addEventListener('submit', (e) => {
    e.preventDefault()
})
