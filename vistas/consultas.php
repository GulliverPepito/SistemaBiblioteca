<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                <input class="form-control form-control-lg" type="text" id="BusCon" placeholder="Buscar Libros">
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label class="radio-inline">
                      <input type="radio" name="filtro" id="Radio1" value="" checked> Todos
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="filtro" id="iRadio2" value="prestados"> Prestados
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="filtro" id="Radio3" value="disponibles"> Disponibles
                    </label> 
                    <label class="radio-inline">
                      <input type="radio" name="filtro" id="Radio4" value="vencidos"> Vencidos
                    </label>  
                </div>
                <div class="col-md-12">
                    <div id="TaCon" class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ISBN</th>
                                    <th>Código de barras</th>
                                    <th>Titulo</th>
                                    <th>Autor</th>
                                    <th>Tema</th>
                                    <th>Ubicación</th>
                                    <th>Carrera</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody id="verConsu">

                            </tbody>
                        </table>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>