<div class="col-md-12">
<div class="card">
    <div class="card-body">
    <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input class="form-control input-lg" type="text" id="BuscaLibro" placeholder="Buscar libros">
                    </div>
                </div>
        </div>
        <div class="row">
                    <div class="col-md-12">
                        <div id="TLibros" class="tabla">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Autor</th>
                                        <th scope="col">Título Original</th>
                                        <th>Editorial</th>
                                        <th>Páginas</th>
                                        <th>Ubicación</th>
                                        <th>Carrera</th>
                                    </tr>
                                </thead>
                                <tbody id="datosEditarLibros">
                                    <tr>
                                       <td colspan="12">
                                        <div class="card tinto">
                                            <div class="card-body ">
                                                <div class="libro">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>ISNB:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Codigo Barras:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>Titulo:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Autor:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>Titulo Original:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <p>Tema General:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Editorial:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Paginas:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Ubicacion:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Carrera:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Año de Edicion:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Lugar de Edicion:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Volumen:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Numero de Serie:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Url:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="noMostrar">Tema Especifico:</p>
                                                        </div>
                                                    </div>
                                            
                                                    <form action="" id="libroAgregarMas">
                                                            <div class="row">
                                                                <div class="form-group col-md-5 agregar">
                                                                    <label for="isnbModificar" class="text-white">ISNB</label>
                                                                    <input type="text" class="form-control" id="isnbModificar" name="isnbModificar">
                                                                </div>
                                                                <div class="col-md-5 form-group agregar">
                                                                    <label for="codigoBarrasModificar" class="text-white">Codigo de Barras</label>
                                                                    <input type="text" class="form-control" id="codigoBarrasModificar" name="codigoBarrasModificar">
                                                                </div>
                                                                <div class="col-md-2 agregar">
                                                                    <button type="button" class="btn btn-primary" id="agregarMasModificar"><i class="fa fa-save"></i> Agregar</button>
                                                                </div>
                                                            </div>
                                                            
                                                    </form>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-info" id="agregarMas"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-primary" id="btnEditar"><i class="fa fa-cog" aria-hidden="true"></i> Editar</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-danger" id="btnEliminar"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-warning" id="btnVerMas"><i class="fa fa-plus" aria-hidden="true"></i> Ver Mas</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>  
</div>
</div>
<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="ModalMoUsu" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h3 style="width: 90%;" class="modal-title" id="ModalMoUsu">Modificar Libro</h3>
            <button style="width: 10%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="" id="formEditarLibro">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                    <br>
                                        <label for="idEditar">ID:</label>
                                        <input type="text" class="form-control-plaintext formEditar" name="idEditar" id="idEditar" require readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="titulo">Titulo</label>
                                        <input type="text" class="form-control formEditar" name="tituloEditar" id="tituloEditar" require>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="autor">Autor</label>
                                        <input type="text" class="form-control formEditar" name="autorEditar" id="autorEditar" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tituloOriginal">Titulo Original</label>
                                        <input type="text" class="form-control formEditar" name="tituloOriginalEditar" id="tituloOriginalEditar" require>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="anioEdicion">Año de Edicion</label>
                                        <input type="number" class="form-control formEditar" name="anioEdicionEditar" id="anioEdicionEditar" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lugarEdicion">Lugar de Edicion</label>
                                        <input type="text" class="form-control" name="lugarEdicionEditar" id="lugarEdicionEditar" require>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="editorial">Editorial</label>
                                        <input type="text" class="form-control formEditar" name="editorialEditar" id="editorialEditar" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="paginas">Paginas</label>
                                        <input type="number" class="form-control formEditar" name="paginasEditar" id="paginasEditar" require>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="ubicacion">Ubicacion</label>
                                        <select name="ubicacionEditar" id="ubicacionEditar" class="form-control formEditar">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="volumen">Volumen</label>
                                        <input type="number" class="form-control formEditar" name="volumenEditar" id="volumenEditar" require>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="numSerie">Numero de Serie</label>
                                        <input type="text" class="form-control formEditar" name="numSerieEditar" id="numSerieEditar" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="carrera">Carrera</label>
                                        <select name="carreraEditar" id="carreraEditar" class="form-control formEditar">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="url">Url</label>
                                        <input type="url" class="form-control formEditar" name="urlEditar" id="urlEditar">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="temaGeneral">Tema General</label>
                                        <select name="temaGeneralEditar" id="temaGeneralEditar" class="form-control formEditar">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="temaEspecifico">Tema Especifico</label>
                                        <input type="text" class="form-control formEditar" name="temaEspecificoEditar" id="temaEspecificoEditar">
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <input type='text' name='tag' value='actualizar' class='no'>
                                    </div>
                                </div>
                            </form>
          <div class="modal-footer text-left">
            <button style="width: 10%;" type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            <button style="width: 10%;" type="submit" class="btn btn-danger" id="GuardarLibro" disabled>Guardar</button>
          </div>
        </div>
      </div>
    </div>
</div>
