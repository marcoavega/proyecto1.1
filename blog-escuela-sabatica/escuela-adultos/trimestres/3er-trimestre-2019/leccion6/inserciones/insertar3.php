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
$elnombre3     = test_input($_POST["nombre_usuario3"]);
$elcomentario3 = test_input($_POST["contenido_comentario3"]);
$lafecha3      = date('Y-m-d H:i:s');
$elusuario3    = test_input($_POST["id_usuario3"]);
$laimagen3 = test_input($_POST["imagen3"]);
$losdatos3 = test_input($_POST["datos_trimestre3"]);
$lapregunta3 = test_input($_POST["pregunta3"]);
//hacer insercion de datos
if ($elcomentario3 == null || $elcomentario3 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion6.php";
          </script>';
}else{
$miconsulta3   = "INSERT INTO respuestas_3 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre3 . "', '" . $elcomentario3 . "', (adddate(now(),interval -5 hour)), '" . $laimagen3 . "', '" . $losdatos3 . "', '" . $elusuario3 . "', '" . $lapregunta3 . "')";
$resultado3    = mysqli_query($conexion, $miconsulta3);
header("Location: ../leccion6.php");
}
?> 