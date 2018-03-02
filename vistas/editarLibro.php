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
                                        <th scope="col">ISBN</th>
                                        <th scope="col">Código Barras</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Autor</th>
                                        <th scope="col">Título Original</th>
                                        <th>Editorial</th>
                                        <th>Páginas</th>
                                        <th>Ubicación</th>
                                        <th>Carrera</th>
                                    </tr>
                                </thead>
                                <tbody id="datos">
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
                                                    <div class="row justify-content-end">
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