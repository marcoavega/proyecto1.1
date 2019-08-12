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
$elnombre6     = test_input($_POST["nombre_usuario6"]);
$laimagen6 = test_input($_POST["imagen6"]);
$elcomentario6 = test_input($_POST["contenido_comentario6"]);
$lafecha6      = date('Y-m-d H:i:s');
$elusuario6    = test_input($_POST["id_usuario6"]);
$lapregunta6 = test_input($_POST["pregunta6"]);
$losdatos6 = test_input($_POST["datos_trimestre6"]);

//hacer insercion de datos
if ($elcomentario6 == null || $elcomentario6 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion6.php";
          </script>';
}else{
$miconsulta6   = "INSERT INTO respuestas_6 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre6 . "', '" . $elcomentario6 . "', (adddate(now(),interval -5 hour)), '" . $laimagen6 . "', '" . $losdatos6 . "' , '" . $elusuario6 . "', '" . $lapregunta6 . "')";
$resultado6    = mysqli_query($conexion, $miconsulta6);
header("Location: ../leccion6.php");
}
?>