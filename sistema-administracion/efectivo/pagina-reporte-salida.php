<?php
require("lista-url-seguras.php");
require_once("sesiones.php");
//se inicia sesion con el usuario logeado.
//error_reporting(0);
include "../conexion-sis-admin.php";
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$miconsulta = "SELECT * FROM detalle_salida_efectivo";
$resultado  = mysqli_query($conexion, $miconsulta);
//consulta para la suma y guardar en varianle result
$sql        = "SELECT SUM(cantidad) as total FROM detalle_salida_efectivo";
$result     = mysqli_query($conexion, $sql);

$consultaid          = "SELECT * FROM usuario_administrador WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);

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
      <meta name="description" content="Página de reportes de salida de efectivo Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-paginas-reportes.css">
      <script type="text/javascript" src="../javascript/validar-borrar-salida.js"></script>
      <title>Página de reportes salidas iglesia de Dios Valle Verde</title>
   </head>
   <body>
      <div class="contenedor-filas-columnas">
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="../principal-sis-admin.php"><img class="logo" src="../../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="">
                     <h1 class="h1-header">Página de reportes sistema de administración</h1>
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
                        <h3 class="h3menu">Bienvenido: <?php
                           echo $_SESSION['nombre_usuario'];
                           ?></h3>
                     </a>
                  </li>
                  <li>
                     <a href="../principal-sis-admin.php">
                        <h3 class="h3menu">Inicio</h3>
                     </a>
                  </li>
                  <li>
                     <a href="../datos-usuario.php">
                        <h3 class="h3menu">Datos de usuario</h3>
                     </a>
                  </li>
                  <li>
                     <a href="../cerrar-sesion.php">
                        <h3 class="h3menu">Cerrar sesión</h3>
                     </a>
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
                  <li><a  class="amapa" href="../principal-sis-admin.php">Principal</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="../principal-efectivo.php">principal administración de efectivo</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="principal-reportes.php">Reportes</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="">Reporte de salidas</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="boton_regresar">
         <a href="principal-reportes.php"><button class="span_pregunta">Regresar</button></a>
         </div>
         <div class="container">
            <h2 class="h2titulotabla">Reporte datos de salida</h2>
            <table class="tabla">
               <tr>
                  <th>ID salida</th>
                  <th>Usuario que registro salida</th>
                  <th>Cantidad</th>
                  <th>Descripción</th>
                  <th>Tipo de comprobante</th>
                  <th>Número de comprobante</th>
                  <th>Fecha</th>
                  <?php
            if ($registroconsultaid['id_permisos_usuario_administrador'] == "2") {
            ?>
                  <th>Borrar</th>
                  <?php
            }
            ;
            ?>
               <tr>
                  <?php
                     while ($fila = mysqli_fetch_array($resultado)) {
                     ?>
               <tr>
                  <td><?php
                     echo ($fila['id_detalle_salida_efectivo']);
                     ?></td>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['cantidad']);
                     ?></td>
                  <td><?php
                     echo ($fila['descripcion']);
                     ?></td>
                  <td><?php
                     echo ($fila['tipo_comprobante']);
                     ?></td>
                  <td><?php
                     echo ($fila['numero_comprobante']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha_salida']);
                     ?></td>
                     <?php
            if ($registroconsultaid['id_permisos_usuario_administrador'] == "2") {
            ?>
                  <td><form method='post' action="validar-borrar-salida.php" onsubmit="return validarBorrar()">  
                     <input id="id_detalle_salida_efectivo" type='hidden' name='id_detalle_salida_efectivo' value='<?php echo ($fila['id_detalle_salida_efectivo']);?>'>
                     <input class="boton_borrar" type='submit' value='Borrar'>
                     </form></td>
                     <?php
            }
            ;
            ?>
               </tr>
               <?php
                  }
                  ?>
               <?php
                  while ($fila = mysqli_fetch_array($result)) {
                  ?>
               <tr>
                  <td></td>
                  <td><?php
                     echo 'Total';
                     ?></td>
                  <td><?php
                     echo ($fila['total']);
                     ?></td>
               </tr>
               <?php
                  }
                  ?>
            </table>
         </div>
         <div class="divboton">
            <input class="boton-reporte" type="button" name="Ver reporte pdf" value="ver reporte pdf" onclick="location.href='reporte/reporte-salida.php'">
         </div>
        <!--Inicia footer-->
        <footer>
            <div class="columna-footer">
               <ul class="ul-footer">
                  <li><a class="a-footer" href="contenidos/acerca-de.html">Acerca de ...</a></li>
                  <li><a class="a-footer" href="contenidos/aviso-de-privacidad.html">Aviso de privacidad</a></li>
               </ul>
               <p class="pfooter-1"><a class="link-footer" href="https://miglesiaddios.jimdo.com/" target="_blank">Página hermana de iglesia de Dios Valle Verde (miglesiaddios)</a></p>
               <p class="pfooter">Conferencia general de la iglesia de Dios A.R. S.G.A.R.18/93</p>
            </div>
         </footer>
      </div>
      <!--divprincipal-->
   </body>
</html>