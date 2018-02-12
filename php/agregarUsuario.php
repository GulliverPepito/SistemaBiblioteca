<?php
    include 'conexion.php';
    if(isset($_POST)){
        $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
        $apellidoPaterno = mysqli_real_escape_string($con, $_POST['apellidoPaterno']);
        $apellidoMaterno = mysqli_real_escape_string($con,$_POST['apellidoMaterno']);
        $numControl = mysqli_real_escape_string($con,$_POST['numControl']);
        $usuario = mysqli_real_escape_string($con,$_POST['usuario']);
        $carrera = mysqli_real_escape_string($con, $_POST['carrera']);
        $sql = "INSERT INTO usuarios VALUES(NULL,'$nombre','$apellidoPaterno','$apellidoMaterno',$numControl,'$usuario','',$carrera,'')";
        if($con->query($sql) == TRUE){
            echo 1;
        }else{
            echo 0;
        }
    }
?>