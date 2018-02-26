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
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="login-box col-md-5">
                    <div>
                        <img src="img/tec.jpg">
                    </div>
                    <form id="formlg">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Usuario" name="usuario_txt" required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" name="pass_pw" placeholder="Contraseña" required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-block btn-lg" name="submit" id="iniB">Iniciar Sesion</button>
                        </div>
                    </form>
                    <div id="ver">
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>
