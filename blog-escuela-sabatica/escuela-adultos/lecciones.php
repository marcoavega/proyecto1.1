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
               <h2 class="h2_titulo_principal">Selección de lección escuela sabática primer trimestre de 2019</h2>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 1. decidid hoy a quien seguir</h2>
                     <p class="pfecha">05 enero de 2019</p>
                     <p class="particle">Objetivo: Considerar la importancia de nuestros hábitos y elecciones. Qué dicen de nosotros acerca de si nuestra fidelidad está con Dios o con el mundo.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion1/leccion1.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 2. luchando sin retorno</h2>
                     <p class="pfecha">12 enero de 2019</p>
                     <p class="particle">OBJETIVO: Fortalecer la fe para resistir los embates del enemigo y permanecer en el camino del Señor.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion2/leccion2.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 3. aguas dulces, aguas amargas</h2>
                     <p class="pfecha">19 enero de 2019</p>
                     <p class="particle">OBJETIVO: Entender que de nuestro corazón deben salir, las obras del espíritu, y no las de la carne.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion3/leccion3.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 4. espíritu sin medida</h2>
                     <p class="pfecha">26 enero de 2019</p>
                     <p class="particle">OBJETIVO: Comprender que Dios en su amor, proporciona de su espíritu para expandir su palabra, a todo aquel que llama a otros a salvación.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion4/leccion4.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 5. la luz del evangelio</h2>
                     <p class="pfecha">02 febrero de 2019</p>
                     <p class="particle">OBJETIVO: Comprender ¿Qué es andar en luz?, ¿Cómo se logra? y Cuál es el resultado.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion5/leccion5.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 6. el que persiste</h2>
                     <p class="pfecha">09 febrero de 2019</p>
                     <p class="particle">OBJETIVO: Comprender el concepto de persistencia y que nos motiva a ejercerlo teniendo como respaldo el conocimiento de la palabra de Dios.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion6/leccion6.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 7. ¿quién podrá ser salvo?</h2>
                     <p class="pfecha">16 febrero de 2019</p>
                     <p class="particle">OBJETIVO: Comprender que ninguna obra humana es suficiente para alcanzar la salvación, sin embargo, es Dios quien hace posible que el hombre la alcance.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion7/leccion7.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 8. en contacto con dios</h2>
                     <p class="pfecha">23 febrero de 2019</p>
                     <p class="particle">OBJETIVO: Exhortar a la grey para que mantenga la comunicación con Dios de manera permanente, para fortalecimiento de su fe y sostén de su vida.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion8/leccion8.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 9. el amor de dios es eterno</h2>
                     <p class="pfecha">02 marzo de 2019</p>
                     <p class="particle">OBJETIVO: 1. Analizar la permanencia del amor de Dios, el cual no deja de ser, 2.Tomar conciencia de la incidencia de dicho amor ha tenido y debe tener en nuestras vidas.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion9/leccion9.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 10. ¿quién se ha de purificar?</h2>
                     <p class="pfecha">09 marzo de 2019</p>
                     <p class="particle">OBJETIVO: Reflexionar sobre el significado de purificación y lo que han de hacer quienes desean purificarse para estar ante la presencia de Dios.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion10/leccion10.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 11. apartado desde antes de la fundación del mundo </h2>
                     <p class="pfecha">16 marzo de 2019</p>
                     <p class="particle">OBJETIVO: Exaltar que Jesús fue enviado al mundo para reconciliar a los hombres con Dios y que fue menospreciado y poco estimado por judíos y gentiles.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion11/leccion11.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 12. Jesús: el cumplimiento de la esperanza</h2>
                     <p class="pfecha">23 marzo de 2019</p>
                     <p class="particle">OBJETIVO: Hacer un análisis de las promesas que se cumplen al andar en las enseñanzas que Jesús transmitió a la humanidad.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion12/leccion12.php"><button class="boton_entrar">Entrar a lección.</button></a>
                  </div>
               </article>
            </div>
            <div class="principal1">
               <article class="escuela">
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Lección 13. el nacimiento de un hijo de dios</h2>
                     <p class="pfecha">30 marzo de 2019</p>
                     <p class="particle">OBJETIVO: Dejar en claro cuáles son los acontecimientos y acciones por los que se pasa a ser un hijo de Dios, con los cuales queda anotado nuestro nombre en el libro de la vida.
                     </p>
                     <a href="trimestres/1er-trimestre-2019/leccion13/leccion13.php"><button class="boton_entrar">Entrar a lección.</button></a>
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