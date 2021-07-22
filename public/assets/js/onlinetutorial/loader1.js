

const hide = document.getElementById("hide")

let intervalId 

    const tiempo = () => {
        intervalId = setTimeout(() =>  {
            hide.classList.add('active')
        }, 11000) 
    }

    tiempo();