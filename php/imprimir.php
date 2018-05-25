<?php  
	require 'conexion.php';

	if(isset($_POST)){
		$sql = "SELECT ID_Libro,ID_Detalle, ISBN, Codigo_Barras, Titulo, Autor, Tema_Especifico, Fila, Area, (SELECT Fecha_Fin FROM prestamos INNER JOIN prestamos_detalle ON Prestamo_FK=ID_Prestamo WHERE Libro_FK=ID_Detalle) AS Fecha_Fin, NOW() AS Fecha FROM libros_detalle INNER JOIN libros ON Libros_FK=ID_Libro INNER JOIN ubicacion ON Ubicacion_FK=ID_Ubicacion INNER JOIN areas ON Area_FK=ID_Areas WHERE CONCAT(ISBN,Codigo_Barras,Titulo,Autor,Tema_Especifico,Fila,Area) LIKE '%$_POST[bus]%'";
		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {

					echo "<tr>
							<td>$row[ID_Detalle]</td>
							<td>$row[ISBN]</td>
							<td>$row[Codigo_Barras]</td>
							<td>$row[Titulo]</td>
							<td>$row[Autor]</td>
							<td>$row[Tema_Especifico]</td>
							<td>Fila:$row[Fila] Area:$row[Area]</td>
							<td>
								<button ID_Detalle='$row[ID_Libro]' data-toggle='modal' data-target='#modalImprimir' class='ImprimirEt btn btn-default btn-sm' title='Imprimir'>
									<i class='fa fa-print'></i>
								</button><span hidden>0</span>
							</td>
						</tr>";
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