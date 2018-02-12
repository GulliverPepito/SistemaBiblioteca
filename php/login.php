<?php  
	
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	require 'conexion.php';
	session_start();
	$usuario = $con->real_escape_string($_POST['usuario_txt']);
	$password = $con->real_escape_string($_POST['pass_pw']);
	if($consulta = $con->prepare("SELECT * FROM usuarios WHERE usuario=? AND contrasenia =?")){
		$consulta->bind_param('ss', $usuario, $password);
		$consulta->execute();
		$resulta = $consulta->get_result();
		if($resulta->num_rows > 0) {
			$datos = $resulta->fetch_assoc();
			echo json_encode(array('error'=>false, 'tipo'=>$datos['tipo']));
			$_SESSION['user'] = $datos;
		} else {
			echo json_encode(array('error'=> true));
		}
	}
}