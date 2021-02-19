console.log('conectado')

const SkewedOne = document.querySelector('.SkewedOne')
const SkewedTwo = document.querySelector('.SkewedTwo')


window.addEventListener('scroll', () => {
    const value1 = -14 + window.scrollY/45;
    const value2 = 14 + window.scrollY/-45;
    SkewedOne.style.transform = "skewY(" + value1 + "deg)"
    SkewedTwo.style.transform = "skewY(" + value2 + "deg)"
})