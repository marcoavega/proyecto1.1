<?php
session_start();
//se inicia sesion con el usuario logeado.
error_reporting(0);
/* Establecemos que las paginas no pueden ser cacheadas */

$inactivo = 7200;
 
    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_destroy();
            header("window.location.href='../../index.php';"); 
        }
    }

$_SESSION['tiempo'] = time();
$varsesion = $_SESSION['nombre_usuario'];
if ($varsesion == null || $varsesion == '' || $varsesion != $_SESSION['nombre_usuario']) {
    echo '<script>
          alert("Sesión cerrada por inactividad de más de 2 horas.");
          window.location.href="../../index.php";
          </script>';
    die();
}
;
?>