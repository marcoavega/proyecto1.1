<?php
include "../conexion-blog.php";
require("sesiones.php");
$consultaid          = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
// Recibo los datos de la imagen

$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
 
//($nombre_img == NULL) || ($_FILES['imagen']['size'] >= 200000)
//Si existe imagen y tiene un tamaño correcto

if (($_FILES['imagen']['size'] > 2000000))
{
   echo ' La imagen debe ser menor a 2 MB <script>
      alert("La imagen debe ser menor a 2 MB");
      window.history.go(-1);
      </script>';
      
}else{
   if(($tamano == NULL)){
      echo ' Debe subir una imagen <script>
      alert("Debe subir una imagen");
      window.history.go(-1);
      </script>';
   }else{

   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] != "image/jpeg") && ($_FILES["imagen"]["type"] != "image/jpg") && ($_FILES["imagen"]["type"] != "image/png"))
   {
      echo '<script>
      alert("Debe ser un archico png");
      window.history.go(-1);
      </script>';
   }else{
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT']."/iglesia/imagenes/imagenes2/";
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
      echo '<script>
      alert("Guardado");
      window.history.go(-1);
      </script>';
    }
    

   }
}
    

/* en pasos anteriores deberíamos tener una conexión abierta a nuestra base de 
datos para ejecutar nuestra sentencia SQL */
 
/* con la siguiente sentencia le asignamos a nuestro campo de la tabla ruta_imagen 
el nombre de nuestra imagen */
 
$sql = "UPDATE usuario_blog_adultos SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultado = mysqli_query($conexion, $sql);

//hacer update en respuestas y preguntas
$consultaImagen1 = "UPDATE respuestas_1 SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultadoImagen1 = mysqli_query($conexion, $consultaImagen1);
$consultaImagen2 = "UPDATE respuestas_2 SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultadoImagen2 = mysqli_query($conexion, $consultaImagen2);
$consultaImagen3 = "UPDATE respuestas_3 SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultadoImagen3 = mysqli_query($conexion, $consultaImagen3);
$consultaImagen4 = "UPDATE respuestas_4 SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultadoImagen4 = mysqli_query($conexion, $consultaImagen4);
$consultaImagen5 = "UPDATE respuestas_5 SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultadoImagen5 = mysqli_query($conexion, $consultaImagen5);
$consultaImagen6 = "UPDATE respuestas_6 SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultadoImagen6 = mysqli_query($conexion, $consultaImagen6);
$consultaImagen7 = "UPDATE respuestas_7 SET ruta_imagen = '$nombre_img' WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "' ";
$resultadoImagen7 = mysqli_query($conexion, $consultaImagen7);


/* volvemos a la página principal para cargar la imagen que hemos subido 
header("Location: datos-usuario.php");
*/
?>