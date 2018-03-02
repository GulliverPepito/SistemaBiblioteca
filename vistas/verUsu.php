 <div class="col-md-12">
    <div class="card-body">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
            <input class="form-control form-control-lg" type="text" id="BusUsu" placeholder="Buscar ususarios">
        </div>
    </div>
    <div class="col-md-12">
        <div id="TaEn">
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th></th>
                        <th>#</th>
                        <th>Nombre(s)</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Tipo</th>
                        <th>Carrera</th>
                        <th>Semestre</th>
                        <th>No. Control</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Domicilio</th>
                        <th>Colonia</th>
                        <th>Municipio</th>
                        <th>Estado</th>
                        <th>CP</th>
                        <th>Fecha de registro</th>
                    </tr>
                </thead>
                <tbody id="verUsu">

                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="ModalMoUsu" tabindex="-1" role="dialog" aria-labelledby="ModalMoUsu" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h3 style="width: 90%;" class="modal-title" id="ModalMoUsu">Modificar Usuario</h3>
            <button style="width: 10%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="FoMoUsu">
          <div class="modal-body">
            <div class="row justify-content-md-center">
                <div class="form-group col-md-5">
                    <input type="text" id="MUsuid" name="id" hidden>
                    <input type="text" id="MUsuMet" name="metodo" value="2" hidden>
                    <select class="MinpUsu form-control" id="MUsuTipo" name="usuario" required>
                        <option value="">-- Selecciona el tipo de usuario --</option>
                        <option value="1">Maestro</option>
                        <option value="2">Alumno</option>
                        <option value="3">Administrativo</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="UsuNombre">Nombre(s):</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuNombre" name="nombre" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="UsuApPat">Apellido Paterno:</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuApPat" name="apellidoPaterno" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="UsuApMat">Apellido Materno:</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuApMat" name="apellidoMaterno" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="UsuNoC">No. de Control:</label>
                    <input type="number" class="MinpUsu form-control" id="MUsuNoc" name="numControl" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="UsuCa">Carrera:</label>
                    <select class="MinpUsu form-control" id="MUsuCa" name="carrera" required>
                        <option value="">-- Selecciona la carrera --</option>
                        <option value="1">Ing. Sistemas Computacionales</option>
                        <option value="2">Ing. Gestion Empresarial</option>
                        <option value="3">Ing. Industrial</option>
                        <option value="4">Ing. Industrias Alimentarias</option>
                        <option value="5">Ing. Electromecanica</option>
                        <option value="6">Ing. Ambiental</option>
                        <option value="7">N/A</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="UsuSe">Semestre:</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuSe" name="semestre" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="UsuEm">Email:</label>
                    <input type="email" class="MinpUsu form-control" id="MUsuEm" name="email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="UsuEm">Telefono:</label>
                    <input type="tel" class="MinpUsu form-control" id="MUsuTe" name="telefono" required>
                </div>
                <div class="form-group col-md-5">
                    <label for="UsuDo">Domicilio:</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuDo" name="domicilio" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="UsuCo">Colonia:</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuCo" name="colonia" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="UsuMu">Municipio:</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuMu" name="municipio" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="UsuEst">Estado:</label>
                    <input type="text" class="MinpUsu form-control" id="MUsuEst" name="estado" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="UsuCP">CP:</label>
                    <input type="number" class="MinpUsu form-control" id="MUsuCP" name="cp" required>
                </div>
            </div>  
          </div>
          <div class="modal-footer text-left">
            <button style="width: 10%;" type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            <button style="width: 10%;" type="submit" class="btn btn-danger" id="GuMUsu" disabled>Guardar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>