const baseUrl = 'https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=ETH,EUR,BTC,MXN,USD'
import axios from 'axios'
const cripto = {}

cripto.list = async () => {
    const urlCript = baseUrl
    const res = await axios.get(urlCript)
    .then(response=>{ return response.data;})
    .catch(error=>{return error; })
    return res
}