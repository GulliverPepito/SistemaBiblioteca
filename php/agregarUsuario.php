<?php
    include 'conexion.php';
    if(isset($_POST)){
        $usuario = mysqli_real_escape_string($con,$_POST['usuario']);
        $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
        $apellidoPaterno = mysqli_real_escape_string($con, $_POST['apellidoPaterno']);
        $apellidoMaterno = mysqli_real_escape_string($con,$_POST['apellidoMaterno']);
        $numControl = mysqli_real_escape_string($con,$_POST['numControl']);
        $carrera = mysqli_real_escape_string($con, $_POST['carrera']);
        $sql = "INSERT INTO usuarios VALUES(null,'$usuario','$nombre','$apellidoPaterno','$apellidoMaterno',$numControl,$carrera)";
        if($con->query($sql) == TRUE){
            echo 1;
        }else{
            echo 0;
        }
    }
?>