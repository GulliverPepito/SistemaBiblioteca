<?php
    include 'conexion.php';
    if(isset($_POST) && $_POST['tag']=="mostrarDatos"){
        $sql = "SELECT * FROM libros";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

                echo "<tr>
                <td colspan='12'>
                 <div class='card tinto'>
                     <div class='card-body'>
                <div class='libro'>
                <div class='row'>
                    <div class='col-md-6'>
                        <p>ISNB:<span>".$row['ISBN']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p>Codigo Barras:<span>".$row['Codigo_Barras']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p>Titulo:<span>".$row['Titulo']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p>Autor:<span>".$row['Autor']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p>Titulo Original:<span>".$row['Titulo_Original']."</span></p>
                    </div>
                    <div class='col-md-6'>
                         <p>Tema General:<span>".$row['Tema_General_FK']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Editorial:<span>".$row['Editorial']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Paginas:<span>".$row['Paginas']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Ubicacion:<span>".$row['Ubicacion_FK']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Carrera:<span>".$row['Carrera_FK']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Año de Edicion:<span>".$row['Anio_Edicion']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Lugar de Edicion:<span>".$row['Lugar_Edicion']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Volumen:<span>".$row['Volumen']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Numero de Serie:<span>".$row['Num_Serie']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Url:<span>".$row['URL']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Tema Especifico:<span>".$row['Tema_Especifico']."</span></p>
                    </div>
                </div>
        
                <form action='' id='libroAgregarMas'>
                        <div class='row'>
                            <div class='form-group col-md-5 agregar'>
                                <label for='isnbModificar' class='text-white'>ISNB</label>
                                <input type='text' class='form-control' id='isnbModificar' name='isnbModificar'>
                            </div>
                            <div class='col-md-5 form-group agregar'>
                                <label for='codigoBarrasModificar' class='text-white'>Codigo de Barras</label>
                                <input type='text' class='form-control' id='codigoBarrasModificar' name='codigoBarrasModificar'>
                            </div>
                            <div class='col-md-2 agregar'>
                                <button type='button' class='btn btn-primary' id='agregarMasModificar'><i class='fa fa-save'></i> Agregar</button>
                            </div>
                        </div>
                        
                </form>
                <div class='row'>
                    <div class='col-md-3'>
                        <button type='button' class='btn btn-info' id='agregarMas'><i class='fa fa-plus' aria-hidden='true'></i> Agregar</button>
                    </div>
                    <div class='col-md-3'>
                        <button type='button' class='btn btn-primary' id='btnEditar'><i class='fa fa-cog' aria-hidden='true'></i> Editar</button>
                    </div>
                    <div class='col-md-3'>
                        <button type='button' class='btn btn-danger' id='btnEliminar'><i class='fa fa-trash' aria-hidden='true'></i> Eliminar</button>
                    </div>
                    <div class='col-md-3'>
                        <button type='button' class='btn btn-warning' id='btnVerMas'><i class='fa fa-plus' aria-hidden='true'></i> Ver Mas</button>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </td>
                </tr>";
            }
        }
    }
?>