<?php
session_start();
//se inicia sesion con el usuario logeado.
//error_reporting(0);
/* Establecemos que las paginas no pueden ser cacheadas */
header("Cache-control: private");
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$inactivo = 7200;
 
    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_destroy();
            header("window.location.href='../login-sis-admin.php';"); 
        }
    }
 
$_SESSION['tiempo'] = time();

$varsesion = $_SESSION['nombre_usuario'];
if ($varsesion == null || $varsesion = '') {
    echo '<script>
          alert("No es un usuario registrado favor de registrarse.");
          window.location.href="../login-sis-admin.php";
          </script>';
    die();
}
;
