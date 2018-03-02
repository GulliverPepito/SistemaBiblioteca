<?php
    include 'conexion.php';
    if(isset($_POST)){
        $isbn= mysqli_real_escape_string($con, $_POST['isbn']);
        $codigoBarras = mysqli_real_escape_string($con, $_POST['codigoBarras']);
        $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
        $autor = mysqli_real_escape_string($con, $_POST['autor']);
        $tituloOriginal = mysqli_real_escape_string($con, $_POST['tituloOriginal']);
        $anioEdicion = mysqli_real_escape_string($con, $_POST['anioEdicion']);
        $lugarEdicion = mysqli_real_escape_string($con, $_POST['lugarEdicion']);
        $editorial = mysqli_real_escape_string($con, $_POST['editorial']);
        $paginas = mysqli_real_escape_string($con, $_POST['paginas']);
        $ubicacion = mysqli_real_escape_string($con, $_POST['ubicacion']);
        $volumen = mysqli_real_escape_string($con, $_POST['volumen']);
        $numSerie = mysqli_real_escape_string($con, $_POST['numSerie']);
        $carrera = mysqli_real_escape_string($con, $_POST['carrera']);
        $url = mysqli_real_escape_string($con, $_POST['url']);
        $temaEspecifico = mysqli_real_escape_string($con, $_POST['temaEspecifico']);
        $temaGeneral = mysqli_real_escape_string($con, $_POST['temaGeneral']);
        $sql = "INSERT INTO libros VALUES(null,'$isbn','$codigoBarras','$titulo','$autor','$tituloOriginal',$anioEdicion,'$lugarEdicion','$editorial',$paginas,$ubicacion,$volumen,'$numSerie',$carrera,'$url','$temaEspecifico','$temaGeneral')";
        if($con->query($sql)==TRUE){
            echo 1;
        }else{
            echo 0;
        }
    }
?>