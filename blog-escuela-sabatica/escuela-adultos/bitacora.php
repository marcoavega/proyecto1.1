<?php
//incluir archivo de conexion
include "../conexion-blog.php";
require("sesiones.php");
//require("lista-url-seguras.php");
//error_reporting(0);
//validar sesion de usuario actual
$consultaid          = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
$varsesion           = $_SESSION['nombre_usuario'];
if ($varsesion == null || $varsesion = '' || $registroconsultaid['id_permiso_blog'] == "1") {
    echo '<script>
        alert("No es un usuario registrado favor de pedir autorización.");
        window.location.href="loginblog.html";
        </script>';
    die();
}
;
?>
     <?php
//consulta para mostrar en el reporte
$query1_1      = "SELECT * FROM respuestas_1 ORDER BY nombre_usuario DESC";
$resultado1_1  = $conexion->query($query1_1);
$query2_1      = "SELECT * FROM respuestas_2 ORDER BY nombre_usuario DESC";
$resultado2_1  = $conexion->query($query2_1);
$query3_1     = "SELECT * FROM respuestas_3 ORDER BY nombre_usuario DESC";
$resultado3_1  = $conexion->query($query3_1);
$query4_1      = "SELECT * FROM respuestas_4 ORDER BY nombre_usuario DESC";
$resultado4_1  = $conexion->query($query4_1);
$query5_1      = "SELECT * FROM respuestas_5 ORDER BY nombre_usuario DESC";
$resultado5_1  = $conexion->query($query5_1);
$query6_1      = "SELECT * FROM respuestas_6 ORDER BY nombre_usuario DESC";
$resultado6_1  = $conexion->query($query6_1);
$query7_1      = "SELECT * FROM respuestas_7 ORDER BY nombre_usuario DESC";
$resultado7_1  = $conexion->query($query7_1);
$query8_1      = "SELECT * FROM respuestas_8 ORDER BY nombre_usuario DESC";
$resultado8_1  = $conexion->query($query8_1);

$query1_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_1 group by nombre_usuario";
$resultado1_2 = $conexion->query($query1_2);
$query2_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_2 group by nombre_usuario";
$resultado2_2 = $conexion->query($query2_2);
$query3_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_3 group by nombre_usuario";
$resultado3_2 = $conexion->query($query3_2);
$query4_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_4 group by nombre_usuario";
$resultado4_2 = $conexion->query($query4_2);
$query5_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_5 group by nombre_usuario";
$resultado5_2 = $conexion->query($query5_2);
$query6_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_6 group by nombre_usuario";
$resultado6_2 = $conexion->query($query6_2);
$query7_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_7 group by nombre_usuario";
$resultado7_2 = $conexion->query($query7_2);
$query8_2     = "SELECT COUNT(*) nombre_usuario FROM respuestas_8 group by nombre_usuario";
$resultado8_2 = $conexion->query($query8_2);
?>
<!DOCTYPE html>
<!--Inicia HTML5-->
<html lang="es-MX">
   <!--Head con metas y link de hoja de estilos y archivo JavaScript-->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-
         scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="Página de reportes totales de efectivo Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-paginas-reportes.css">
      <script type="text/javascript" src="js/.js"></script>
      <title>Página de reportes totales Iglesia de Dios Valle Verde</title>
   </head>
   <body>
      <div class="contenedor-filas-columnas">
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="principal-blog.php"><img class="logo" src="../../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="">
                     <h1 class="h1-header">Página de reporte de participaciones en blog</h1>
                  </a>
               </div>
            </div>
         </header>
         <!--menu-->
         <div class="columna-nav">
            <nav class="menu">
               <ul>
                  <li>
                     <a href="">
                        <h3>Bienvenido: <?php
                           echo $_SESSION['nombre_usuario'];
                           ?></h3>
                     </a>
                  </li>
                  <li>
                     <a href="principal-blog.php">
                        <h3>Inicio</h3>
                     </a>
                  </li>
                  <li>
                     <a href="datos-usuario.php">
                        <h3>Datos de usuario</h3>
                     </a>
                  </li>
                  <li>
                     <a href="cerrar-sesion.php">
                        <h3>Cerrar sesión</h3>
                     </a>
                  </li>
                  <li>
                     <form id="buscador" name="buscador" method="post" action="buscador.php"> 
                        <input class="input-100" id="buscar" name="palabra" type="search" placeholder="Buscar..." autofocus >
                        <input type="submit" name="buscador" class="boton_aceptar" value="Buscar">
                     </form>
                  </li>
               </ul>
            </nav>
         </div>
         <!--mapa-->
         <div class="columnamapa">
            <div class="mapa">
               <ul>
                  <li class="amapa">Usted está aquí
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="principal-blog.php">Principal</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="bitacora.php">Reportes</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="container">
            <h2 class="h2titulotabla">Reporte respuestas</h2>
            <table class="tabla" >
               <tr>
                  <th>Usuario</th>
                  <th>Comentario</th>
                  <th>Fecha de comentario</th>
                  <th>Datos de trimestre</th>
                  <th>Pregunta</th>
               </tr>
               <?php
                  while ($fila = mysqli_fetch_array($resultado1_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado2_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado3_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado4_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado5_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado6_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado7_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado8_1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_comentario']);
                     ?></td>
                  <td><?php
                     echo ($fila['datos_trimestre']);
                     ?></td>
                  <td><?php
                     echo ($fila['pregunta']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
            </table>
            <div class="divboton">
               <input class="boton-reporte" type="button" name="Ver reporte pdf" value="ver reporte pdf" onclick="location.href='reporte/reportes-primer-trimestre-2019/reporte-total.php'">
            </div>

            <h2 class="h2titulotabla">Reporte de participaciones por pregunta</h2>
            <table class="tabla" >
               <tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 1</th>
               </tr>
               <?php

                  $query1     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_1 GROUP BY nombre_usuario";
                  $resultado1 = $conexion->query($query1);
         
                  ?>

               <?php
                  while ($fila1 = mysqli_fetch_array($resultado1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila1['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila1['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>

            

               <tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 2</th>
               </tr>
               <?php
                  $query2     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_2 GROUP BY nombre_usuario";
                  $resultado2 = $conexion->query($query2);
                  ?>
<?php
                  while ($fila2 = mysqli_fetch_array($resultado2)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila2['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila2['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>

               
<tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 3</th>
               </tr>
               <?php
                  $query3     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_3 GROUP BY nombre_usuario";
                  $resultado3 = $conexion->query($query3);
                  ?>
<?php
                  while ($fila3 = mysqli_fetch_array($resultado3)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila3['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila3['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>


<tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 4</th>
               </tr>
               <?php
                  $query4     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_4 GROUP BY nombre_usuario";
                  $resultado4 = $conexion->query($query4);
                  ?>
<?php
                  while ($fila4 = mysqli_fetch_array($resultado4)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila4['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila4['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>

<tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 5</th>
               </tr>
               <?php
                  $query5     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_5 GROUP BY nombre_usuario";
                  $resultado5 = $conexion->query($query5);
                  ?>
<?php
                  while ($fila5 = mysqli_fetch_array($resultado5)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila5['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila5['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>

<tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 6</th>
               </tr>
               <?php
                  $query6     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_6 GROUP BY nombre_usuario";
                  $resultado6 = $conexion->query($query6);
                  ?>
<?php
                  while ($fila6 = mysqli_fetch_array($resultado6)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila6['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila6['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>


<tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 7</th>
               </tr>
               <?php
                  $query7     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_7 GROUP BY nombre_usuario";
                  $resultado7 = $conexion->query($query7);
                  ?>
<?php
                  while ($fila7 = mysqli_fetch_array($resultado7)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila7['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila7['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>

<tr>
                  <th>Nombre de usuario</th>
                  <th>Número de participaciones pregunta 8</th>
               </tr>
               <?php
                  $query8     = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_8 GROUP BY nombre_usuario";
                  $resultado8 = $conexion->query($query8);
                  ?>
<?php
                  while ($fila8 = mysqli_fetch_array($resultado8)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila8['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila8['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>


                  <th>ID Nombre de usuario</th>
                  <th>Número de participaciones</th>
               </tr>
               <?php







$query1     = "SELECT sum(total) AS total1, nombre_usuario
from (
    select count(*) as total, nombre_usuario
    from respuestas_1 
    group by nombre_usuario

    union all

    select count(*) as total, nombre_usuario
    from respuestas_2 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_3 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_4 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_5 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_6 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_7 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_8 
    group by nombre_usuario
) t
group by nombre_usuario";

$resultado1 = $conexion->query($query1);

                  ?>
<?php
                  while ($fila1 = mysqli_fetch_array($resultado1)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila1['nombre_usuario']);
                     ?></td>
                     <td><?php
                     echo ($fila1['total1']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>


            </table>
            <div class="divboton">
               <input class="boton-reporte" type="button" name="Ver reporte pdf" value="ver reporte pdf" onclick="location.href='reporte/reportes-primer-trimestre-2019/reporte-total2.php'">
            </div>
         </div>
          <!--Inicia footer-->
          <footer>
            <div class="columna-footer">
               <ul class="ul-footer">
                  <li><a class="a-footer" href="../../contenidos/acerca-de.html">Acerca de ...</a></li>
                  <li><a class="a-footer" href="../../contenidos/aviso-de-privacidad.html">Aviso de privacidad</a></li>
               </ul>
               <p class="pfooter-1"><a class="link-footer" href="https://miglesiaddios.jimdo.com/" target="_blank">Página hermana de iglesia de Dios Valle Verde (miglesiaddios)</a></p>
               <p class="pfooter">Conferencia general de la iglesia de Dios A.R. S.G.A.R.18/93</p>
            </div>
         </footer>
      </div>
      <!--divprincipal-->
   </body>
</html>