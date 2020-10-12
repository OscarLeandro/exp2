<?php include 'peticion.php';
if(!empty($_POST['usuario'])||!empty($_POST['password']))
{
    $body=array('username'=>$_POST['usuario'],'clave'=>$_POST['password']);
    $resultado=peticion_http('http://turismoreal.xyz/api/usuario/autenticar','POST',$body);
    var_dump($resultado['contenido']['token']);
    

    switch($resultado['statusCode'])
    {
        case 200: setcookie('token',($resultado['contenido'])['token'], time()+3600, '/');
        header('Location: ../vistas/index.php'); 
        die();
        break;
        case 400: setcookie('error',($resultado['contenido'])['error'], time()+60, '/');
        header('Location: ../vistas/InicioSesion.php'); 
        die();
        break;
        case 500: setcookie('error',($resultado['contenido'])['error'], time()+60, '/');
        header('Location: ../vistas/InicioSesion.php'); 
        die();
        break;
    }



}

?>