<div class="col-md-12">
    <div class="card">
        <div class="card-body">
        <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input class="form-control input-lg" type="text" id="buscarPrestamo" placeholder="Buscar libros">
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Vencimiento</th>
                            <th>Alumno</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tbPrestamos">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPagarAdeudo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="width: 90%;">Pagar Adeudo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 10%;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <h1 class='text-danger'>Deuda Total:$<span class='deuda'></span></h1>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 30%;">Cerrar</button>
        <button type="button" class="btn btn-success" style="width: 30%;" id="btnPagar"><i class='fa fa-credit-card' aria-hidden='true'></i> Pagar</button>
      </div>
    </div>
  </div>
</div>