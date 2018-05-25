<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                <input class="form-control form-control-lg" type="text" id="buscador" placeholder="Buscar Libros">
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div id="tablaBooks" class="table-responsive">
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="Books">

                            </tbody>
                        </table>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalImprimir" tabindex="-1" role="dialog" aria-labelledby="ModalImp" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="width: 90%;" class="modal-title" id="ModalImp">Imprimir Etiquetas</h3>
                <button style="width: 10%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="codigoPrincipal" name="codigoPrincipal" placeholder="Código principal">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="ejemplar" name="ejemplar" placeholder="Ejemplar">
                    </div>
                    <div class="form-group col-md-2">                        
                        <button value='' id="btnImprimirEtiquetas" class='btn btn-default btn-sm'>
                            <span class='fa fa-print'></span>
                        </button>                        
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button style="width: 20%;" type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>