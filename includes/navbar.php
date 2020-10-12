<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="../vistas/index.php" class="mb-0">Turismo Real</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#portfolio" class="nav-link">Departamentos</a></li>
                <li><a href="#services" class="nav-link">Servicios</a></li>
                <li><a href="#contact" class="nav-link">Contacto</a></li>
                <script>function aparecer(){document.getElementsByClassName("pestana")[0].style.display="inline-block";} function ocultar(){document.getElementsByClassName("pestana")[0].style.display="none";} </script>
                        <?php
                        if(!isset($_COOKIE['token']))
                        {
                            echo '<li class="nav-item mx-0 mx-lg-1"><a class="nav-link js-scroll-trigger" href="InicioSesion.php">Acceso</a></li>';
                            
                        } else
                        {   
                            echo    '<li class="nav-item mx-0 mx-lg-1"><a class="nav-link js-scroll-trigger" style="position: relative;" onmouseover="aparecer()" onmouseout="ocultar()" >Cuenta</a>
                                <ul class="nav-link pestana" onmouseover="aparecer()" onmouseout="ocultar()">
                                    <li><a class="nav-link js-scroll-trigger">Mi Perfil<a/></li>
                                    <li><a class="nav-link js-scroll-trigger">Mis Reservas <a/></li>
                                    <li><a href="../funciones/cerrarsesion.php" class="nav-link js-scroll-trigger" >Cerrar Sesion<a/></li>
                                </ul>
                            </li>';
                        }
                        ?>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>