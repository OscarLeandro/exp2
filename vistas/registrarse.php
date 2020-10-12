<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
<title>Turismo Real</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/api_turismoreal.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="../css/registro.css" th:href="@{../css/registro.css}">

</head>
<body>
    <form class="formularioregistro" action="../funciones/registro.php" method="POST">
        <h1>Registrarse</h1>
        <div class="contenedor">
                <div class="input-contenedor" >
                    <input type="text" name="rut"  placeholder="Rut"/>
                </div>
                <div class="input-contenedor" >
                    <input type="text" name="nombres" placeholder="Nombres"/>
                </div>
                <div class="input-contenedor" >
                    <input type="text" name="apellidos" placeholder="Apellidos" />
                </div>
                <div class="input-contenedor" >
                    <input type="date" name="fnacimiento" placeholder="Fecha Nacimiento" />
                </div>
                <div class="input-contenedor" >
                    <input type="text" name="email" placeholder="Email" />
                </div>
                <div class="input-contenedor">
                    <input type="text" name="telefono" placeholder="Telefono" />
                </div>
                <div class="input-contenedor">
                    <input type="text" name="direccion" placeholder="Direccion" />
                </div>
                <div class="input-contenedor" >
                    <select  name="region" placeholder="Región" id="regiones"> </select>
                </div>
                <div class="input-contenedor" >
                    <select name="comuna" placeholder="Comuna" id="comunas"> </select>
                </div>
                <div class="input-contenedor" >
                    <select  name="sexo" placeholder="Sexo" id="genero"> </select>
                </div>
                <div class="input-contenedor" >
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre Usuario" />
                </div>
                <span id="usuarioerror"></span>
                <div class="input-contenedor" >
                    <input type="password" name="password" placeholder="Contraseña" />
                </div>
                <input type="submit" value="Registrarse" class="button">
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <p>¿Ya tienes una cuenta?<a class="link" href="InicioSesion.php">Iniciar Sesion</a></p>
        </div>
    </form>
            </div>
        </div>
    </div>
</body>
</html>
