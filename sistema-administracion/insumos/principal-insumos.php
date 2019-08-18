<?php
require_once("../sesiones.php");
require("lista-url-seguras.php");
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
      <meta name="description" content="Página de administración de insumos Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/principal-insumos.css">
      <script src="js/validarlogin.js"></script>
      <title>Página principal administración de insumos</title>
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
                     <h1 class="h1-header">Página principal administración de insumos</h1>
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
                  <li><a  class="amapa" href="#">principal administración de insumos</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="boton_regresar">
         <a href="../principal-sis-admin.php"><button class="span_pregunta">Regresar</button></a>
         </div>
         <!--Section con opciones de escuelas sabaticas-->
         <section>
            <div class="caja-articles">
               <div class="columna-article">
                  <article class="info__columna">
                     <img class="imagen-article" src="../imagenes/imagenes-insumos/registrar.png" alt="sistema-administracion-ingreso-efectivo">
                     <h3 class="h3-article">Registrar Productos</h3>
                     <p class="info__txt">
                        Acceso para dar de alta productos.
                     </p>
                     <a href="registro.php"><button class="boton-article">Entrar</button></a>
                  </article>
               </div>
               <div class="columna-article">
                  <article class="info__columna">
                     <img class="imagen-article" src="../imagenes/imagenes-insumos/entrada.jpg" alt="salida-efectivo">
                     <h3 class="h3-article">Registrar entrada de productos</h3>
                     <p class="info__txt">
                        Acceso a registro de entrada de productos.
                     </p>
                     <a href="entrada.php"><button class="boton-article">Entrar</button></a>
                  </article>
               </div>
               <div class="columna-article">
                  <article class="info__columna">
                     <img class="imagen-article" src="../imagenes/imagenes-insumos/salida.png" alt="sistema-administracion-reportes-efectivo">
                     <h3 class="h3-article">Registrar salida de productos</h3>
                     <p class="info__txt">
                        Acceso a registro de salida de productos.
                     </p>
                     <a href="salida.php"><button class="boton-article">Entrar</button></a>
                  </article>
               </div>
               <div class="columna-article">
                  <article class="info__columna">
                     <img class="imagen-article" src="../imagenes/imagenes-insumos/reportes.png" alt="escuela_sabatica_iglesia_de_dios">
                     <h3 class="h3-article">Reportes de insumos</h3>
                     <p class="info__txt">
                        Acceso a reportes de insumos.
                     </p>
                     <a href="reportes-insumos-prin.php"><button class="boton-article">Entrar</button></a>
                  </article>
               </div>
            </div>
         </section>
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