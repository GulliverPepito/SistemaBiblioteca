<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                <input class="form-control form-control-lg" type="text" id="BusCon" placeholder="Buscar ususarios">
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Todos
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Prestados
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Disponibles
                    </label> 
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option4"> Vencido
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