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
            <a class="item" id="prestamos" id="Prestamos"><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i><p>Prestamos</p></a>
            <a class="item prestamos sub-item" id="ModificarPrestamo"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i> <p>Ver Prestamo</p></a>
            <a class="item" id="consultas"><i class="fa fa-search fa-2x" aria-hidden="true"></i><p>Consultas</p></a>

        </div>
    </header>