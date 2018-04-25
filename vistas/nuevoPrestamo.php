<div class="col-md-12">
    <div class="card">
        <div class="card-body">
        <h1 class="text-center">Prestamo</h1>
            <form action="" id="buscarUsuarioPrestamoForm">
                <button type="submit" class='no'></button>
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <input class="form-control input-lg" type="text" id="buscarUsuarioPrestamo" placeholder="Buscar Usuario">
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="form-group col-md-12">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control-plaintext" name="fecha" id="fechaPrestamo" readonly>
                        </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="numeroControlPrestamo">Num. Control</label>
                        <input type="text" id="numeroControlPrestamo" name="numeroControlPrestamo" class="form-control prestamo" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="alumno">Alumno</label>
                        <input type="text" id="alumnoPrestamo" name="alumnoPrestamo" class="form-control prestamo" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="carreraPrestamo">Carrera</label>
                        <input type="text" id="carreraPrestamo" name="carreraPrestamo" class="form-control prestamo" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="tipoPrestamo">Tipo</label>
                        <input type="text" id="tipoPrestamo" name="tipoPrestamo" class="form-control prestamo" readonly>
                        <input type="text" id="idPrestatario" name="idPrestatario" class="form-control noMostrar prestamo" readonly>
                    </div>
                </div>
            </form>
            <form action="" id="buscarLibrosPrestamoForm">
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <input class="form-control input-lg" type="text" id="buscarLibrosPrestamo" placeholder="Buscar Libros" disabled>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <th>Codigo Barras</th>
                            <th>ISNB</th>
                            <th>ID.Libro</th>
                            <th>Titulo</th>
                            <th></th>
                        </thead>
                        <tbody id="tbDetallePrestamo">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <button type='button' class="btn btn-success" id="btnGuardarPrestamo"><i class="fa fa-floppy-o" aria-hidden="true" ></i> Guardar Prestamo</button>
                </div>
                <div class="col-md-6 offset-md-3">
                    <button type='button' class="btn btn-primary noMostrar" id="btnActualizarPrestamo"><i class="fa fa-undo" aria-hidden="true" ></i> Actualizar Prestamo</button>
                </div>
                <div class="col-md-6 offset-md-3">
                    <button type='button' class="btn btn-info noMostrar" id="btnRegresarPrestamo" style="margin-top:10px;"><i class="fa fa-undo" aria-hidden="true" ></i> Regresar Prestamo</button>
                </div>
            </div>
        </div>
    </div>
</div>