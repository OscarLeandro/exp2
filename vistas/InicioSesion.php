<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Turismo Real</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/api_turismoreal.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="../css/iniciosesion.css" th:href="@{../css/iniciosesion.css}">
    <link rel="stylesheet" href="./fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<?php
        include "../includes/navbar.php";
    ?>
<br>
<br>
<body>
    <form class="formularioiniciosesion" method="POST" action="../funciones/logear.php">
    
        <h1>Login</h1>
         <div class="contenedor">

             <div class="input-contenedor">
             <input type="text" name="usuario" onclick="document.getElementById('msjerror').innerText='';" placeholder="Usuario">
             
             </div>
             <div class="input-contenedor">

             <input type="password" name="password" onclick="document.getElementById('msjerror').innerText='';" placeholder="Clave">
             </div>
                <?php
                    if(isset($_COOKIE['error']))
                    {
                       echo '<span id="msjerror" >'.$_COOKIE['error'].'</span>';
                       setcookie('error', '', time()-3600,  '/');
                    }

                ?>
             <input type="submit" value="Login" class="button">
             
             <p>¿No tienes una cuenta? <a class="link" href="../vistas/registrarse.php">Registrate </a></p>
         </div>
    </form>

    <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>

  
  <script src="../js/main.js"></script>
    
</body>
</html>
