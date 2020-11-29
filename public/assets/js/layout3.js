console.log('conectado')

const page = document.querySelector('.page')

page.addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('shazam');
})