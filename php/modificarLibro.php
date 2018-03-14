<?php
    include 'conexion.php';
    if(isset($_POST) && $_POST['tag']=="mostrarDatos"){
        $sql = "SELECT * FROM libros,ubicacion,carrera,tema_general WHERE Ubicacion_FK=ID_Ubicacion AND Carrera_FK=ID_Carrera AND Tema_General_FK=ID_Tema_Gral";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

                echo "<tr>
                <td colspan='12'>
                 <div class='card tinto'>
                     <div class='card-body'>
                <div class='libro'>
                <div class='row'>
                    <div class ='col-md-6'>
                        <p>ID: <span>$row[ID_Libro]</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p>Titulo: <span>".$row['Titulo']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p>Autor: <span>".$row['Autor']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p>Titulo Original: <span>".$row['Titulo_Original']."</span></p>
                    </div>
                    <div class='col-md-6'>
                         <p>Tema General: <span class='no'>$row[ID_Tema_Gral]</span> <span>".$row['Tema']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Editorial: <span>".$row['Editorial']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Paginas: <span>".$row['Paginas']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Ubicacion: <span>".$row['Fila']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Carrera: <span class='no'>$row[ID_Carrera]</span> <span>".$row['Carrera']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Año de Edicion: <span>".$row['Anio_Edicion']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Lugar de Edicion: <span>".$row['Lugar_Edicion']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Volumen: <span>".$row['Volumen']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Numero de Serie: <span>".$row['Num_Serie']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Url: <span>".$row['URL']."</span></p>
                    </div>
                    <div class='col-md-6'>
                        <p class='noMostrar'>Tema Especifico: <span>".$row['Tema_Especifico']."</span></p>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='detalle table-responsive noMostrar'>
                        <table class='table table-hover'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ISNB</th>
                                    <th>CodigoBarras</th>
                                </tr>
                            </thead>
                            <tbody id='detalleLibro'>
                    
                            </tbody>
                        </table>
                    </div>
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
                        <button type='button' class='btn btn-primary' id='btnEditar' data-toggle='modal' data-target='#modal'><i class='fa fa-cog' aria-hidden='true'></i> Editar</button>
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
    if(isset($_POST) && $_POST['tag']=='actualizar'){
        $id = mysqli_real_escape_string($con, $_POST['idEditar']);
        $titulo = mysqli_real_escape_string($con, $_POST['tituloEditar']);
        $autor = mysqli_real_escape_string($con, $_POST['autorEditar']);
        $tituloOriginal = mysqli_real_escape_string($con, $_POST['tituloOriginalEditar']);
        $anioEdicion = mysqli_real_escape_string($con, $_POST['anioEdicionEditar']);
        $lugarEdicion = mysqli_real_escape_string($con, $_POST['lugarEdicionEditar']);
        $editorial = mysqli_real_escape_string($con, $_POST['editorialEditar']);
        $paginas = mysqli_real_escape_string($con, $_POST['paginasEditar']);
        $ubicacion = mysqli_real_escape_string($con, $_POST['ubicacionEditar']);
        $volumen = mysqli_real_escape_string($con, $_POST['volumenEditar']);
        $numSerie = mysqli_real_escape_string($con, $_POST['numSerieEditar']);
        $carrera = mysqli_real_escape_string($con, $_POST['carreraEditar']);
        $url = mysqli_real_escape_string($con, $_POST['urlEditar']);
        $temaEspecifico = mysqli_real_escape_string($con, $_POST['temaEspecificoEditar']);
        $temaGeneral = mysqli_real_escape_string($con, $_POST['temaGeneralEditar']);
        $sql = "UPDATE libros SET Titulo='$titulo', Autor='$autor', Titulo_Original='$tituloOriginal',
        Anio_edicion=$anioEdicion, Lugar_Edicion='$lugarEdicion', Editorial='$editorial', 
        Paginas=$paginas, Ubicacion_FK=$ubicacion, Volumen=$volumen, Num_Serie='$numSerie',
        Carrera_FK=$carrera, URL='$url', Tema_General_FK=$temaGeneral, Tema_Especifico='$temaEspecifico'
         WHERE ID_Libro=$id";
        if($con->query($sql)==TRUE){
            echo 1;
        }else{
            echo 0;
        }
        
    }
    if(isset($_POST) && $_POST['tag']=='buscar'){

    }
    if(isset($_POST) && $_POST['tag']=='agregarDetalle'){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $isnb = mysqli_real_escape_string($con, $_POST['isnb']);
        $codioBarras = mysqli_real_escape_string($con, $_POST['codigoBarras']);
        $sql = "INSERT INTO libros_detalle VALUES(null,'$isnb','$codioBarras',$id)";
        if($con->query($sql)==TRUE){
            echo 1;
        }else{
            echo 0;
        }

    }
    if(isset($_POST) && $_POST['tag']=='mostrarDetalle'){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $sql = "SELECT * FROM libros_detalle WHERE Libros_FK=$id";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>
                        <td>$row[ID_Detalle]</td>
                        <td>$row[ISNB]</td>
                        <td>$row[Codigo_Barras]</td>
                     </tr>";
            }
        }
    }
?>