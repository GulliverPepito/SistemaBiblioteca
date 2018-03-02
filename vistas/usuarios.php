<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Registrar Usuarios</h1>
            <form id="FoUsu">
                <div class="row">
                    <div class="form-group col-md-4 offset-md-4">
                        <select class="inpUsu form-control" id="UsuTipo" name="usuario" required>
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
                        <input type="text" class="inpUsu form-control" id="UsuNombre" name="nombre" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="UsuApPat">Apellido Paterno:</label>
                        <input type="text" class="inpUsu form-control" id="UsuApPat" name="apellidoPaterno" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="UsuApMat">Apellido Materno:</label>
                        <input type="text" class="inpUsu form-control" id="UsuApMat" name="apellidoMaterno" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="UsuNoC">No. de Control:</label>
                        <input type="number" class="inpUsu form-control" id="UsuNoc" name="numControl" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="UsuCa">Carrera:</label>
                        <select class="inpUsu form-control" id="UsuCa" name="carrera" required>
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
                        <input type="text" class="inpUsu form-control" id="UsuSe" name="semestre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="UsuEm">Email:</label>
                        <input type="email" class="inpUsu form-control" id="UsuEm" name="email" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="UsuEm">Telefono:</label>
                        <input type="tel" class="inpUsu form-control" id="UsuTe" name="telefono" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="UsuDo">Domicilio:</label>
                        <input type="text" class="inpUsu form-control" id="UsuDo" name="domicilio" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="UsuCo">Colonia:</label>
                        <input type="text" class="inpUsu form-control" id="UsuCo" name="colonia" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="UsuMu">Municipio:</label>
                        <input type="text" class="inpUsu form-control" id="UsuMu" name="municipio" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="UsuEst">Estado:</label>
                        <input type="text" class="inpUsu form-control" id="UsuEst" name="estado" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="UsuCP">CP:</label>
                        <input type="number" class="inpUsu form-control" id="UsuCP" name="cp" required>
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
	
                
           
	
