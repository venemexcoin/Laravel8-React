function rain() {
    const image = document.getElementById('background')
    image.onload = function() {
        var rainyDay = new RainyDay({
            image: this,
        })
        RainyDay.rain([
            [5,2,2]
        ],0)
    }
    image.src = "{{asset('assets/img/galeria/Realistec/mpg1jpg')}}"
}

rain()