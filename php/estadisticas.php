<?php  
	require 'conexion.php';

	if($_POST["metodo"]=='1'){
		if($_POST["periodo"]=='mes'){
			$tipo='MONTH(Fecha_Inicio)';
		}else{
			$tipo='YEAR(Fecha_Inicio)';
		}
		$sql = "SELECT $tipo AS Tipo, COUNT(*) AS numero FROM prestamos WHERE Fecha_Inicio BETWEEN '$_POST[FeIni]' AND '$_POST[FeTer]' GROUP BY $tipo ORDER BY Fecha_Inicio ASC";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "$row[Tipo]*$row[numero]*";
				}
			}else {
				echo "0 results";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=='2'){
		$mas="";
		if($_POST["periodo"]=='mes'){
			$tipo='MONTH(Fecha_Inicio)';
		}else{
			$tipo='YEAR(Fecha_Inicio)';
		}
		$sql = "SELECT $tipo AS Tipo, COUNT(*) AS numero, Carrera FROM prestamos INNER JOIN prestatario ON Prestatario_FK=ID_Prestatario INNER JOIN carrera ON Carrera_FK=ID_Carrera WHERE Fecha_Inicio BETWEEN '$_POST[FeIni]' AND '$_POST[FeTer]' GROUP BY $tipo, Carrera ORDER BY Fecha_Inicio ASC";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					$mas .= "$row[Tipo]*$row[numero]*$row[Carrera]*";
				}

				$mas .= "/";

				$sql1 = "SELECT Carrera, COUNT(*) AS numero FROM prestamos INNER JOIN prestatario ON Prestatario_FK=ID_Prestatario INNER JOIN carrera ON Carrera_FK=ID_Carrera WHERE Fecha_Inicio BETWEEN '$_POST[FeIni]' AND '$_POST[FeTer]' GROUP BY Carrera ORDER BY Fecha_Inicio ASC";

				if($res=$con->query($sql1)){
		    		if ($res->num_rows > 0) {
						while($row = $res->fetch_assoc()) {
							$mas .= "$row[Carrera]*$row[numero]*";
						}
						echo $mas;
					}else {
						echo "0 results";
					}		
				}else{
		    		echo "Error: ".mysqli_error($con);
				}
			}else {
				echo "0 results";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=='3'){
		$mas="";
		if($_POST["periodo"]=='mes'){
			$tipo='MONTH(Fecha_Inicio)';
		}else{
			$tipo='YEAR(Fecha_Inicio)';
		}
		$sql = "SELECT $tipo AS Tipo, COUNT(*) AS numero, Carrera FROM prestamos INNER JOIN prestamos_detalle ON Prestamo_FK=ID_Prestamo INNER JOIN libros_detalle ON Libro_FK=ID_Detalle INNER JOIN libros ON Libros_FK=ID_Libro INNER JOIN carrera ON Carrera_FK=ID_Carrera WHERE Fecha_Inicio BETWEEN '$_POST[FeIni]' AND '$_POST[FeTer]' GROUP BY $tipo, Carrera ORDER BY Fecha_Inicio ASC";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					$mas .= "$row[Tipo]*$row[numero]*$row[Carrera]*";
				}

				$mas .= "/";

				$sql1 = "SELECT Carrera, COUNT(*) AS numero FROM prestamos INNER JOIN prestamos_detalle ON Prestamo_FK=ID_Prestamo INNER JOIN libros_detalle ON Libro_FK=ID_Detalle INNER JOIN libros ON Libros_FK=ID_Libro INNER JOIN carrera ON Carrera_FK=ID_Carrera WHERE Fecha_Inicio BETWEEN '$_POST[FeIni]' AND '$_POST[FeTer]' GROUP BY Carrera ORDER BY Fecha_Inicio ASC";

				if($res=$con->query($sql1)){
		    		if ($res->num_rows > 0) {
						while($row = $res->fetch_assoc()) {
							$mas .= "$row[Carrera]*$row[numero]*";
						}
						echo $mas;
					}else {
						echo "0 results";
					}		
				}else{
		    		echo "Error: ".mysqli_error($con);
				}
			}else {
				echo "0 results";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST["metodo"]=='4'){
		$mas="";
		if($_POST["periodo"]=='mes'){
			$tipo='MONTH(Fecha_Inicio)';
		}else{
			$tipo='YEAR(Fecha_Inicio)';
		}
		$sql = "SELECT $tipo AS Tipo, COUNT(*) AS numero, Tema FROM prestamos INNER JOIN prestamos_detalle ON Prestamo_FK=ID_Prestamo INNER JOIN libros_detalle ON Libro_FK=ID_Detalle INNER JOIN libros ON Libros_FK=ID_Libro INNER JOIN tema_general ON Tema_General_FK=ID_Tema_Gral WHERE Fecha_Inicio BETWEEN '$_POST[FeIni]' AND '$_POST[FeTer]' GROUP BY $tipo, Tema ORDER BY Fecha_Inicio ASC";

		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					$mas .= "$row[Tipo]*$row[numero]*$row[Tema]*";
				}

				$mas .= "/";

				$sql1 = "SELECT Tema, COUNT(*) AS numero FROM prestamos INNER JOIN prestamos_detalle ON Prestamo_FK=ID_Prestamo INNER JOIN libros_detalle ON Libro_FK=ID_Detalle INNER JOIN libros ON Libros_FK=ID_Libro INNER JOIN tema_general ON Tema_General_FK=ID_Tema_Gral WHERE Fecha_Inicio BETWEEN '$_POST[FeIni]' AND '$_POST[FeTer]' GROUP BY Tema ORDER BY Fecha_Inicio ASC";

				if($res=$con->query($sql1)){
		    		if ($res->num_rows > 0) {
						while($row = $res->fetch_assoc()) {
							$mas .= "$row[Tema]*$row[numero]*";
						}
						echo $mas;
					}else {
						echo "0 results";
					}		
				}else{
		    		echo "Error: ".mysqli_error($con);
				}
			}else {
				echo "0 results";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}
?>