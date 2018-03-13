<?php  
	require 'conexion.php';

	if(isset($_POST)){
		$sql = "SELECT ID_Detalle, ISNB, Codigo_Barras, Titulo, Autor, Tema_Especifico, Fila, Area FROM libros_detalle INNER JOIN libros ON Libros_FK=ID_Libro INNER JOIN ubicacion ON Ubicacion_FK=ID_Ubicacion INNER JOIN areas ON Area_FK=ID_Areas";
		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[ID_Detalle]<td><td>$row[ISNB]</td><td>$row[Codigo_Barras]</td><td>$row[Titulo]</td><td>$row[Autor]</td><td>$row[Tema_Especifico]</td><td>Fila:$row[Fila] Area:$row[Area]</td></tr>";
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