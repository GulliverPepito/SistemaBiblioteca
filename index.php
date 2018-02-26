    <?php  

    session_start();
    if(isset($_SESSION['user'])){
       if($_SESSION['user']['Tipo']!=1){
            header('Location: login.php');
        }
    }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sistema Biblioteca</title>
    <link type="image/x-icon" href="img/logo2.png" rel="icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>

<body>
    <div class="carga" id="carga">
        <p><img class="carIma" src="img/carga.svg"></p>
        <p><img class="logo" src="img/logo.png"></p>
    </div>
    <?php require "php/menu.php"; ?>
    <section class="main">
        <div class="container-fluid">
            <div class="row mostrar" id="ReUsu">
                <?php require "vistas/usuarios.php"; ?>
            </div>
            <div class="row mostrar" id="agregarLibro">
                <?php require "vistas/agregarLibro.php"; ?>
            </div>
        </div>

        <div class="row mostrar" id="VerUsu">
            <div class="card">
               <?php require "vistas/verUsu.php"; ?>
            </div>
        </div>

        <div class="row mostrar" id="TablaLibros">
            <div class="card">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
                            <input class="form-control input-lg" type="text" id="BuscaLibro" placeholder="Buscar libros">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="TLibros">
                            <table class="table table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>ISBN</th>
                                        <th>Código Barras</th>
                                        <th>Título</th>
                                        <th>Autor</th>
                                        <th>Título Original</th>
                                        <th>Año Edición</th>
                                        <th>Lugar Edición</th>
                                        <th>Editorial</th>
                                        <th>Páginas</th>
                                        <th>Ubicación</th>
                                        <th>Volúmen</th>
                                        <th>N° Serie</th>
                                        <th>Carrera</th>
                                        <th>URL</th>
                                        <th>Tema Gral</th>
                                        <th>Tema Esp</th>
                                    </tr>
                                </thead>
                                <tbody id="datos">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/agregarLibro.js"></script>
    <script src="js/usuarios.js"></script>
    <script src="js/login.js"></script>
    <script>
        $('#FoUsu').serializeArray();
    </script>
</body>

</html>