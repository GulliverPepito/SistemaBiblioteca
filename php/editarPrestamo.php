<?php
    include 'conexion.php';
    date_default_timezone_set('UTC');
    if(isset($_POST) && $_POST['tag']=='mostrarPrestamos'){
        $sql = "SELECT * FROM prestamos INNER JOIN prestatario ON Prestatario_FK=ID_Prestatario";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $alumno = $row['Nombres']." ".$row['ApellidoP']." ".$row['ApellidoM'];
                $status = "";
                $button = "";
                $button2 = "<button type='button' class='btn btn-danger eliminarPrestamo' id='btnEliminarPrestamo'><i class='fa fa-trash' aria-hidden='true'></i> Eliminar</button>";
                if($row['status']==0){
                    $status = "Devuelto";
                    $button = "<button type='button' class='btn btn-primary editarPrestamo' id='btnEditarPrestamo' disabled><i class='fa fa-cog' aria-hidden='true'></i> Editar</button>";
                }
                if($row['status']==1){
                    $status = "Activo";
                    $button = "<button type='button' class='btn btn-primary editarPrestamo' id='btnEditarPrestamo'><i class='fa fa-cog' aria-hidden='true'></i> Editar</button>";
                }
                if($row['status']==2){
                    $status = "Pagado";
                    $button = "<button type='button' class='btn btn-primary editarPrestamo' id='btnEditarPrestamo' disabled><i class='fa fa-cog' aria-hidden='true'></i> Editar</button>";
                }
                $hoy = date('Y-m-d');
                if($hoy>$row['Fecha_Fin'] && $row['status']==1){
                    $status = "Vencido";
                    $button = "<button type='button' class='btn btn-success pagarPrestamo' id='btnPagarPrestamo' data-toggle='modal' data-target='#modalPagarAdeudo'><i class='fa fa-credit-card' aria-hidden='true'></i> Pagar Adeudo</button>";
                    $button2 = "<button type='button' class='btn btn-danger eliminarPrestamo' id='btnEliminarPrestamo' disabled><i class='fa fa-trash' aria-hidden='true'></i> Eliminar</button>";
                }
                echo  "<tr>
                            <td>$row[ID_Prestamo]</td>
                            <td>$row[Fecha_Inicio]</td>
                            <td>$row[Fecha_Fin]</td>
                            <td>$alumno</td>
                            <td>$status</td>
                            <td>
                                $button
                            </td>
                            <td>
                                $button2
                            </td>
                        </tr>";
            }
        }
    }
    if(isset($_POST) && $_POST['tag']=='editarPrestamo'){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $sql = "SELECT * FROM prestamos,prestatario,tipo_prestatario,carrera  WHERE Prestatario_FK=ID_Prestatario AND ID_Prestamo=$id AND  Carrera_FK=ID_Carrera
         AND Tipo_FK=ID_Tipo";
        $result = $con->query($sql);
        $respuesta = new StdClass();
        if($result->num_rows > 0){
            if($row = $result->fetch_assoc()){
                $alumno = $row['Nombres']." ".$row['ApellidoP']." ".$row['ApellidoM'];
                $respuesta->numControl = $row['No_Control'];
                $respuesta->alumno = $alumno;
                $respuesta->carrera = $row['Carrera'];
                $respuesta->tipo = $row['Tipo'];
                echo json_encode($respuesta);
            }
        }
    }
    if(isset($_POST) && $_POST['tag']=='detallePrestamo'){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $sql = "SELECT * FROM prestamos_detalle,libros_detalle,libros WHERE Libro_FK=ID_Detalle AND Libros_FK=ID_Libro";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo " <tr>
                <td>$row[Codigo_Barras]</td>
                <td>$row[ISBN]</td>
                <td>$row[ID_Detalle]</td>
                <td>$row[Titulo]</td>
                <td><button type='button' class='btn btn-danger eliminarDetalleLibro'><i class='fa fa-trash' aria-hidden='true'></i> Eliminar</button></td>
                </tr>";
            }
        }
    }
    if(isset($_POST) && $_POST['tag']=='regresarPrestamo'){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $sql = "SELECT * FROM prestamos_detalle,libros_detalle WHERE Libro_FK=ID_Detalle AND Prestamo_FK=$id";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $sql2 = "UPDATE libros_detalle SET status=0 WHERE ID_Detalle=$row[Libro_FK]";
                $con->query($sql2);
            }
        }
        $sql3 = "UPDATE prestamos SET status=0 WHERE ID_Prestamo=$id";
        if($con->query($sql3)==TRUE){
            echo 1;
        }else{
            echo 0;
        }
    }
    if(isset($_POST) && $_POST['tag']=='eliminarPrestamo'){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $sql = "DELETE FROM prestamos_detalle WHERE  Prestamo_FK=$id";
        if($con->query($sql)){
            $sql2 = "DELETE FROM prestamos WHERE ID_Prestamo=$id";
            if($con->query($sql2)){
                echo 1;
            }
        }else{
            echo 0;
        }
    }
    if(isset($_POST) && $_POST['tag']=='actualizarPrestamo'){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $sql = "DELETE FROM prestamos_detalle WHERE  Prestamo_FK=$id";
        $datosDetalle = $_POST['datos'];
        if($con->query($sql)){
            foreach($datosDetalle as $datos){
                $libro = $datos['libro'];
                $prestamo = $datos['prestamo'];
                $sql2 = "INSERT INTO prestamos_detalle VALUES(null,$libro,$prestamo)";
                $con->query($sql2);
            }
            echo 1;
        }else{
            echo 0;
        }
    }
?>