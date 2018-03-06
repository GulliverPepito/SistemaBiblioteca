<?php
    include 'conexion.php';
    if(isset($_POST) && $_POST['tag']=='agregar'){
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
        $sql = "INSERT INTO libros VALUES(null,'$isbn','$codigoBarras','$titulo','$autor','$tituloOriginal',$anioEdicion,'$lugarEdicion','$editorial',$paginas,$ubicacion,$volumen,'$numSerie',$carrera,'$url','$temaGeneral','$temaEspecifico')";
        if($con->query($sql)==TRUE){
            echo 1;
        }else{
            echo 0;
        }
    }
    if(isset($_POST) && $_POST['tag']=='ubicacion'){
        $sql = "SELECT * FROM ubicacion";
        $select = $con->query($sql);
        if($select->num_rows > 0){
            echo "<option value='seleccione'>Seleccione...</option>";
            while($row = $select->fetch_assoc()){
                echo "<option value='$row[ID_Ubicacion]'>$row[Fila]</option>";
            }
        }
    }
    if(isset($_POST) && $_POST['tag']=='carrera'){
        $sql = "SELECT * FROM carrera";
        $select = $con->query($sql);
        if($select->num_rows > 0){
            echo "<option value='seleccione'>Seleccione...</option>";
            while($row = $select->fetch_assoc()){
                echo "<option value='$row[ID_Carrera]'>$row[Carrera]</option>";
            } 
        }
    }
    if(isset($_POST) && $_POST['tag']=='temaGeneral'){
        $sql = "SELECT * FROM tema_general";
        $select = $con->query($sql);
        if($select->num_rows > 0){
            echo "<option value='seleccione'>Seleccione...</option>";
            while($row = $select->fetch_assoc()){
                echo "<option value='$row[ID_Tema_Gral]'>$row[Tema]</option>";
            } 
        }
    }
?>