<?php
require_once("sesiones.php");
require("lista-url-seguras.php");
include "../conexion-sis-admin.php";
$consultaid          = "SELECT * FROM usuario_administrador WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
//variables
$usuario = $nombre = $descripcion = $cantidad = $codigo = $categoria = $id = "";
$usuarioErr = $nombreErr = $descripcionErr = $cantidadErr = $codigoErr = $categoriaErr = $idErr = $envioErr = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nombre_usuario"])) {
        $usuarioErr = "Se requiere usuario";
    }else {
        $usuario = test_input($_POST["nombre_usuario"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $usuario)) {
            $usuarioErr = "Sólo se permiten letras espacios en blanco.";
        }
    }

    if (empty($_POST["nombre_articulo"])) {
        $nombreErr = "Se requiere nombre";
    }else {
        $nombre = test_input($_POST["nombre_articulo"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $nombre)) {
            $nombreErr = "Sólo se permiten letras,números espacios en blanco.";
        }
    }

    if (empty($_POST["descripcion"])) {
        $descripcionErr = "Se requiere descripcion";
    } else {
        $descripcion = test_input($_POST["descripcion"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $descripcion)) {
            $descripcionErr = "Sólo se permiten caracteres de la escritura básica.";
        }
    }

    if (empty($_POST["cantidad"])) {
        $cantidadErr = "Se requiere cantidad";
    }else {
        $cantidad = test_input($_POST["cantidad"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[ 0-9 . ]*$/", $cantidad)) {
            $cantidadErr = "Sólo se permiten cantidades numericas.";
        }
    }

    if (empty($_POST["codigo"])) {
        $codigoErr = "Se requiere codigo";
    }else {
        $codigo = test_input($_POST["codigo"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*$/", $codigo)) {
            $codigoErr = "Sólo se permiten numeros.";
        }
    }

    if (empty($_POST["categoria"])) {
        $categoriaErr = "Se requiere usuario";
    }else {
        $categoria = test_input($_POST["categoria"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $categoria)) {
            $categoriaErr = "Sólo se permiten letras espacios en blanco.";
        }
    }

    if (empty($_POST["id"])) {
        $idErr = "Se requiere id";
    }else {
        $id = test_input($_POST["id"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[ 0-9 ]*$/", $id)) {
            $idErr = "Sólo se permiten cantidades numericas.";
        }
    }

    if (empty($usuario) || empty($nombre) || empty($descripcion) || empty($cantidad) || empty($codigo) || empty($categoria) || empty($id) || !preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $usuario) || !preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $nombre) || !preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $descripcion) || !preg_match("/^[ 0-9 . ]*$/", $cantidad) || !preg_match("/^[0-9]*$/", $codigo) || !preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9 , .]*$/", $categoria) || !preg_match("/^[ 0-9 ]*$/", $id) ){
        $envioErr = "Error al guardar datos, existen campos vaciós";
    }else{
        //hacer insercion de datos
        $miconsulta    = "INSERT INTO detalle_entrada_insumos (nombre_usuario, nombre_articulo, descripcion_articulo, cantidad, codigo_barras, fecha, categoria, id_usuario_administrador) VALUES ('" . $usuario . "', '" . $nombre . "', '" . $descripcion . "', '" . $cantidad . "', '" . $codigo . "', NOW(), '" . $categoria . "', '" . $id . "')";
        $resultado     = mysqli_query($conexion, $miconsulta);
        header("Location: confirmacion.php");
    }


}
?>