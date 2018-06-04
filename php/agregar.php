<?php 
	include("conexion.php");

	if($_POST["metodo"]=="1"){
		$sql="SELECT * FROM areas";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[ID_Areas]</td><td>$row[Area]</td><td><button class='ModiArea btn btn-warning' data-toggle='modal' data-target='#modalArea'><i class='fa fa-cog'></i></button></td><td><button class='BorraArea btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
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
					echo "<tr><td>$row[ID_Carrera]</td><td>$row[Carrera]</td><td>$row[Codigo]</td><td><button class='ModiCarre btn btn-warning' data-toggle='modal' data-target='#modalCarrera'><i class='fa fa-cog'></i></button></td><td><button class='BorraCarre btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
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
					echo "<tr><td>$row[ID_Tema_Gral]</td><td>$row[Tema]</td><td><button class='ModiTema btn btn-warning' data-toggle='modal' data-target='#modalTema'><i class='fa fa-cog'></i></button></td><td><button class='BorraTema btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
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
		$sql="SELECT ID_Ubicacion,Fila,Area,ID_Areas FROM ubicacion INNER JOIN areas ON Area_FK=ID_Areas";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[ID_Ubicacion]</td><td>$row[Fila]</td><td class='noMostrar'>$row[ID_Areas]</td><td>$row[Area]</td><td><button class='ModiUbicacion btn btn-warning' data-toggle='modal' data-target='#modalUbicacion'><i class='fa fa-cog'></i></button></td><td><button class='BorraUbicacion btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>";
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
	if($_POST['metodo']=='actualizarArea'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$area = mysqli_real_escape_string($con,$_POST['area']);
		$sql = "UPDATE areas SET Area='$area' WHERE ID_Areas=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
	if($_POST['metodo']=='actualizarCarrera'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$carrera = mysqli_real_escape_string($con,$_POST['carrera']);
		$codigo = mysqli_real_escape_string($con,$_POST['codigo']);
		$sql = "UPDATE carrera SET Carrera='$carrera', Codigo='$codigo' WHERE ID_Carrera=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
	if($_POST['metodo']=='actualizarTema'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$tema = mysqli_real_escape_string($con,$_POST['tema']);
		$sql = "UPDATE tema_general SET Tema='$tema' WHERE ID_Tema_Gral=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
	if($_POST['metodo']=='actualizarUbicacion'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$ubicacion = mysqli_real_escape_string($con,$_POST['ubicacion']);
		$area = mysqli_real_escape_string($con,$_POST['area']);
		$sql = "UPDATE ubicacion SET Fila=$ubicacion, Area_FK=$area WHERE ID_Ubicacion=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
	if($_POST['metodo']=='eliminarArea'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$sql = "DELETE FROM areas WHERE ID_Areas=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
	if($_POST['metodo']=='eliminarCarrera'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$sql = "DELETE FROM Carrera WHERE ID_Carrera=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
	if($_POST['metodo']=='eliminarTema'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$sql = "DELETE FROM tema_general WHERE ID_Tema_Gral=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
	if($_POST['metodo']=='eliminarUbicacion'){
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$sql = "DELETE FROM ubicacion WHERE ID_Ubicacion=$id";
		if($con->query($sql)==TRUE){
			echo 1;
		}else{
			echo 0;
		}
	}
?>