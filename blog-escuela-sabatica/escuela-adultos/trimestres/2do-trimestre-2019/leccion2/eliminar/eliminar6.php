<?php
include "../../../../../conexion-blog.php";
if (isset($_POST["comentario"]))
{
    function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Se almacena en una variable el id del registro a eliminar
$comentario = test_input($_POST["comentario"]);
//Preparar la consulta
$consulta = "DELETE FROM respuestas_6 WHERE comentario='$comentario'";
//Ejecutar la consulta
$resultado = mysqli_query($conexion,$consulta);
//redirigir nuevamente a la página para ver el resultado
header("location: ../leccion2.php");
}
?>