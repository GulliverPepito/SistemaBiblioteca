<?php  
	require 'conexion.php';

	if(isset($_POST)){
		if($_POST["status"]=='prestados'){
			$mas="AND Status=1";
		}else if($_POST["status"]=='disponibles'){
			$mas="AND Status=0";
		}else if($_POST["status"]=='vencidos'){
			$mas="AND NOW()>(SELECT Fecha_Fin FROM prestamos INNER JOIN prestamos_detalle ON Prestamo_FK=ID_Prestamo WHERE Libro_FK=ID_Detalle)";
		}else{
			$mas="";
		}
		$sql = "SELECT ID_Detalle, ISBN, Codigo_Barras, Titulo, Autor, Tema_Especifico, Fila, Area, Status, (SELECT Fecha_Fin FROM prestamos INNER JOIN prestamos_detalle ON Prestamo_FK=ID_Prestamo WHERE Libro_FK=ID_Detalle) AS Fecha_Fin, NOW() AS Fecha FROM libros_detalle INNER JOIN libros ON Libros_FK=ID_Libro INNER JOIN ubicacion ON Ubicacion_FK=ID_Ubicacion INNER JOIN areas ON Area_FK=ID_Areas WHERE CONCAT(ISBN,Codigo_Barras,Titulo,Autor,Tema_Especifico,Fila,Area) LIKE '%$_POST[bus]%' $mas";
		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					if($row["Status"]==0){
						$status="DISPONIBLE";
					}else{
						if($row["Fecha"]>$row["Fecha_Fin"]){
							$status="VENCIDO";
						}else{
							$status="PRESTADO";
						}
					} 
					echo "<tr><td>$row[ID_Detalle]</td><td>$row[ISBN]</td><td>$row[Codigo_Barras]</td><td>$row[Titulo]</td><td>$row[Autor]</td><td>$row[Tema_Especifico]</td><td>Fila:$row[Fila] Area:$row[Area]</td><td>$status</td></tr>";
				}
			}else {
				echo "No se encontraron resultados";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}
?>