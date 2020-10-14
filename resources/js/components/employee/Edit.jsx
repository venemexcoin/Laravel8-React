import React, {useEffect, useState} from 'react'

import employeeServices from '../../services/Employee'

const Edit = (props) => {

    const [id, setId] = useState(null);
    const [name, setName] = useState(null);
    const [email, setEmail] = useState(null);
    const [city, setCity] = useState(null);
    const [address, setAddress] = useState(null);
    const [phone, setPhone] = useState(null);
    const [rol, setRol] = useState(null);

    const [listRol, setListRol] = useState([]);

    useEffect(() => {

        async function fetchDataEmployee(){

            let id = props.match.params.id
            const res = await employeeServices.get(id);

            if(res.success) {

                console.log(res.data)
                const data = res.data
                setId(data.id)
                setName(data.name_lastname)
                setEmail(data.email)
                setCity(data.city)
                setAddress(data.direction)
                setPhone(data.phone)
                setRol(data.rol)

            } else {
                alert(res.message)
            }
        }

        fetchDataEmployee()

        async function fetchDataRol() {
            const res = await employeeServices.listRole();
            setListRol(res.data)
        }
 
        fetchDataRol();
        
    }, []);

   const updateEmployee = async () => {

       const data = {
        id, name, email, city, address, phone, rol
       }

       const res = await employeeServices.update(data);

       if (res.success){
           alert(res.message)
       }else {
           alert(res.message)
       }
   }

    return (
        <div>
    <h4>Edit customer</h4>
    <hr/>
    <div className="row">
    <div className="col-md-6 mb-3">
        <label htmlFor="firstName">Name employee</label>
        <input type="text" 
        className="form-control"
        value={name}
        onChange={e => setName(e.target.value)}
        />
        </div>    
    </div>            
    <div className="row">
        <div className="col-md-6 mb-3">
            <label htmlFor="email">Email</label>
            <input type="email" 
            className="form-control"
            placeholder="you@exsample.com"
            value={email}
            onChange={e => setEmail(e.target.value)}
            />
        </div>
    </div>

    <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="phone">City {city}</label>
                <select id="inputState" className="form-control" onClick={((e) => setCity(e.target.value))}
                value={city}
                onChange={e => setCity(e.target.value)}
                >
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
            <input type="text" 
            className="form-control"
            placeholder="1234 Main St"
            value={address}
            onChange={e => setAddress(e.target.value)}
            />
        </div>
        </div>
    <div className="row">
        <div className="col-md-6 mb-3">
            <label htmlFor="address">Phone</label>
            <input type="phone" 
            className="form-control"
            placeholder="1234567890"
            value={phone}
            onChange={e => setPhone(e.target.value)}
            />
        </div>
    </div>
    
    <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="phone">Rol {rol}</label>
                    <select id="inputState" className="form-control" onClick={((e) => setRol(e.target.value))}
                    value={rol}
                    onChange={e => setRol(e.target.value)}
                    >
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
            <button className="btn btn-primary btn-block" 
            type="submit"
            onClick={() => updateEmployee()}
            >
            Save 
            </button>
        </div>
    </div>

    </div>
    )
}

export default Edit
