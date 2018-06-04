<?php 
	include("conexion.php");

	if($_POST["metodo"]=="1"){
		$sql="SELECT * FROM areas";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[ID_Areas]</td><td>$row[Area]</td><td><button class='ModiArea btn btn-warning'><i class='fa fa-cog'></i></button></td><td><button class='BorraArea btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
				}
			}else {
				echo "No se encontraron resultados";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="2"){
		$sql="SELECT * FROM carrera";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[ID_Carrera]</td><td>$row[Carrera]</td><td>$row[Codigo]</td><td><button class='ModiCarre btn btn-warning'><i class='fa fa-cog'></i></button></td><td><button class='BorraCarre btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
				}
			}else {
				echo "No se encontraron resultados";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="3"){
		$sql="SELECT * FROM tema_general";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[ID_Tema_Gral]</td><td>$row[Tema]</td><td><button class='ModiTema btn btn-warning'><i class='fa fa-cog'></i></button></td><td><button class='BorraTema btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
				}
			}else {
				echo "No se encontraron resultados";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="4"){
		$sql="SELECT ID_Ubicacion,Fila,Area FROM ubicacion INNER JOIN areas ON Area_FK=ID_Areas";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[ID_Ubicacion]</td><td>$row[Fila]</td><td>$row[Area]</td><td><button class='ModiTema btn btn-warning'><i class='fa fa-cog'></i></button></td><td><button class='BorraTema btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
				}
			}else {
				echo "No se encontraron resultados";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="5"){
		$sql="INSERT INTO areas VALUES('','$_POST[nombre]')";

		if($con->query($sql)){
		    echo "Registro guardado correctamente";
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="6"){
		$sql="INSERT INTO carrera VALUES('','$_POST[nombre]','$_POST[codigo]')";

		if($con->query($sql)){
		    echo "Registro guardado correctamente";
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="7"){
		$sql="INSERT INTO tema_general VALUES('','$_POST[nombre]')";

		if($con->query($sql)){
		    echo "Registro guardado correctamente";
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="8"){
		$sql="SELECT * FROM areas";
		$impri="<option value=''>Seleccione...</option>";
		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					$impri .= "<option value='$row[ID_Areas]'>$row[Area]</option>";
				}
			}
			echo $impri;
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=="9"){
		$sql="INSERT INTO ubicacion VALUES('','$_POST[fila]','$_POST[id]')";

		if($con->query($sql)){
		    echo "Registro guardado correctamente";
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}
?>