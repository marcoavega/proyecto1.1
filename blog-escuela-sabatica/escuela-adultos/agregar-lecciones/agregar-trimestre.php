<?php
require("agregar-trimestre-validacion.php");
//validar sesion de usuario actual para el acceso.
$consultaid          = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
//variable de sesion para acceso y permisos
$varsesion = $_SESSION['nombre_usuario'];
if ($varsesion == null || $varsesion = '' || $registroconsultaid['id_permiso_blog'] == "1") {
    echo '<script>
        alert("No es un usuario registrado o autorizado, favor de pedir autorización.");
        window.location.href="loginblog.html";
        </script>';
    die();
}
;
?>
<!DOCTYPE html>
<!--Inicia HTML5-->
<html lang="es-MX">
   <!--Head con metas y link de hoja de estilos y archivo JavaScript-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-
         scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="Página de ingreso de trimestre de Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-agregar-trimestre.css">
      <script src="../../../javascript/validar-agregar-trimestre.js"></script>
      <title>Página registro de trimestre.</title>
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
                     <h1 class="h1-header">Página de registro de trimestre</h1>
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
                        <h3 class="h3menu">Bienvenido: <?php
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
                        <h3>Datos de usuario</h3>
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
                  <li><a  class="amapa" href="agregar-entrada.php">Agregar entrada</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="">Registrar trimestre</a>
                  </li>
               </ul>
            </div>
         </div>
         <!--contenedor con el fomulario que envia la información tanto a la base de datos con php con metodo post como a el archivo javascript por medio de id-->
         <div class="container">
            <h2 class="h2formulario">Captura de datos de trimestre</h2>
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formulario" onsubmit="return validarAgregar()">
               <label for="comentar" class="labelform">Favor de ingresar los datos de trimestre:</label>
               <div class="columna1">
                  <label for="fname">Ingrese datos de trimestre(número de trimestre, meses y año):</label>
               </div>
               <div class="columna2">
                     <span class="input-100"><?php echo $datosErr;?></span>
                  <input id="datos_trimestre" name="datos_trimestre" type="text" placeholder="Ingrese datos..." class="input">
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese el título del trimestre:</label>
               </div>
               <div class="columna2">
                     <span class="input-100"><?php echo $tituloErr;?></span>
                  <input id="titulo" name="titulo" type="text" placeholder="Ingrese titulo..." class="input">
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos trimestre" class="btn-enviar">
                  <span class="input-100"><?php echo $envioErr;?></span>
               </div>
            </form>
         </div>
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