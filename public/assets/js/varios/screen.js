console.log('conectado')

const amburge = document.getElementById('hamburger-content')
const close = document.getElementById('close')
const menu = document.getElementById('menu')



amburge.addEventListener('click', () => {
    menu.classList.toggle('open');
    document.getElementById('tarbtc').style.display="none";
    
})

close.addEventListener('click', () => {
    menu.classList.remove('open');
    document.getElementById('tarbtc').style.display="block";
   
})
