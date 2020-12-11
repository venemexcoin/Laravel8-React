import React, {useState,useEffect} from 'react'
import ReactDOM from 'react-dom';
import './css/tarbtc.css'


const TarBtc = () => {

    const [cotizacion, setCotizacion] = useState([])

    useEffect(() => {
        obtenerCotizacion()
        tiempo()
    }, []);

    const obtenerCotizacion = async () => {
        const data = await fetch (
            'https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=ETH,EUR,USD,MXN'
        )
        const btc = await data.json()

        setCotizacion(btc)
    }

    let intervalId 

    const tiempo = () => {
        intervalId = setInterval(() =>  {
            obtenerCotizacion()
        }, 60000) 
    }

    return (
        <div className="container-btc">
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
            <div className="container-divi">
            <div className="title">
                <p><i className="fas fa-dollar-sign"> Pesos</i></p>
                </div>
                <div className="container-item">
                    <p>{cotizacion.MXN}</p>
                </div>
            </div>
        </div>
    )
}

export default TarBtc

if (document.getElementById('tarbtc')) {
    ReactDOM.render(<TarBtc />, document.getElementById('tarbtc'));
}
