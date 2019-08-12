<?php
require("sesiones.php");
require("lista-url-seguras.php");
//incluir el archivo conexion
//require("lista-url-seguras.php");
//error_reporting(0);
include "../conexion-sis-admin.php";
$consultaid          = "SELECT * FROM usuario_administrador WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
//variables
$usuario = $cantidad = $descripcion = $tipo = $numero = $id = "";
$usuarioErr = $cantidadErr = $descripcionErr = $tipoErr = $numeroErr = $idErr = $envioErr = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["usuario"])) {
        $usuarioErr = "Se requiere usuario";
    }else {
        $usuario = test_input($_POST["usuario"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9]*$/", $usuario)) {
            $usuarioErr = "Sólo se permiten letras espacios en blanco.";
        }
    }
    
    if (empty($_POST["cantidad"])) {
        $cantidadErr = "Se requiere cantidad";
    }else {
        $cantidad = test_input($_POST["cantidad"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[ 0-9 . ]*$/", $cantidad)) {
            $cantidadErr = "Sólo se permiten cantidades numéricas positivas.";
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

    if (empty($_POST["tipo"])) {
        $tipoErr = "Se requiere tipo de documento";
    } else {
        $tipo = test_input($_POST["tipo"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $tipo)) {
            $tipoErr = "Sólo se permiten caracteres de la escritura básica.";
        }
    }

    if (empty($_POST["numero"])) {
        $numeroErr = "Se requiere numero de documento";
    } else {
        $numero = test_input($_POST["numero"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $numero)) {
            $numeroErr = "Sólo se permiten caracteres de la escritura básica.";
        }
    }

    if (empty($_POST["id"])) {
        $idErr = "Se requiere id";
    }else {
        $id = test_input($_POST["id"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[ 0-9 ]*$/", $id)) {
            $idErr = "Sólo se permiten cantidades numericas y positivas.";
        }
    }

     
    if (empty($usuario) || empty($cantidad) || empty($descripcion) || empty($tipo) || empty($numero) || empty($id) || !preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9]*$/", $usuario) || !preg_match("/^[ 0-9 . ]*$/", $cantidad) || !preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $descripcion) || !preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $tipo) || !preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $numero) || !preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ 0-9 , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $numero) || !preg_match("/^[ 0-9 ]*$/", $id) ){
        $envioErr = "Error al guardar datos, existen campos vaciós o algun tipo de dato incorrecto";
    }else{
        //hacer insercion de datos
        $miconsulta    = "INSERT INTO detalle_entrada_efectivo (nombre_usuario, cantidad, descripcion, tipo_comprobante, numero_comprobante, fecha_ingreso, id_usuario_administrador) VALUES ('" . $usuario . "', '" . $cantidad . "', '" . $descripcion . "', '" . $tipo . "', '" . $numero . "', NOW(), '" . $id . "')";
        $resultado     = mysqli_query($conexion, $miconsulta);
        header("Location: confirmacion.php");
    }

}
?>