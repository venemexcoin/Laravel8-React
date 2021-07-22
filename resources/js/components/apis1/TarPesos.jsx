import React, {useState, useEffect, Fragment} from 'react'
import ReactDOM from 'react-dom'
import './css/tarpesos.css'

const TarPesos = () => {

    const [cotizacion, setCotizacion] = useState([]);

    useEffect(() => {
        obtenerCotizacion()
        tiempo()
        
    }, []);

    const obtenerCotizacion = async () => {
        const data = await fetch(
            'https://min-api.cryptocompare.com/data/price?fsym=MXN&tsyms=BTC,EUR,USD,ETH'
        )
        const pesos = await data.json()

        setCotizacion(pesos)
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
                     <h1 className="title-peso">
                         Base de trabajo un Peso Méxicano
                     </h1>
             </div>

        <div className="container-pesos">
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
                <p><i className="fas fa-dollar-sign"> Dolar</i></p>
                </div>
                <div className="container-item">
                    <p>{cotizacion.USD}</p>
                </div>
            </div>
        </div>
        </Fragment>
    )
}

export default TarPesos

if (document.getElementById('tarpesos')) {
    ReactDOM.render(<TarPesos />, document.getElementById('tarpesos'));
}