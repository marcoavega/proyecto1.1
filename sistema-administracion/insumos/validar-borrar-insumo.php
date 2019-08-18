<?php
require("lista-url-seguras.php");
include "../conexion-sis-admin.php";
if (isset($_POST["id_detalle_entrada_insumos"]))
{
//Se almacena en una variable el id del registro a eliminar
$id_detalle_insumo = $_POST["id_detalle_entrada_insumos"];
//Preparar la consulta
$consulta = "DELETE FROM detalle_entrada_insumos WHERE id_detalle_entrada_insumos='$id_detalle_insumo'";
//Ejecutar la consulta
$resultado = mysqli_query($conexion,$consulta);
//redirigir nuevamente a la página para ver el resultado
header("location: reportes-insumos-prin.php");
}