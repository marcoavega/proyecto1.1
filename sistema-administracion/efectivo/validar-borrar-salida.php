<?php
require("lista-url-seguras.php");
include "../conexion-sis-admin.php";
if (isset($_POST["id_detalle_salida_efectivo"]))
{
//Se almacena en una variable el id del registro a eliminar
$id_detalle_salida_efectivo = $_POST["id_detalle_salida_efectivo"];
//Preparar la consulta
$consulta = "DELETE FROM detalle_salida_efectivo WHERE id_detalle_salida_efectivo='$id_detalle_salida_efectivo'";
//Ejecutar la consulta
$resultado = mysqli_query($conexion,$consulta);
//redirigir nuevamente a la página para ver el resultado
header("location: pagina-reporte-salida.php");
}
?>