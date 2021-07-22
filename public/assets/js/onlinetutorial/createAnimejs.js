/* now, split text into words */

const text = document.querySelector('.text')
text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>")

anime.timeline({
    loop: true
})

.add({
    targets: '.text span',
    translateY: [-600, 0],  //[start value, end value]
    scale: [10,1],          //[start value, end value]
    opacity: [0,1],         //[start value, end value]
    easing :"easeOutExpo",  //[start value, end value]
    duration: 1500,
    delay: anime.stagger(100),
})

.add({
    targets: '.text span',
    translateX: [0, -1000],  //[start value, end value]
    scale: [1,1],          //[start value, end value]
    opacity: [1,0],         //[start value, end value]
    easing :"easeOutExpo",  //[start value, end value]
    duration: 2000,
    delay: anime.stagger(100),
})

.add({
    targets: '.text span',
    translateX: [1000, 0],  //[start value, end value]
    scale: [1,1],          //[start value, end value]
    opacity: [0,1],         //[start value, end value]
    easing :"easeOutExpo",  //[start value, end value]
    duration: 2000,
    delay: anime.stagger(100),
})