<?php  
	session_start();
    if(isset($_SESSION['user'])){
       if($_SESSION['user']['Tipo']!=1){
            header('Location: ../login.php');
        }
    }else{
        header('Location: ../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Perfil</title>
	<link type="image/x-icon" href="../img/logo2.png" rel="icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/semantic.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>
<body>
	<header>
		<div class="carga" id="carga">
        	<p><img class="carIma" src="../img/carga.svg"></p>
        	<p><img class="logo" src="../img/logo.png"></p>
    	</div>
		<div class="cabecera">
			<img src="../img/logo.png" alt="">
            <a style="text-align: right;" href="../index.php"><h2> < Regresar</h2></a>
        </div>
	</header>
	
	<br>	
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-12">
	    		<div style="padding: 5%;" class="card">
	    			<div class="row">
	    				<div class="col-md-12">
	    					<form id="CamUsu">
								<div class="row justify-content-center">
				                    <div class="form-group col-md-4">
				                        <h2 class="text-center"><i class="fa fa-user" aria-hidden="true"></i> Nombre de usuario</h2>
				                        <input style="font-size: 18px;" type="text" class="form-control" id="NomUsu" value=<?php echo $_SESSION['user']['Usuario']; ?> required>
				                    </div>
				                </div>
				                <div class="row justify-content-center">
				                    <div class="form-group col-md-2">
				                        <button type="submit" class="btn btn-danger btn-block btn-lg" id="BGUsu" disabled>Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
				                    </div>
				                </div>
							</form>
	    				</div>
	    			</div>
					<hr>
					<div class="row">
						<button type="button" class="btn btn-link" id="moCo"><i class="fa fa-key" aria-hidden="true"></i> Cambiar Contraseña</button>
						<div style="background: #CACACA; display: none;" class="col-md-12" id="contra">
							<form style="padding: 4%;" id="CamCon">
								<div class="row justify-content-center">
									<div class="col-md-4">
										<div class="form-group">
						                	<h4>Contraseña Actual</h4>
						                    <input type="password" class="con form-control" id="ConA" required>
						                    <div class="invalid-feedback">
									          La contraseña actual es incorrecta
									        </div>
						                </div>
										<div class="form-group">
						                	<h4>Nueva Contraseña</h4>
						                    <input type="password" class="con Ncon form-control" id="ConN" required>
						                    <div class="invalid-feedback">
									          Haz coincidir las contraseñas
									        </div>
						                </div>
						                <div class="form-group">
						                	<h4>Repetir Contraseña</h4>
						                    <input type="password" class="con Ncon form-control" id="ConR" required>
						                    <div class="invalid-feedback">
									          Haz coincidir las contraseñas
									        </div>
						                </div>
									</div> 
					            </div>
					            <div class="row justify-content-center">
					                <div class="form-group col-md-2">
					                    <button type="submit" class="btn btn-danger btn-block btn-lg" id="BMCo" disabled>Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
					                </div>
					            </div>
							</form>	
			    		</div>
					</div>
	    		</div>	
	    	</div>
		</div>	
	</div>
</body>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/perfil.js"></script>
</html>