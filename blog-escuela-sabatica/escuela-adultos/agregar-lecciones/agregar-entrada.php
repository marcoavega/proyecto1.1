<?php
//incluir archivo de conexion
include "../../conexion-blog.php";
require("sesiones.php");
//require("../lista-url-seguras.php");
//error_reporting(0);
//validar sesion de usuario actual
$consultaid          = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
//variable de sesion para acceso y permisos
$varsesion = $_SESSION['nombre_usuario'];
if ($varsesion == null || $varsesion = '' || $registroconsultaid['id_permiso_blog'] == "1") {
    echo '<script>
        alert("No es un usuario registrado o autorizado favor de pedir autorización.");
        window.location.href="loginblog.html";
        </script>';
    die();
}
;
?>
<!DOCTYPE html>
<!--Inicia HTML5-->
<html lang="es-MX">
   <!--Head con metas y link de hoja de estilo-->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-
         scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="Pagina para agregar lecciones de escuela sabatica por trimestre de blog de escuela sabatica de adultos">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-agregar-entrada.css">
      <title>Página para agregar lecciones</title>
   </head>
   <body>
      <!--div principal-->
      <div class="contenedor-filas-columnas">
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="../principal-blog.php"><img class="logo" src="../../../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="">
                     <h1 class="h1-header">Agregar lecciones de escuela sabática</h1>
                  </a>
               </div>
            </div>
         </header>
         <!--menu nav-->
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
                     <a href="../principal-blog.php">
                        <h3>Inicio</h3>
                     </a>
                  </li>
                  <li>
                     <a href="../datos-usuario.php">
                        <h3>Opciones</h3>
                     </a>
                  </li>
                  <li>
                     <a href="../cerrar-sesion.php">
                        <h3>Cerrar sesión</h3>
                     </a>
                  </li>
                  <li>
                     <form id="buscador" name="buscador" method="post" action="../buscador.php"> 
                        <input class="input-100" id="buscar" name="palabra" type="search" placeholder="Buscar lección" autofocus >
                        <input type="submit" name="buscador" class="boton_aceptar" value="Buscar">
                     </form>
                  </li>
               </ul>
            </nav>
         </div>
         <!--mapa de navegación-->
         <div class="columnamapa">
            <div class="mapa">
               <ul>
                  <li class="amapa">Usted está aquí
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="../principal-blog.php">Principal</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="">Agregar entrada</a>
                  </li>
               </ul>
            </div>
         </div>
         <!--section para ir a agregar lecciones-->
         <section>
            <div class="principal1">
               <h2 class="h2_titulo_principal">Agregar lecciones de escuela sabática</h2>
            </div>
            <div class="contenerdorprincipal">
            <div class="principal2">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Agregar datos de trimestre</h2>
                     <p class="particle">Sección para agregar trimestre.</p>
                     <a href="agregar-trimestre.php"><button class="boton_entrar">Agregar trimestre</button></a>
                  </div>
               </article>
            </div>
            <div class="principal2">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Agregar datos de títulos</h2>
                     <p class="particle">Sección para agregar títulos.</p>
                     <a href="agregar-lecciones.php"><button class="boton_entrar">Agregar lección</button></a>
                  </div>
               </article>
            </div>
            <div class="principal2">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Agregar datos de lecciones</h2>
                     <p class="particle">Sección para agregar datos de lecciones.</p>
                     <a href="agregar-datos-lecciones.php"><button class="boton_entrar">Agregar datos</button></a>
                  </div>
               </article>
            </div>
            </div>
         </section>
          <!--Inicia footer-->
          <footer>
            <div class="columna-footer">
               <ul class="ul-footer">
                  <li><a class="a-footer" href="../../../contenidos/acerca-de.html">Acerca de ...</a></li>
                  <li><a class="a-footer" href="../../../contenidos/aviso-de-privacidad.html">Aviso de privacidad</a></li>
               </ul>
               <p class="pfooter-1"><a class="link-footer" href="https://miglesiaddios.jimdo.com/" target="_blank">Página hermana de iglesia de Dios Valle Verde (miglesiaddios)</a></p>
               <p class="pfooter">Conferencia general de la iglesia de Dios A.R. S.G.A.R.18/93</p>
            </div>
         </footer>
      </div>
   </body>
</html>