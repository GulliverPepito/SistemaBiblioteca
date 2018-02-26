<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body class="bg-login">
        <div class="login-box">
        	<div>
        	<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
        		
        	</div>
            <form id="formlg">
                <div class="input-lg">
                    <input type="text"  placeholder="Usuario" name="usuario_txt" required pattern="[A-Za-z0-9_-]{1,15}">
                </div>
                <div class="input-lg">
                    <input type="password"  name="pass_pw" placeholder="Contraseña" required pattern="[A-Za-z0-9_-]{1,15}">
                </div>
                <div class="input-lg">
                    <input type="submit" name="submit" class="botonlg boton" value="Iniciar Sesion">
                </div>
            </form>
        </div>

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>
