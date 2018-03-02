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
        	<p><img class="carIma" src="img/carga.svg"></p>
        	<p><img class="logo" src="img/logo.png"></p>
    	</div>
		<div class="cabecera">
			<img src="../img/logo.png" alt="">
            <a style="text-align: right;" href="../index.php"><h2> < Regresar</h2></a>
        </div>
	</header>

	<section class="main">
		<div class="col-md-12">
    		<div class="card">
    			
    		</div>	
    	</div>	
	</section>
</body>
</html>