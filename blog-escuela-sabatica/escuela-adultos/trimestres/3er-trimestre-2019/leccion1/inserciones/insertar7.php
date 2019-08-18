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
$elnombre7     = test_input($_POST["nombre_usuario7"]);
$laimagen7 = test_input($_POST["imagen7"]);
$elcomentario7 = test_input($_POST["contenido_comentario7"]);
$lafecha7      = date('Y-m-d H:i:s');
$elusuario7    = test_input($_POST["id_usuario7"]);
$lapregunta7 = test_input($_POST["pregunta7"]);
$losdatos7 = test_input($_POST["datos_trimestre7"]);

//hacer insercion de datos
if ($elcomentario7 == null || $elcomentario7 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion1.php";
          </script>';
}else{
$miconsulta7   = "INSERT INTO respuestas_7 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre7 . "', '" . $elcomentario7 . "', NOW(), '" . $laimagen7 . "', '" . $losdatos7 . "' , '" . $elusuario7 . "', '" . $lapregunta7 . "')";
$resultado7    = mysqli_query($conexion, $miconsulta7);
header("Location: ../leccion1.php");
}
?>