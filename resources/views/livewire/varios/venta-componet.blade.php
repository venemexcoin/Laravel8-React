<div>
    <style>
        .ventas:hover {
            background: rgb(65, 245, 83);
            color: #fff;
        }
        .card-body {
            filter: contrast(50%) blur(1px) 
        }
        .card-body:hover {
            filter: none;
        }
    </style>
    <div class="container" style="padding:60px 0;">
        <div class="row">
            <div class="col-md-3">

                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Ventas</h3>
                    </div>
                    <div class="card-body">
                      <!-- /input-group -->
                      <strong>Cantidad en critomonedas</strong>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button type="button" class="btn btn-secondary"><i class="fab fa-bitcoin"></i></button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                      </div>
                      <!-- /input-group -->
                      
                      <strong>Precio a la Venta</strong>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button type="button" class="btn btn-secondary"><i class="fas fa-dollar-sign"></i></button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                      </div>
                      <button class="btn-block btn-sm ventas">Enviar</button>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
   
