import React, {useState, useEffect, Fragment} from 'react'
import ReactDOM from 'react-dom'
import './css/tardolar.css'

const TarDolar = () => {

    const [cotizacion, setCotizacion] = useState([]);

    useEffect(() => {
        obtenerCotizacion()        
        tiempo()
    }, [])

    const obtenerCotizacion = async () => {
        const data = await fetch(
            'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BTC,EUR,ETH,MXN'
        )
        const dolar = await data.json()

        setCotizacion(dolar)
    }

    let intervalId

    const tiempo = () => {
        intervalId = setInterval(() => {
            obtenerCotizacion()
        }, 60000)
    }

    return (
        <Fragment>
            <div className="container-title">                   
                     <h1 className="title-dolar">
                         Base de trabajo un Dolar
                     </h1>
             </div>

        <div className="container-dolar">
        <div className="container-divi">
            <div className="title">
            <p><i className="fab fa-bitcoin"> Bitcoin</i></p>
            </div>
            <div className="container-item">
                <p>{cotizacion.BTC}</p>
            </div>
        </div>
        <div className="container-divi">
        <div className="title">
            <p><i className="fab fa-ethereum"> Ethereum</i></p>
            </div>
            <div className="container-item">
                <p>{cotizacion.ETH}</p>
            </div>
        </div>
        <div className="container-divi">
        <div className="title">
            <p><i className="fas fa-dollar-sign"> Pesos</i></p>
            </div>
            <div className="container-item">
                <p>{cotizacion.MXN}</p>
            </div>
        </div>
    </div>
        </Fragment>
    )
}

export default TarDolar

if (document.getElementById('tardolar')) {
    ReactDOM.render(<TarDolar />, document.getElementById('tardolar'));
}
