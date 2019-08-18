<?php
//incluir archivo de conexion
include "../../conexion-blog.php";
require("sesiones.php");
//require("lista-url-seguras.php");
//error_reporting(0);
$datosErr = $tituloErr = $envioErr = "";
$datos = $titulo = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["datos_trimestre"])) {
      $datosErr = "Se requiere dato";
   } else {
      $datos = test_input($_POST["datos_trimestre"]);
       // check if name only contains letters and whitespace
       if (!preg_match("/^[a-z A-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $datos)) {
         $datosErr = "Sólo se permiten letras números y espacios en blanco.";
       }
      }

if (empty($_POST["titulo"])) {
   $tituloErr = "Se requiere título";
} else {
   $titulo = test_input($_POST["titulo"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-z A-Z áéíóúÁÉÍÓÚñÑ 0-9 , . ]*$/", $titulo)) {
      $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";
    }
}

if (empty($datos) || empty($titulo) || !preg_match("/^[a-z A-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $datos) || !preg_match("/^[a-z A-Z áéíóúÁÉÍÓÚñÑ 0-9 , . ]*$/", $titulo)) {
   $envioErr = "Error de énvio";
} else {

   $verificar_titulo = mysqli_query($conexion, "SELECT * FROM escuelas_trimestres WHERE titulo_trimestre = '$titulo' OR datos_trimestre = '$datos'");
if(mysqli_num_rows($verificar_titulo) > 0){
   $envioErr = "El título y o datos de lección ya existen";
}else{
   $miconsulta = "INSERT INTO escuelas_trimestres ( datos_trimestre, titulo_trimestre) VALUES ('" . $datos . "', '" . $titulo . "')";
$resultado  = mysqli_query($conexion, $miconsulta);
$envioErr = "Los datos se guardaron con éxito";
}

}

}

?>