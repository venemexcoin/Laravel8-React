console.log('este es el loader')

const loader = document.querySelector('.loader')
window.onload = () => {
  setTimeout(function () {
    loader.style.opacity = '0'
    setTimeout(function () {
      loader.style.display = 'none'
    }, 1800)
  }, 1800)
}