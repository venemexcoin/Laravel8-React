import React, { useEffect, useState } from 'react';
import employee from '../../services/Employee';

import employeeServices from "../../services/Employee"
import { Link } from 'react-router-dom'

function List(){

  const [listEmployee, setListEmployee] = useState([]);

  useEffect(() => {
    
    async function fetcDataEmployee() {
      const res = await employeeServices.listEmployee(); 
      setListEmployee(res.data);
    }

    fetcDataEmployee();

  }, []);

  const onClickDelete = async (i, id) => {
   
    var yes = confirm("Are you sure to delete this otems?");
    
    if (yes === true) {

      const res = await employeeServices.delete(id);

      if( res.success) {

        alert(res.message)

        const newList = listEmployee
        newList.splice(i,1);
        setListEmployee(newList)
        console.log(newList)

      } else {

        alert(res.message)
      }

     
    }
      
    
  }

  return (
    <section>
      <table className="table">
        <thead className="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Cyty</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Rol</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
            {
              listEmployee.map((item, i) => {
                return (
              <tr key={item.id}>
              <th scope="row">{i}</th>
                <td>{item.name_lastname}</td>
                <td>{item.email}</td>
                <td>{item.city}</td>
                <td>{item.direction}</td>
                <td>{item.phone}</td>
                <td>{item.rol}</td>
                <td>
                  <Link to={'/employee/edit/' + item.id} className="btn btn-light"> Edit </Link>
                  <a href="#" className="btn btn-danger"
                    onClick={() => onClickDelete(i,item.id)}                  
                  > Delete </a>
                </td>
                
                </tr>  
                )
              })
            }
            
          
        </tbody>
      </table>
    </section>
  )
}

export default List;