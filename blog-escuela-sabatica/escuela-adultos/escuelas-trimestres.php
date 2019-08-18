<?php
require("sesiones.php");
/*$Referer=end(explode("/",$_SERVER['HTTP_REFERER']));
if($Referer!="principal-blog.php") header("cerrar-sesion.php");*/
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
      <meta name="description" content="Pagina de escuelas sabaticas por trimestre de blog de escuela sabatica de adultos">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-escuelas-trimestres.css">
      <title>Página de escuelas sabáticas por trimestre de blog escuela sabática</title>
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
                     <h1 class="h1-header">Trimestres de blog escuela sabática</h1>
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
         <!--mapa de navegacion-->
         <div class="columnamapa">
            <div class="mapa">
               <ul>
                  <li class="amapa">Usted está aquí
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="principal-blog.php">Principal</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="">Seleccionar trimestre</a>
                  </li>
               </ul>
            </div>
         </div>
         <section>
            <div class="principal1">
               <h2 class="h2_titulo_principal">Selección de trimestre</h2>
            </div>

            <div class="principal1">
               <article class="escuela">
                  <div class="imagen">
                     <img class="imagen_portada" src="../../imagenes/portada-escuela-sabatica-2.png" alt="portada_escuela_sabatica">
                     <p class="particle_creditos">
Min. Ysaí Gutiérrez Bernal
Presidente
presidente@cgiglesiadedios.org

Min. Lorenzo Rivas García
Vicepresidente
vicepresidente@cgiglesiadedios.org

Min. Felipe Juárez Pérez
Secretario General
secretario@cgiglesiadedios.org

Min. Misael Anguiano Jiménez
Tesorero General
tesorero@cgiglesiadedios.org

Min. James Hernández Fajardo
Comisión de Asuntos Ministeriales
cam@cgiglesiadedios.org

Min. Rosendo Ruiz Juárez
Comisión de Asuntos Doctrinales
cad@cgiglesiadedios.org

Min. Rubén González Merlán
Comisión de Asuntos Administrativos
caa@cgiglesiadedios.org

Min. Abraham Santos Jiménez
Titular del Consejo Editorial
editorial@cgiglesiadedios.org

Página Oficial: www.cgiglesiadedios.org

Diseño de publicación impresa: Ob. Arturo Orozco

</p>
                  </div>
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Escuela sabática jóvenes y adultos.
Segundo trimestre
abril-mayo-junio de 2019.
                     </h2>
                     <p class="particle">EDITORIAL

“A los cielos y la tierra llamé por testigos hoy contra vosotros que os he puesto delante la vida y la muerte, la bendición y la maldición, escoge pues la vida, porque vivas tú y tu simiente.” (Deuteronomio 30:19).

El compendio de estudio de escuelas sabáticas de este trimestre, está enfocado precisamente en lo que expresa este pasaje bíblico. Es decir, se pone de manifiesto el que Dios, nunca ha forzado al hombre a hacer lo que Él desea. Siempre le ha dado el privilegio de poder elegir. De tal forma, que desde el principio, con la primera pareja en el huerto del Edén, a Dios nuestro Padre, le hubiese sido muy fácil, el dejar solamente el árbol de la vida, pero como venimos expresando, él ha querido que el hombre por sí mismo tome su elección, misma que le llevará a la vida o a la muerte.

En nuestros tiempos existen aún ambas opciones, nosotros debemos elegir. Se presenta en este cuadernillo una comparación de las cosas que hay que elegir, poniendo de relieve de manera general, las ventajas y desventajas que cada una de las elecciones que hagamos producirán en nuestra vida.

Podemos pensar que esta serie de estudios, solamente se colocan para ocupar un espacio en el papel, y de esa manera cubrir los aspectos administrativos y que por usos y costumbres, la Iglesia de Dios ha tenido durante años. Pero no es así, Dios pone por inspiración divina, cada uno de los temas que deben tratarse en los espacios de tiempo de manera casi simultanea, al menos al interior del país, que cree convenientes para el desarrollo de su amada Iglesia.

Deténgase a meditar cada uno de los temas que se insertan en esta serie de lecciones y tome conciencia de que todavía es tiempo de hacer nuestra elección.

“…he aquí ahora el tiempo aceptable, he aquí ahora el día de salud” 2ª. Corintios 6:2.

Fraternalmente
consejo editorial
          
                     </p>
                     <a href="lecciones-2.php"><button class="boton_entrar">Entrar a lecciones.</button></a>
                  </div>
               </article>
            </div>

            <div class="principal1">
               <article class="escuela">
                  <div class="imagen">
                     <img class="imagen_portada" src="../../imagenes/portada_escuela_sabatica.png" alt="portada_escuela_sabatica">
                     <p class="particle_creditos">
Min. Ysaí Gutiérrez Bernal
Presidente
presidente@cgiglesiadedios.org

Min. Lorenzo Rivas García
Vicepresidente
vicepresidente@cgiglesiadedios.org

Min. Felipe Juárez Pérez
Secretario General
secretario@cgiglesiadedios.org

Min. Misael Anguiano Jiménez
Tesorero General
tesorero@cgiglesiadedios.org

Min. James Hernández Fajardo
Comisión de Asuntos Ministeriales
cam@cgiglesiadedios.org

Min. Rosendo Ruiz Juárez
Comisión de Asuntos Doctrinales
cad@cgiglesiadedios.org

Min. Rubén González Merlán
Comisión de Asuntos Administrativos
caa@cgiglesiadedios.org

Min. Abraham Santos Jiménez
Titular del Consejo Editorial
editorial@cgiglesiadedios.org

Página Oficial: www.cgiglesiadedios.org

Diseño de publicación impresa: Ob. Arturo Orozco

</p>
                  </div>
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Escuela sabática jóvenes y adultos.
Primer trimestre
enero-febrero-marzo de 2019.
                     </h2>
                     <p class="particle">EDITORIAL

El motivo de estudio de este trimestre es que el hijo de Dios entienda el alcance de su responsabilidad como tal. Los tiempos que nos ha tocado vivir son motivo de estar siempre velando. De tal forma que no vayamos a perder de vista nuestro objetivo: alcanzar la Corona de la Vida. Si el hijo de Dios no tiene el cuidado de guardar la disciplina como fiel soldado del Señor, seguramente será fácil presa del adversario. El estudio de estas trece lecciones tiene el propósito de que los miembros de la Iglesia de Dios, no estén ociosos, sino activos a responder como corresponde al siervo de Dios, que tiene los sentidos espirituales despiertos. Uno de los temas que se tocan, tiene que ver con la perseverancia, la persistencia como disciplina característica, de aquel que está dispuesto a darlo todo por una causa. En el mundo las causas pueden ser diversas: ganar más dinero, terminar una carrera profesional, adquirir un mejor auto, etc. Pero el motivo de un verdadero hijo de Dios que lo mueve a seguir adelante, no obstante, las adversidades es: alcanzar la Vida Eterna, el tener en mente que nosotros no podemos hacer que la muerte de nuestro Señor Jesucristo haya sido en vano. ”Prosigo al blanco, al premio de la soberana vocación de Dios en Cristo Jesús.” (Filipenses 3:14). Otro de los aspectos que se tocan es el estar siempre en contacto con nuestro Dios. Y para alcanzar el estar continuamente en el corazón y mente de nuestro Padre Celestial, no existe otro camino que el camino de santidad. “Seguid la paz con todos, y la santidad, sin la cual nadie verá al Señor”.(Hebreos 12:14). Y la santidad no se alcanza solamente conociendo como hacerlo, sino haciendo precisamente lo que sabemos que nos conducirá a esa santidad “El pecado, pues, está en aquel que sabe hacer lo bueno, y no lo hace.(Santiago 4:17). Dios permita hacer crecer a su Iglesia en el estudio de estas trece hermosas lecciones.

Fraternalmente
Consejo Editorial            
                     </p>
                     <a href="lecciones.php"><button class="boton_entrar">Entrar a lecciones.</button></a>
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