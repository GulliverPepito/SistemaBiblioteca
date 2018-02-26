<?php
    include 'conexion.php';
    if(isset($_POST)){
        $sql = "INSERT INTO prestatario VALUES(NULL,'$_POST[nombre]','$_POST[apellidoPaterno]','$_POST[apellidoMaterno]','$_POST[carrera]','$_POST[semestre]','$_POST[usuario]','$_POST[numControl]','$_POST[email]','$_POST[telefono]','$_POST[domicilio]','$_POST[colonia]','$_POST[municipio]','$_POST[estado]','$_POST[cp]',NOW())";
        if($con->query($sql)){
            echo "El usuarios se ha guardado";
        }else{
            echo "Error: ".mysqli_error($con);
        }
    }
?>