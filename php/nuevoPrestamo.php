<?php
   include 'conexion.php';
    if(isset($_POST) && $_POST['tag']=='buscarUsuario'){
        $numControl = mysqli_real_escape_string($con,$_POST['numControl']);
        $sql = "SELECT * FROM prestatario,carrera,tipo_prestatario WHERE No_Control='$numControl' AND Carrera_FK=ID_Carrera
        AND Tipo_FK=ID_Tipo";
        $result = $con->query($sql);
        $respuesta = new StdClass();
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $respuesta->numControl = $row['No_Control'];
            $respuesta->alumno = $row['Nombres'] . " ". $row['ApellidoP'] . " " . $row['ApellidoM'];
            $respuesta->carrera = $row['Carrera'];
            $respuesta->tipo = $row['Tipo'];
            $respuesta->id = $row['ID_Prestatario'];
            echo json_encode($respuesta);
        }else{
            echo 0;
        }
    }
    if(isset($_POST) && $_POST['tag']=='buscarLibro'){
        $codigo = mysqli_real_escape_string($con,$_POST['codigo']);
        $sql = "SELECT * FROM libros_detalle,libros WHERE Libros_FK=ID_Libro AND Codigo_Barras='$codigo'";
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
    if(isset($_POST) && $_POST['tag']=='insertarPrestamo'){
        $fechaInicio = mysqli_real_escape_string($con,$_POST['fechaInicio']);
        $fechaFin = mysqli_real_escape_string($con,$_POST['fechaFin']);
        $prestatario = mysqli_real_escape_string($con,$_POST['prestatario']);
        $sql = "INSERT INTO prestamos VALUES(null,'$fechaInicio','$fechaFin',$prestatario)";
        if($con->query($sql)){
            $last_id = $con->insert_id;
            echo $last_id;
        }else{
            echo 0;
        }
    }
    if(isset($_POST) && $_POST['tag']=='insertarDetalle'){
        $datosDetalle = $_POST['datos'];
        foreach($datosDetalle as $datos){
            $libro = $datos['libro'];
            $prestamo = $datos['prestamo'];
            $sql = "INSERT INTO prestamos_detalle VALUES(null,$libro,$prestamo)";
            $con->query($sql);
        }
        echo 1;
    }
?>