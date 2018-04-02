<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Estadisticas</h1>
            <div class="row">
                <form id="formGeneral" class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4 offset-md-2">
                            <select class="form-control" id="metodo" required>
                                <option value="">--Selecciona una opción--</option>
                                <option value="1">Prestamos Generales</option>
                                <option value="2">Prestamos Usuarios por Carrera</option>
                                <option value="3">Prestamos Libros por Carrera</option>
                                <option value="4">Prestamos Libros por Tema General</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="form-control" id="periodo" required>
                                <option value="">--Selecciona una opción--</option>
                                <option value="mes">Mes</option>
                                <option value="year">Año</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 offset-md-1">
                            <label for="FeIni">Desde</label>
                            <input type="date" class="form-control" id="FeIni" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="FeTer">Hasta</label>
                            <input type="date" class="form-control" id="FeTer" required>
                        </div>
                        <div class="form-group col-md-2" style="margin-top: 28px;">
                            <button type="submit" class="btn btn-danger btn-block">Graficar</button>
                        </div>
                    </div>
                </form>
                <div class="col-md-12" id="graGeneral1"></div>
                <div style="padding-left: 150px;" class="col-md-12" id="graGeneral2"></div> 
            </div> 
        </div>
    </div>
</div>