<?php
require("sesiones.php");
//require("lista-url-seguras.php");
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
      <meta name="description" content="Pagina de lecciones de escuela sabatica por trimestre de blog de escuela sabatica de adultos">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-lecciones.css">
      <title>Página de lecciones de escuela sabática</title>
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
                     <h1 class="h1-header">Lecciones de escuela sabática</h1>
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
                        <input class="input-100" id="buscar" name="palabra" type="search" placeholder="Buscar lección" autofocus >
                        <input type="submit" name="buscador" class="boton_aceptar" value="Buscar">
                     </form>
                  </li>
               </ul>
            </nav>
         </div>
         <!--mapa nav-->
         <div class="columnamapa">
            <div class="mapa">
               <ul>
                  <li class="amapa">Usted está aquí
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="principal-blog.php">Principal</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="">Seleccionar lección</a>
                  </li>
               </ul>
            </div>
         </div>
         <section>
            <div class="principal1">
               <h2 class="h2_titulo_principal">Selección de lección escuela sabática segundo trimestre de 2019</h2>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 1 entendimiento o necedad</h2>
                     <p class="pfecha">06 de Abril de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion1/leccion1.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 2 bondad o maldad</h2>
                     <p class="pfecha">13 de Abril de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion2/leccion2.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 3 disciplina o libertinaje</h2>
                     <p class="pfecha">20 de Abril de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion3/leccion3.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 4 humildad o altivez</h2>
                     <p class="pfecha">27 de Abril de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion4/leccion4.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 5 amor u odio</h2>
                     <p class="pfecha">04 de Mayo de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion5/leccion5.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 6 unidad o separación</h2>
                     <p class="pfecha">11 de Mayo de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion6/leccion6.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 7 misericordia o dureza</h2>
                     <p class="pfecha">18 de Mayo de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion7/leccion7.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 8 generosidad o avaricia</h2>
                     <p class="pfecha">25 de Mayo de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion8/leccion8.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 9 justicia o injusticia</h2>
                     <p class="pfecha">01 de Junio de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion9/leccion9.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 10 verdad o mentira</h2>
                     <p class="pfecha">08 de Junio de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion10/leccion10.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 11 fe o incredulidad</h2>
                     <p class="pfecha">15 de Junio de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion11/leccion11.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 12 espiritualidad o carnalidad</h2>
                     <p class="pfecha">22 de Junio de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion12/leccion12.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 13 fortaleza o debilidad</h2>
                     <p class="pfecha">29 de Junio de 2019</p>
                     <a href="trimestres/2do-trimestre-2019/leccion13/leccion13.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
         </section>
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
   </body>
</html>