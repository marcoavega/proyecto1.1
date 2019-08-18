<?php
require_once("../sesiones.php");
//se inicia sesion con el usuario logeado.
//error_reporting(0);
include "../conexion-sis-admin.php";
$miconsulta = "SELECT * FROM detalle_entrada_insumos";
$resultado  = mysqli_query($conexion, $miconsulta);
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
      <meta name="description" content="Página de reportes totales de insumos Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/reportes.css">
      <script type="text/javascript" src="../javascript/validar-borrar-insumo.js"></script>
      <title>Pagina de reporte insumos</title>
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
                     <h1 class="h1-header">Página reporte insumos</h1>
                  </a>
               </div>
            </div>
         </header>
         <!--menu-->
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
                  <li><a  class="amapa" href="principal-insumos.php">principal insumos</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="">Ingreso de insumos</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="boton_regresar">
         <a href="principal-insumos.php"><button class="span_pregunta">Regresar</button></a>
         </div>
         <div class="container">
            <h2 class="h2titulotabla">Reporte insumos</h2>
            <table class="tabla" >
               <tr>
                  <th>ID de articulo</th>
                  <th>Usuario que lo dio de alta</th>
                  <th>Nombre del articulo</th>
                  <th>Descripción del articulo</th>
                  <th>Cantidad</th>
                  <th>Código de barras</th>
                  <th>fecha</th>
                  <th>Borrar</th>
               </tr>
               <?php
                  while ($fila = mysqli_fetch_array($resultado)) {
                  ?>
               <tr>
                  <td><?php
                     echo ($fila['id_detalle_entrada_insumos']);
                     ?></td>
                  <td><?php
                     echo ($fila['nombre_usuario']);
                     ?></td>
                  <td><?php
                     echo ($fila['nombre_articulo']);
                     ?></td>
                  <td><?php
                     echo ($fila['descripcion_articulo']);
                     ?></td>
                  <td><?php
                     echo ($fila['cantidad']);
                     ?></td>
                  <td><?php
                     echo ($fila['codigo_barras']);
                     ?></td>
                  <td><?php
                     echo ($fila['fecha']);
                     ?></td>
                     <td><form method='post' action="validar-borrar-insumo.php" onsubmit="return validarBorrar()">
                     <input id="id_detalle_entrada_insumos" type='hidden' name='id_detalle_entrada_insumos' value='<?php echo ($fila['id_detalle_entrada_insumos']);?>'>
                     <input class="boton_borrar" type='submit' value='Borrar'>
                     </form></td>
               </tr>
               <?php
                  }
                  ?>
            </table>
         </div>
         <div class="divboton">
            <input target="_blank" class="boton-reporte" type="button" name="Ver reporte pdf" value="ver reporte pdf" onclick="location.href='reporte-total-insumos.php'">
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