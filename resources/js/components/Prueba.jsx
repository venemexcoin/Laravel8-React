import React from 'react';
import ReactDOM from 'react-dom';

function Prueba() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">este es la pruba 1</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Prueba;

if (document.getElementById('example1')) {
    ReactDOM.render(<Prueba />, document.getElementById('example1'));
}