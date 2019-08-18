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
$elnombre5     = test_input($_POST["nombre_usuario5"]);
$laimagen5 = test_input($_POST["imagen5"]);
$elcomentario5 = test_input($_POST["contenido_comentario5"]);
$lafecha5      = date('Y-m-d H:i:s');
$elusuario5    = test_input($_POST["id_usuario5"]);
$losdatos5 = test_input($_POST["datos_trimestre5"]);
$lapregunta5 = test_input($_POST["pregunta5"]);

//hacer insercion de datos
if ($elcomentario5 == null || $elcomentario5 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion2.php";
          </script>';
}else{
$miconsulta5   = "INSERT INTO respuestas_5 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre5 . "', '" . $elcomentario5 . "', NOW(), '" . $laimagen5 . "', '" . $losdatos5 . "', '" . $elusuario5 . "', '" . $lapregunta5 . "')";
$resultado5    = mysqli_query($conexion, $miconsulta5);
header("Location: ../leccion2.php");
}
?> 
