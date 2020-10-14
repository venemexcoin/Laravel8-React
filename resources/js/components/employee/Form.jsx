import React, { useEffect, useState } from 'react'
import employeeServices from "../../services/Employee"

const Form = () => {

    const [listRol, setListRol] = useState([]);

    const [name, setName] = useState(null);
    const [email, setEmail] = useState(null);
    const [city, setCity] = useState(null);
    const [address, setAddress] = useState(null);
    const [phone, setPhone] = useState(null);
    const [rol, setRol] = useState(null);

    useEffect(() => {
       async function fetchDataRol() {
           const res = await employeeServices.listRole();
           setListRol(res.data)
       }

       fetchDataRol();

    }, []);


    const saveEmplayee = async () => {
        const data = {
            name, email, city, address, phone, rol
        }

        const res = await employeeServices.save(data);

        if(res.success) {
            alert(res.message)
        }else {
            alert(res.message)
        }

        setName(null)
        setEmail(null)
        setCity(null)
         
    }


    return (
        <div>
            <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="firstName">Name employee</label>
                    <input type="text" 
                    className="form-control"
                    placeholder="Name"
                    onChange={((e)=> setName(e.target.value))}
                    />
                </div>
            </div>
            <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="email">Email</label>
                    <input type="text" 
                    className="form-control"
                    placeholder="you@example.com"
                    onChange={((e) => setEmail(e.target.value))}
                    />
                </div>
            </div>

            <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="phone">City {city}</label>
                <select id="inputState" className="form-control" onClick={((e) => setCity(e.target.value))}>
                        <option>Selecciona...</option>
                        <option value="Caracas">Caracas</option>
                        <option value="Maracay">Maracay</option>
                        <option value="VAlencia">Valencia</option>
                    </select>
                </div>
            </div>

            <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="address">Address</label>
                    <input type="" 
                    className="form-control"
                    placeholder="placeholder=1234 main St"
                    onChange={((e) => setAddress(e.target.value))}
                    />
                </div>
            </div>
            <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="address">Phone</label>
                    <input type="text" className="form-control"
                    placeholder="1234567890" 
                    onChange={((e) => setPhone(e.target.value))}
                    />
                </div>
            </div>
            <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="phone">Rol {rol}</label>
                    <select id="inputState" className="form-control" onClick={((e) => setRol(e.target.value))}>
                        <option>Choose...</option>
                        {
                            listRol.map((itemselect) => {
                                return(
                                <option
                                value={itemselect.rol_id}
                                    key={ itemselect.rol_id }
                                >
                                    { itemselect.rol_name }</option>
                                )
                            })
                        }
                    </select>
                </div>
            </div>

            <div className="row">
                <div className="col-md-6 mb-3">
                    <button className="btn btn-primary btn-block" type="submit"
                    onClick={() => saveEmplayee()}
                    >Save</button>
                </div>
            </div>
        </div>
    )
}

export default Form
