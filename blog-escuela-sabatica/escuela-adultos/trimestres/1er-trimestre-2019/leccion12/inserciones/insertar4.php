<?php
//incluir el archivo conexion
include "../../../../../conexion-blog.php";
//insertar los datos capturados en la base de datos.
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$elnombre4     = test_input($_POST["nombre_usuario4"]);
$elcomentario4 = test_input($_POST["contenido_comentario4"]);
$lafecha4      = date('Y-m-d H:i:s');
$elusuario4    = test_input($_POST["id_usuario4"]);
$laimagen4 = test_input($_POST["imagen4"]);
$losdatos4 = test_input($_POST["datos_trimestre4"]);
$lapregunta4 = test_input($_POST["pregunta4"]);
//hacer insercion de datos
if ($elcomentario4 == null || $elcomentario4 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion12.php";
          </script>';
}else{
$miconsulta4   = "INSERT INTO respuestas_4 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre4 . "', '" . $elcomentario4 . "', NOW(), '" . $laimagen4 . "', '" . $losdatos4 . "', '" . $elusuario4 . "', '" . $lapregunta4 . "')";
$resultado4    = mysqli_query($conexion, $miconsulta4);
header("Location: ../leccion12.php");
}
?> 