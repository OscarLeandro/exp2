<?php
setcookie('token', '', time()-3600,  '/');
header('Location: ../vistas/index.php'); 
die();

?>