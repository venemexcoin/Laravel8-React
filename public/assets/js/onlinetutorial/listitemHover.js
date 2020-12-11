const home = document.getElementById('home')
const ejercicio3 = document.getElementById('ejercicio3')

home.addEventListener('click', () => {
    console.log('le diste licki')
    location.href ="http://crudlaravel8.test/";
})

ejercicio3.addEventListener('click', () => {
    location.href ="http://crudlaravel8.test/panel3";
})