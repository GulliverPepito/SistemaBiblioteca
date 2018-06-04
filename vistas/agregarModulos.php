<div class="card">
    <div class="card-body">
        <h1 class="text-center">Agregar Categorias</h1>
        <h2 class="text-center">Areas</h2>
        <form action="">
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="area">Area</label>
                    <input type="text" class='form-control' id='area' required>
                </div>
                <div class="col-md-2">
                    <button type='button' class='btn btn-danger' id="btnGuardarAreas" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
        <div class="table-responsive" style="width: 100%; height:300px; display:block;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Area</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tablaAreas">

            </tbody>
        </table>
        </div>
        <h2 class="text-center">Carreras</h2>
        <form action="">
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="carrera">Carrera</label>
                    <input type="text" class="form-control" id="Carrera" required>
                </div>
                <div class="form-group col-md-5">
                    <label for="codigo">Codigo</label>
                    <input type="text" class="form-control" id="codigo" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" id="agregarCarrera" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
        <div class="table-responsive" style="width: 100%; height:300px; display:block;">
            <table class="table table-striped" >
               <thead>
               <tr>
                    <th>#</th>
                    <th>Carrera</th>
                    <th>Codigo</th>
                    <th></th>
                </tr>
               </thead>
               <tbody id="tablaCarreras">

               </tbody>
            </table>
        </div>
        <h2 class="text-center">Temas Generales</h2>
        <form action="">
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="tema">Tema</label>
                    <input type="text" class="form-control" id="tema" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" id="agregarTema" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
        <div class="table-responsive" style="width: 100%; height:300px; display:block;">
        <table class="table table-striped" >
               <thead>
               <tr>
                    <th>#</th>
                    <th>Tema</th>
                    <th></th>
                </tr>
               </thead>
               <tbody id="tablaTemas">

               </tbody>
            </table>
        </div>
        <h2 class="text-center">Ubicacion</h2>
        <form action="">
                <div class="row">
                    <div class="form-group col-md-5">
                    <label for="area">Area</label>
                    <select name="" id="area1" class="form-control" required>
                        
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="ubicacion">Fila</label>
                    <input type="number" class="form-control" id="Ubicacion" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" id="agregarUbicacion" style="margin-top: 25px;"><i class="fa fa-save"></i> Guardar</button>
            </div>
                </div>
        </form>
        <div class="table-responsive" style="width: 100%; height:300px; display:block;">
        <table class="table table-striped" >
               <thead>
               <tr>
                    <th>#</th>
                    <th>Fila</th>
                    <th>Area</th>
                </tr>
               </thead>
               <tbody id="tablaUbicacion">

               </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="modalArea">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width:10%;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="area">Area</label>
                    <input type="text" class='form-control editar' id='areaEditar' required>
                </div>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:20%;">Cerrar</button>
        <button type="button" class="btn btn-danger guardar" style="width:20%;" disabled id="btnActualizarArea">Guardar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="modalCarrera">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Carrera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width:10%;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="">
            <div class="row">
            <div class="form-group col-md-6">
                    <label for="carrera">Carrera</label>
                    <input type="text" class="form-control editar" id="CarreraEditar" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="codigo">Codigo</label>
                    <input type="text" class="form-control editar" id="codigoEditar" required>
                </div>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:20%;">Cerrar</button>
        <button type="button" class="btn btn-danger guardar" style="width:20%;" disabled id="btnActualizarCarrera">Guardar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="modalTema">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Temas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width:10%;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="tema">Tema</label>
                    <input type="text" class="form-control editar" id="temaEditar" required>
                </div>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:20%;">Cerrar</button>
        <button type="button" class="btn btn-danger guardar" style="width:20%;" disabled id="btnActualizarTema">Guardar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="modalUbicacion">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Ubicacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width:10%;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="area">Area</label>
                    <select name="" id="area1Editar" class="form-control editar" required>
                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="ubicacion">Fila</label>
                    <input type="number" class="form-control editar" id="UbicacionEditar" required>
                </div>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:20%;">Cerrar</button>
        <button type="button" class="btn btn-danger guardar" style="width:20%;" disabled id="btnActualizarUbicacion">Guardar</button>
      </div>
    </div>
  </div>
</div>