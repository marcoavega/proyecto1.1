<?php
require("actualizar-entrada.php");
require("lista-url-seguras.php");
date_default_timezone_set("America/Mexico_City");
//se inicia sesion con el usuario logeado.
//error_reporting(0);
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
      <meta name="description" content="Página de insumos de iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/registro-entrada.css">
      <script src="../javascript/validar-entrada-y-salida.js"></script>
      <title>Página registro de insumos</title>
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
                  <a href="#">
                     <h1 class="h1-header">Página registro de insumos</h1>
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
                  <li><a  class="amapa" href="principal-insumos.php">Principal insumos</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="#">Ingreso de insumos</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="boton_regresar">
         <a href="principal-insumos.php"><button class="span_pregunta">Regresar</button></a>
         </div>
         <div class="container">
            <h2 class="h2titulotabla">Registrar entrada</h2>
            <table class="tabla" >
               <tr>
                  <th>ID de producto</th>
                  <th>Usuario que lo dio de alta</th>
                  <th>Nombre del producto</th>
                  <th>Descripción del producto</th>
                  <th>Cantidad</th>
                  <th>Código de barras</th>
                  <th>fecha</th>
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
               </tr>
               <?php
                  }
                  ?>
            </table>
         </div>
         <!--seguir con formulario-->
         
            <div class="formulario"><form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validarEntradaSalida()">
            <p class="pseleccione">Seleccione el nombre de producto:</p>
            <?php //sentencia SQL y la ejecutamos
            $sSQL   = "Select nombre_articulo From detalle_entrada_insumos Order By id_detalle_entrada_insumos";
            $result = mysqli_query($conexion, $sSQL);
            echo '<select name="nombre_articulo" class="select">';
            //menu desplegable
            while ($row = mysqli_fetch_array($result)) {
                echo '<option>' . $row["nombre_articulo"];
            }
            ?>
         </select>
         <p class="pseleccione">Ingrese la cantidad a sumar:</p>
         <input id="cantidad" name="cantidad" type="text" class="select" placeholder="Ingrese la cantidad">
         <input type="submit" value="Actualizar" class="boton">
         </form>
         <span class="input-100"><?php echo $nombreErr;?></span>
         <span class="input-100"><?php echo $cantidadErr;?></span>
         <span class="input-100"><?php echo $envioErr;?></span>
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
      </div><!--divprincipal-->
   </body>
</html>