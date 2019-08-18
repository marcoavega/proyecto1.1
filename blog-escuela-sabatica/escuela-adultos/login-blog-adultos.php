<?php
require("login-blog-adultos-validacion.php");
?>
<!--inicia documento html5-->
<!DOCTYPE html>
<html lang="es-MX">
   <!--Head con metas y link de hoja de estilos y archivo JavaScript-->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-
         scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="Página de login de blog de escuela sabática niños, adolescentes y adultos de Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-login-blog-adultos.css">
      <script src="../../javascript/validar-login-blog-adultos.js"></script>
      <title>Login de blog escuela sabática de adultos</title>
   </head>
   <body>
      <div class="contenedor-filas-columnas">
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="../../index.html"><img class="logo" src="../../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="">
                     <h1 class="h1-header">Login de blog escuela sabática de adultos</h1>
                  </a>
               </div>
            </div>
         </header>
         <!--Inicia nav-->
         <div class="columna-100-nav">
            <nav class="menu">
               <ul class="ul-nav">
                  <li class="li-nav">
                     <a class="a-nav" href="">
                        <h2 class="h2-menu-nav">Foro de escuela sabática</h2>
                     </a>
                  </li>
                  <li class="li-nav">
                     <a class="a-nav" href="../../sistema-administracion/login-sis-admin.php">
                        <h2 class="h2-menu-nav">Sistema de administración</h2>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
         <!--Section con login-->
         <section>
            <div class="login1">
               <form class="formulario-registrologin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarlogin()">
                  <h3 class="formulario-titulo">Escuela sabática adultos</h3>
                  <h3 class="formulario-titulo">Ingrese con sus datos:</h3>
                  <div class="contenedor-inputs">
                     <span class="input-100-rojo"><?php echo $usuarioErr;?></span>
                     <span class="input-100-rojo"><?php echo $usuarioErr2;?></span>
                     <input id="nombre" type="text" name="nombre" placeholder="Nombre de usuario" class="input-100">
                     <span class="input-100-rojo"><?php echo $contrasenaErr;?></span>
                     <span class="input-100-rojo"><?php echo $contrasenaErr2;?></span>
                     <input type="password" id="contrasena" name="contrasena" placeholder="contraseña" class="input-100">
                     <img src="captcha_script.php" class="input-100">
                     <span class="input-100-rojo"> <?php echo $captchaErr;?></span>
                     <span class="input-100-rojo"> <?php echo $captchaErr2;?></span>
                     <span class="input-100-rojo"> <?php echo $captchaErr3;?></span>
                     <input type="text" id="captcha" name="captcha" placeholder="ingrese codigo captcha..." class="input-100">
                     <input type="submit" value="Ingresar" class="btn-enviar">
                  </div>
                  <!--Label para redirigir a registrar-->
                  <div class="label"><label class="registrarse" for="registro">si no está registrado: <a class="aregistrarse" href="registro-blog.php">Registrarse</a></label></div>
               </form>
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
   </body>
</html>