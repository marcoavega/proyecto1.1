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
$elnombre8     = test_input($_POST["nombre_usuario8"]);
$laimagen8 = test_input($_POST["imagen8"]);
$elcomentario8 = test_input($_POST["contenido_comentario8"]);
$lafecha8      = date('Y-m-d H:i:s');
$elusuario8    = test_input($_POST["id_usuario8"]);
$lapregunta8 = test_input($_POST["pregunta8"]);
$losdatos8 = test_input($_POST["datos_trimestre8"]);

//hacer insercion de datos
if ($elcomentario8 == null || $elcomentario8 == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion10.php";
          </script>';
}else{
$miconsulta8   = "INSERT INTO respuestas_8 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre8 . "', '" . $elcomentario8 . "', NOW(), '" . $laimagen8 . "', '" . $losdatos8 . "' , '" . $elusuario8 . "', '" . $lapregunta8 . "')";
$resultado8    = mysqli_query($conexion, $miconsulta8);
header("Location: ../leccion10.php");
}
?>