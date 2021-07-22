console.log('conectado')

const container = document.getElementById('container')
const sect = document.getElementById('sect')

setTimeout( () => {
    container.classList.add('cerrar')
    sect.classList.remove('active')
    sect.classList.add('inicio-web')

},7000)