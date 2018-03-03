<?php 
	include 'conexion.php';
	session_start();
	$id=$_SESSION["user"]["ID_Usuario"];
	$contra=$_SESSION["user"]["Contrasenia"];

	if($_POST["metodo"]=="1"){
		$nombre=$_POST["nombre"];
    	$sql = "UPDATE usuarios SET Usuario='$nombre' WHERE ID_Usuario='$id'";
	    if($con->query($sql)){
	        echo "El nombre de usuario se ha actualizado";
	        $_SESSION["user"]["Usuario"]=$nombre;
	    }else{
	        echo "Error: ".mysqli_error($con);
	    }
    }

    if($_POST["metodo"]=="2"){
    	if($_POST["contraA"]==$contra){
    		$ncon=$_POST["contraN"];
    		$sql = "UPDATE usuarios SET Contrasenia='$ncon' WHERE ID_Usuario='$id'";
		    if($con->query($sql)){
		        echo "La contraseña se ha actualizado";
		        $_SESSION["user"]["Contrasenia"]=$ncon;
		    }else{
		        echo "Error: ".mysqli_error($con);
		    }
    	}else{
    		echo "123";
    	}
    }	
?>