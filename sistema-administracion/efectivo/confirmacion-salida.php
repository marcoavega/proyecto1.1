<?php
require_once("sesiones.php");
require("lista-url-seguras.php");
//se inicia sesion con el usuario logeado.
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es-MX">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>datos guardados</title>
   </head>
   <body>
      <!--confirma con alert sobre los datos guardados y redirecciona a pagina principal-->
      <script>alert('Datos guardados correctamente')</script>
      <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=salida.php">
   </body>
</html>