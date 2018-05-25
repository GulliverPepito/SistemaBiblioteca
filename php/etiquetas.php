<style>
	label{
		font-weight: bold;
		font-size: 18px;
	}
</style>
<?php
  
  require '../php/conexion.php';

  $output = ("SELECT lpad(ID_Libro, 8, 0) as Codigo, Anio_Edicion, carrera.Codigo as Carrera FROM libros INNER JOIN carrera ON Carrera_FK = ID_Carrera WHERE ID_Libro = ".$_GET["id"]);
  foreach($con->query($output) as $salida) {
  ?>  
  <div style="width: 320px; border: solid black 2px">
  	<div style="width: 140px; height: 90px; float: left; text-align: left; padding-top: 10px; padding-left: 20px;">
  		<label><?php echo $_GET["c"]?></label><br>
  		<label><?php echo $salida["Anio_Edicion"]?></label><br>
  		<label><?php echo $salida["Carrera"]?></label><br>
  		<label><?php echo "Ej.". $_GET["e"]?></label>
  	</div>
  	<br>
  	<img src="barcode.php?text=<?php echo $salida["Codigo"]; ?>&size=50&orientation=horizontal&codetype=Code39&print=true&sizefactor=1" />
  </div>
  <br>
<?php 
} ?>
