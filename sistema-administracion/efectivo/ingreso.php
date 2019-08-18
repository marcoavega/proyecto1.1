<?php
require("lista-url-seguras.php");
//se inicia sesion con el usuario logeado.
//error_reporting(0);
require("ingreso-validacion.php");
date_default_timezone_set("America/Mexico_City");
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
      <meta name="description" content="Página de ingreso de efectivo de Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-ingresos.css">
      <script src="../javascript/validar-ingreso.js"></script>
      <title>Página de ingreso de efectivo de administración</title>
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
                     <h1 class="h1-header">Página de ingresos de efectivo</h1>
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
                     <a href="pagina-reporte-entrada.php">
                        <h3 class="h3menu">Reportes</h3>
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
                  <li><a  class="amapa" href="../principal-efectivo.php">Administración de efectivo</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="#">Ingreso de efectivo</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="boton_regresar">
         <a href="../principal-efectivo.php"><button class="span_pregunta">Regresar</button></a>
         </div>
         <!--contenedor con el fomulario que envia la informaicon tanto a la base de datos con php con metodo post como a el archivo javascript por medio de id-->
         <div class="container">
            <h2 class="h2formulario">Captura de datos de ingreso</h2>
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarIngreso()" class="formulario">
               <label for="comentar" class="labelform">Favor de ingresar los datos del ingreso:</label>
               <div class="columna1">
                  <label for="fname">Nombre de usuario:</label>
               </div>
               <div class="columna2">
                  <input id="usuario" name="usuario" type="text" value="<?php
                     echo $_SESSION['nombre_usuario'];
                     ?>" readonly="readonly" class="input">
                     <span class="input-100"><?php echo $usuarioErr;?></span>
               </div>
               <div class="columna1">
                  <label for="fname">Ingrese la cantidad $:</label>
               </div>
               <div class="columna2">
                  <input id="cantidad" name="cantidad" type="text" placeholder="Cantidad..." class="input">
                  <span class="input-100"><?php echo $cantidadErr;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la descripción del ingreso:</label>
               </div>
               <div class="columna2">
                  <textarea id="descripcion" name="descripcion" type="text" placeholder="Descripción..." class="input"></textarea>
                  <span class="input-100"><?php echo $descripcionErr;?></span>
               </div>
               <div class="columna1">
                  <label for="fname">Tipo de comprobante:</label>
               </div>
               <div class="columna2">
                  <input id="tipo" name="tipo" type="text" placeholder="Tipo..." class="input">
                  <span class="input-100"><?php echo $tipoErr;?></span>
               </div>
               <div class="columna1">
                  <label for="fname">Número de comprobante:</label>
               </div>
               <div class="columna2">
                  <input id="numero" name="numero" type="text" placeholder="Numero..." class="input">
                  <span class="input-100"><?php echo $numeroErr;?></span>
               </div>
               <div class="columna1">
                  <label for="fname">Id de usuario:</label>
               </div>
               <div class="columna2">
                  <input id="id" name="id" type="text" value="<?php
                     echo utf8_encode($registroconsultaid['id_usuario_administrador']);
                     ?>" readonly="readonly" class="input">
                     <span class="input-100"><?php echo $idErr;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos" class="btn-enviar">
                  <span class="input-100"><?php echo $envioErr;?></span>
               </div>
            </form>
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
      <!--div-principal-->
   </body>
</html>