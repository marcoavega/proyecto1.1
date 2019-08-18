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
$elnombre1     = test_input($_POST["nombre_usuario1"]);
$elcomentario1 = test_input($_POST["contenido_comentario1"]);
$lafecha1      = date('Y-m-d H:i:s');
$elusuario1    = test_input($_POST["id_usuario1"]);
$laimagen1 = test_input($_POST["imagen1"]);
$losdatos1 = test_input($_POST["datos_trimestre1"]);
$lapregunta1 = test_input($_POST["pregunta1"]);
//hacer insercion de datos
if ($elcomentario1 == null || $elcomentario1 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion7.php";
          </script>';
}else{
$miconsulta1   = "INSERT INTO respuestas_1 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre1 . "', '" . $elcomentario1 . "', (adddate(now(),interval -5 hour)), '" . $laimagen1 . "', '" . $losdatos1 . "', '" . $elusuario1 . "', '" . $lapregunta1 . "')";
$resultado1    = mysqli_query($conexion, $miconsulta1);
header("Location: ../leccion7.php");
}
?> 