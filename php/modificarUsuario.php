<?php
    include 'conexion.php';
    if(isset($_POST)){
    	if($_POST["metodo"]=="1"){
    		$sql = "SELECT ID_Prestatario, Nombres, ApellidoP, ApellidoM, ID_Carrera, Carrera, Semestre, ID_Tipo, Tipo, No_Control, Email, Telefono, Domicilio, Colonia, Municipio, Estado, CP, DATE_FORMAT(Fecha_Re, '%d-%m-%Y %r') AS Fecha FROM prestatario INNER JOIN carrera ON Carrera_FK=ID_Carrera INNER JOIN tipo_prestatario ON Tipo_FK=ID_Tipo WHERE CONCAT(Nombres, ApellidoP, ApellidoM, Carrera, Semestre, Tipo, No_Control, Email, Telefono, Domicilio, Colonia, Municipio, Estado, CP, DATE_FORMAT(Fecha_Re, '%d-%m-%Y %r')) LIKE '%$_POST[busca]%'";
		        if($res=$con->query($sql)){
		        	if ($res->num_rows > 0) {
					    while($row = $res->fetch_assoc()) {
					        echo "<tr><td><button type='button' class='ModiUsu btn btn-warning' data-toggle='modal' data-target='#ModalMoUsu'><i class='fa fa-cog' aria-hidden='true'></i></button><button class='BorraUsu btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button></td><td>$row[ID_Prestatario]</td><td>$row[Nombres]</td><td>$row[ApellidoP]</td><td>$row[ApellidoM]</td><td><span hidden>$row[ID_Tipo]</span>$row[Tipo]</td><td><span hidden>$row[ID_Carrera]</span>$row[Carrera]</td><td>$row[Semestre]</td><td>$row[No_Control]</td><td>$row[Email]</td><td>$row[Telefono]</td><td>$row[Domicilio]</td><td>$row[Colonia]</td><td>$row[Municipio]</td><td>$row[Estado]</td><td>$row[CP]</td><td>$row[Fecha]</td></tr>";
					    }
					} else {
					    echo "0 results";
					}
		        }else{
		            echo "Error: ".mysqli_error($con);
		        }
		        $con->close();
    	}

    	if($_POST["metodo"]=="2"){
    		$sql = "UPDATE prestatario SET Nombres='$_POST[nombre]', ApellidoP='$_POST[apellidoPaterno]', ApellidoM='$_POST[apellidoMaterno]', Carrera_FK='$_POST[carrera]', Semestre='$_POST[semestre]', Tipo_FK='$_POST[usuario]', No_Control='$_POST[numControl]', Email='$_POST[email]', Telefono='$_POST[telefono]', Domicilio='$_POST[domicilio]', Colonia='$_POST[colonia]', Municipio='$_POST[municipio]', Estado='$_POST[estado]', CP='$_POST[cp]' WHERE ID_Prestatario='$_POST[id]'";
	        if($con->query($sql)){
	            echo "El usuarios se ha actualizado";
	        }else{
	            echo "Error: ".mysqli_error($con);
	        }
    	}

    	if($_POST["metodo"]=="3"){
    		$sql = "DELETE FROM prestatario WHERE ID_Prestatario='$_POST[id]'";
	        if($con->query($sql)){
	            echo "El usuarios se ha borrado";
	        }else{
	            echo "Error: ".mysqli_error($con);
	        }	
    	}	
    }
?>