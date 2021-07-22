import React, {useState, useEffect, Fragment } from 'react'
import ReactDOM from 'react-dom'
import './css/tareth.css'

const TarEth = () => {

    const [cotizacion, setCotizacion] = useState([]);

    useEffect(() => {
        obtenerCotizacion()
        tiempo()
    }, []);

    const obtenerCotizacion = async () => {
        const data = await fetch(
            'https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=BTC,EUR,USD,MXN'
        )
            const eth = await data.json()

            setCotizacion(eth)
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
                     <h1 className="title-eth">
                         Base de trabajo un ETH
                     </h1>
             </div>
        <div className="container-eth">
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
                <p><i className="fas fa-dollar-sign"> Dolar</i></p>
                </div>
                <div className="container-item">
                    <p>{cotizacion.USD}</p>
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

export default TarEth

if (document.getElementById('tareth')) {
    ReactDOM.render(<TarEth />, document.getElementById('tareth'));
}

