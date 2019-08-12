<?php
require("login-sis-admin-validacion.php");
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
      <meta name="description" content="Página de login de sistema de administración de Iglesia de Dios valle verde">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, sistema de administración.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-login-sis-admin.css">
      <script src="javascript/validar-login-sis-admin.js"></script>
      <title>Login de sistema de administración</title>
   </head>
   <body>
      <div class="contenedor-filas-columnas">
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="../index.html"><img class="logo" src="../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="login-sis-admin.php">
                     <h1 class="h1-header">Login sistema de administración</h1>
                  </a>
               </div>
            </div>
         </header>
         <!--Inicia nav-->
         <div class="columna-100-nav">
            <nav class="menu">
               <ul class="ul-nav">
                  <li class="li-nav">
                     <a class="a-nav" href="../blog-escuela-sabatica/escuela-adultos/login-blog-adultos.php">
                        <h2 class="h2-menu-nav">Foro de escuela sabática</h2>
                     </a>
                  </li>
                  <li class="li-nav">
                     <a class="a-nav" href="login-sis-admin.php">
                        <h2 class="h2-menu-nav">Sistema de administración</h2>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
         <!--Section con login-->
         <section>
            <div class="login1">
               <form class="formulario-registrologin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarLogin()">
                  <h3 class="formulario-titulo">Sistema de administración</h3>
                  <h3 class="formulario-titulo">Ingrese con sus datos:</h3>
                  <div class="contenedor-inputs">
                     <span class="input-100-rojo"><?php echo $usuarioErr;?></span>
                     <span class="input-100-rojo"><?php echo $usuarioErr2;?></span>
                     <input type="text" id="usuario" name="usuario" placeholder="usuario" class="input-100">
                     <span class="input-100-rojo"><?php echo $contrasenaErr;?></span>
                     <span class="input-100-rojo"><?php echo $contrasenaErr2;?></span>
                     <input type="password" id="contrasena" name="contrasena" placeholder="contrasena" class="input-100">
                     <img src="captcha-script.php" class="input-100">
                     <span class="input-100-rojo"> <?php echo $captchaErr;?></span>
                     <span class="input-100-rojo"> <?php echo $captchaErr2;?></span>
                     <span class="input-100-rojo"> <?php echo $captchaErr3;?></span>
                     <input type="text" id="captcha" name="captcha" placeholder="ingrese codigo captcha..." class="input-100">
                     <input type="submit" value="Ingresar" class="btn-enviar">
                  </div>
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
      <!--div contenedor-->
   </body>
</html>