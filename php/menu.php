  <header>
        <div class="cabecera dropdown">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
            <i class="fa fa-user-circle dropdown-toggle" aria-hidden="true" data-toggle="dropdown"><?php echo $_SESSION['user']['Usuario'] ?></i>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="vistas/perfil.php">Perfil</a>
                <a class="dropdown-item" href="php/salir.php">Salir</a>
              </div>
        </div>
        
        <div class="ui right demo sidebar vertical inverted menu uncover visible" style="">
            <a class="header item">
                <h3>Menu</h3>
            </a>
            <a class="item" id="libros"><i class="fa fa-book fa-2x" aria-hidden="true"></i> <p>Libros</p></a>
            <a class="item libros sub-item" id="registrarLibro"><i class="fa fa-plus fa-2x" aria-hidden="true"></i> <p>Registrar Libros</p></a>
            <a class="item libros sub-item" id="ModificarLibro"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i> <p>Modificar Libro</p></a>
            <a class="item" id="prestamos" id="Prestamos"><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i><p>Prestamos</p></a>
            <a class="item prestamos sub-item" id="Nuevo" ><i class="fa fa-plus fa-2x" aria-hidden="true"></i> <p>Nuevo Prestamo</p></a>
            <a class="item prestamos sub-item" id="ModificarPrestamo"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i> <p>Modificar Prestamo</p></a>
            <a class="item" id="consultas"><i class="fa fa-search fa-2x" aria-hidden="true"></i><p>Consultas</p></a>
            <a class="item" id="Estadisticas">
                <p><i class="fa fa-bar-chart fa-2x" aria-hidden="true"></i>Estadisticas</p>
            </a>
            <a class="item" id="Imprimir">
                <p><i class="fa fa-print fa-2x" aria-hidden="true"></i>Imprimir</p>
            </a>
            <a class="item" id="usuarios">
                <p><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>Usuarios</p>
            </a>
            <a class="item usuarios sub-item" id="AgreUsu">
                <p><i class="fa fa-user-plus fa-1x" aria-hidden="true"></i>Agregar Usuario</p>
            </a>
            <a class="item usuarios sub-item" id="MoUsu"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i> <p>Modificar Usuario</p></a>
            <a class="item" id="modulos">
                <p><i class="fa fa-plus fa-2x" aria-hidden="true"></i>Modulos</p>
            </a>
        </div>
    </header>