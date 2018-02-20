<div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center">Registrar Usuarios</h1>
                            <form id="FoUsu">
                                <div class="row">
                                    <div class="form-group col-md-4 offset-md-4">
                                        <select class="form-control" id="UsuTipo" name="usuario" required>
                            <option value="">-- Selecciona el tipo de usuario --</option>
                            <option value="Maestro">Maestro</option>
                            <option value="Alumno">Alumno</option>
                            <option value="Administrativos">Administrativo</option>
                          </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="UsuNombre">Nombre:</label>
                                        <input type="text" class="form-control" id="UsuNombre" name="nombre" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="UsuApPat">Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="UsuApPat" name="apellidoPaterno" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="UsuApMat">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="UsuApMat" name="apellidoMaterno" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UsuNoC">No. de Control:</label>
                                        <input type="number" class="form-control" id="UsuNoc" name="numControl" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UsuCa">Carrera:</label>
                                        <select class="form-control" id="UsuCa" name="carrera">
                            <option value="seleccione">Seleccione...</option>
                                  <option value="1">Ing. Sistemas Computacionales</option>
                                  <option value="2">Ing. Gestion Empresarial</option>
                                  <option value="3">Ing. Industrial</option>
                                  <option value="4">Ing. Industrias Alimentarias</option>
                                  <option value="5">Ing. Electromecanica</option>
                                  <option value="6">Ing. Ambiental</option>
                          </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-success btn-block btn-lg">Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
                
           
	
