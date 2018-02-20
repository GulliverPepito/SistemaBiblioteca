    <?php  
/*
    session_start();
    if(isset($_SESSION['user'])){
       if($_SESSION['user']['tipo']!=1){
            header('Location: login.php');
        }else if($_SESSION['user']['tipo']==2){
            header('Location: Gerente/');
        } else if($_SESSION['user']['tipo']==3){
            header('Location: Vendedor/');
        }
    } else {
      header('Location: login.php');
    }
    */

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
    <?php require "php/menu.php"; ?>
    <section class="main">
        <div class="container-fluid">
            <div class="row mostrar" id="ReUsu">
                <?php require "vistas/usuarios.php"; ?>
            </div>
            <div class="row mostrar" id="agregarLibro">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center">Agregar Libro</h1>
                            <form action="" id="formLibro">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="idLibro">ID Libro</label>
                                        <input type="text" class="form-control" name="idLibro" id="idLibro">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" class="form-control" name="isbn" id="isbn">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="codigoBarras">Codigo de Barras</label>
                                        <input type="text" class="form-control" name="codigoBarras" id="codigoBarras">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="titulo">Titulo</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="autor">Autor</label>
                                        <input type="text" class="form-control" name="autor" id="autor">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tituloOriginal">Titulo Original</label>
                                        <input type="text" class="form-control" name="tituloOriginal" id="tituloOrignal">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="anioEdicion">Año de Edicion</label>
                                        <input type="number" class="form-control" name="anioEdicion" id="anioEdicion">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lugarEdicion">Lugar de Edicion</label>
                                        <input type="text" class="form-control" name="lugarEdicion" id="lugarEdicion">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="editorial">Editorial</label>
                                        <input type="text" class="form-control" name="editorial" id="editorial">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="paginas">Paginas</label>
                                        <input type="number" class="form-control" name="paginas" id="paginas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="ubicacion">Ubicacion</label>
                                        <input type="text" class="form-control" name="ubicacion" id="ubicacion">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="volumen">Volumen</label>
                                        <input type="number" class="form-control" name="volumen" id="volumen">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="numSerie">Numero de Serie</label>
                                        <input type="text" class="form-control" name="numSerie" id="numSerie">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="carrera">Carrera</label>
                                        <select name="carrera" id="carrera" class="form-control">
                                            <option value="seleccione">Seleccione...</option>
                                            <option value="1">Ing. Sistemas Computacionales</option>
                                            <option value="2">Ing. Gestion Empresarial</option>
                                            <option value="3">Ing. Industrial</option>
                                            <option value="4">Ing. Industrias Alimentarias</option>
                                            <option value="5">Ing. Electromecanica</option>
                                            <option value="6">Ing. Ambiental</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="url">Url</label>
                                        <input type="url" class="form-control" name="url" id="url">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="temaGeneral">Tema General</label>
                                        <input type="text" class="form-control" name="temaGeneral" id="temaGeneral">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="temaEspecifico">Tema Especifico</label>
                                        <input type="text" class="form-control" name="temaEspecifico" id="temaEspecifico">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-success btn-lg" id="btnAgregarLibro"><i class="fa fa-floppy-o" aria-hidden="true" ></i> Agregar Libro</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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