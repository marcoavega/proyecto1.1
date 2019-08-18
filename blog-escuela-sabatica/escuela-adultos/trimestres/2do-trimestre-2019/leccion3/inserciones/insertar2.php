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
$elnombre2     = test_input($_POST["nombre_usuario2"]);
$elcomentario2 = test_input($_POST["contenido_comentario2"]);
$lafecha2      = date('Y-m-d H:i:s');
$elusuario2    = test_input($_POST["id_usuario2"]);
$laimagen2 = test_input($_POST["imagen2"]);
$losdatos2 = test_input($_POST["datos_trimestre2"]);
$lapregunta2 = test_input($_POST["pregunta2"]);

//hacer insercion de datos
if ($elcomentario2 == null || $elcomentario2 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion3.php";
          </script>';
}else{
$miconsulta2   = "INSERT INTO respuestas_2 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre2 . "', '" . $elcomentario2 . "', NOW(), '" . $laimagen2 . "', '" . $losdatos2 . "', '" . $elusuario2 . "', '" . $lapregunta2 . "')";
$resultado2    = mysqli_query($conexion, $miconsulta2);
header("Location: ../leccion3.php");
}
?> 