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
$elnombre = test_input($_POST["nombre_usuario1"]);
$elcomentario = test_input($_POST["contenido_comentario1"]);
$lafecha      = date('Y-m-d H:i:s');
$elusuario = test_input($_POST["id_usuario1"]);
$laimagen = test_input($_POST["imagen1"]);
$losdatos = test_input($_POST["datos_trimestre1"]);
$lapregunta = test_input($_POST["pregunta1"]);

if ($elcomentario == null || $elcomentario == '') {
    echo '<script>
          alert("no ingreso ningun comentario.");
          window.location.href="../leccion8.php";
          </script>';
}else{
    $miconsulta = "INSERT INTO respuestas_1 (nombre_usuario, comentario, fecha_comentario, ruta_imagen, datos_trimestre, id_usuario_blog_adultos, pregunta) VALUES ('" . $elnombre . "', '" . $elcomentario . "', NOW(), '" . $laimagen . "', '" . $losdatos . "', '" . $elusuario . "', '" . $lapregunta . "')";
$resultado    = mysqli_query($conexion, $miconsulta);
header("Location: ../leccion8.php");
}
?>