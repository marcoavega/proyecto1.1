<?php
require("lista-url-seguras.php");
require_once("sesiones.php");
include "../conexion-sis-admin.php";
$miconsulta = "SELECT * FROM detalle_entrada_insumos";
$resultado  = mysqli_query($conexion, $miconsulta);
$nombre = $cantidad = "";
$nombreErr = $cantidadErr = $envioErr = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nombre_articulo"])) {
        $nombreErr = "Se requiere nombre";
    }else {
        $nombre = test_input($_POST["nombre_articulo"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $nombre)) {
            $nombreErr = "Sólo se permiten letras,números espacios en blanco.";
        }
    }

    if (empty($_POST["cantidad"])) {
        $cantidadErr = "Se requiere cantidad";
    }else {
        $cantidad = test_input($_POST["cantidad"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[ 0-9 . -0-9 ]*$/", $cantidad)) {
            $cantidadErr = "Sólo se permiten cantidades númericas.";
        }
    }

    if ( empty($nombre) || empty($cantidad) || !preg_match("/^[ 0-9 . -0-9 ]*$/", $cantidad) || !preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $nombre) ){
        $envioErr = "Error al guardar datos, la cantidad debe ser positiva y no debe haber datos vacíos";
    }else{
        //hacer insercion de datos
        $miconsulta = "UPDATE detalle_entrada_insumos SET cantidad=cantidad-'$cantidad' WHERE nombre_articulo='$nombre'";
        $resultado  = mysqli_query($conexion, $miconsulta);
        header("Location: confirmacion-salida.php");
    }

}


?> 