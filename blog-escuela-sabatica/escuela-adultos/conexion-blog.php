<?php
//realizamos conexion a base de datos de blog con las siguientes variables y datos de las mismas, con mysqli.
$usuario     = "root";
$contrasena  = "";
$servidor    = "localhost";
$basededatos = "blog_escuela_sabatica";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos) or die("No se conecto");
$db = mysqli_select_db($conexion, $basededatos) or die("Ups error de conexion a base de datos");
return $conexion;
?>