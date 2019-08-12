<?php
require("sesiones.php");
//incluir archivo de conexion
include "../conexion-blog.php";
$consultaid          = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
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
      <meta name="description" content="Página principal de blog de escuela sabatica de adultos">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <script src="../../javascript/principal-blog.js"></script>
      <link rel="stylesheet" href="css/estilos-principal-blog.css">
      <title>Página principal blog escuela sabática</title>
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
                     <h1 class="h1-header">Página principal foro escuela sabática</h1>
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
         <div class="columnamapa">
            <div class="mapa">
               <ul>
                  <li class="amapa">Usted está aquí </li>
                  <label>>></label>
                  <li><a class="amapa" href="#">Principal</a> </li>
               </ul>
            </div>
         </div>
         <aside>
         <!--menu2-->
         <div class="columna-nav2">
            <nav class="menu2">
               <ul>
                  <li class="li2">
                     <a class="a2" href='javascript:seleccion(1);'>
                        <h3>Elegir trimestre:</h3>
                     </a>
                  </li>
                  <li class="li2">
                     <a class="a2" href='javascript:seleccion(2);'>
                        <h3>Decálogo divino:</h3>
                     </a>
                  </li>
                  <li class="li2">
                     <a class="a2" href='javascript:seleccion(3);'>
                        <h3>Biblia en línea:</h3>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>   
         </aside>
         <section>
         <div class="divtrimestres" id="op1">

         <div class="principal1">
               <article class="escuela">
                  <div class="imagen">
                     <img class="imagen_portada" src="../../imagenes/3ertrim.jpg" alt="portada_escuela_sabatica">
                  </div>
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Escuela sabática jóvenes y adultos.     
<p> Tercer trimestre
julio-agosto-septiembre de 2019.</p>
                     </h2>
                     <a href="lecciones-3.php"><button class="boton_entrar">Elegir lección.</button></a>
                  </div>
               </article>
            </div>

            <div class="principal1">
               <article class="escuela">
                  <div class="imagen">
                     <img class="imagen_portada" src="../../imagenes/portada-escuela-sabatica-2.png" alt="portada_escuela_sabatica">
                  </div>
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Escuela sabática jóvenes y adultos.
Segundo trimestre
abril-mayo-junio de 2019.
                     </h2>
                     <a href="lecciones-2.php"><button class="boton_entrar">Elegir lección.</button></a>
                  </div>
               </article>
            </div>
           
            <div class="principal1">
               <article class="escuela">
                  <div class="imagen">
                     <img class="imagen_portada" src="../../imagenes/portada_escuela_sabatica.png" alt="portada_escuela_sabatica">
                     
                  </div>
                  <div class="editorial">
                     <h2 class="h2_escuela_sabatica">Escuela sabática jóvenes y adultos.
Primer trimestre
enero-febrero-marzo de 2019.
                     </h2>
                     <a href="lecciones.php"><button class="boton_entrar">Elegir lección.</button></a>
                  </div>
               </article>
            </div>
            </div>

            <div class="principal1" id="op2" style="display:none;">
               <article class="decalogo">
                  <h2 class="h2_decalogo">Decálogo divino</h2>
                  <p class="p_article_decalogo">Éxodo 20 Reina-Valera Antigua (RVA)

20 Y HABLO Dios todas estas palabras, diciendo:

2 Yo soy JEHOVA tu Dios, que te saqué de la tierra de Egipto, de casa de siervos.

3 No tendrás dioses ajenos delante de mí.

4 No te harás imagen, ni ninguna semejanza de cosa que esté arriba en el cielo, ni abajo en la tierra, ni en las aguas debajo de la tierra:

5 No te inclinarás á ellas, ni las honrarás; porque yo soy Jehová tu Dios, fuerte, celoso, que visito la maldad de los padres sobre los hijos, sobre los terceros y sobre los cuartos, á los que me aborrecen,

6 Y que hago misericordia en millares á los que me aman, y guardan mis mandamientos.

7 No tomarás el nombre de Jehová tu Dios en vano; porque no dará por inocente Jehová al que tomare su nombre en vano.

8 Acordarte has del día del reposo, para santificarlo:

9 Seis días trabajarás, y harás toda tu obra;

10 Mas el séptimo día será reposo para Jehová tu Dios: no hagas en él obra alguna, tú, ni tu hijo, ni tu hija, ni tu siervo, ni tu criada, ni tu bestia, ni tu extranjero que está dentro de tus puertas:

11 Porque en seis días hizo Jehová los cielos y la tierra, la mar y todas las cosas que en ellos hay, y reposó en el séptimo día: por tanto Jehová bendijo el día del reposo y lo santificó.

12 Honra á tu padre y á tu madre, porque tus días se alarguen en la tierra que Jehová tu Dios te da.

13 No matarás.

14 No cometerás adulterio.

15 No hurtarás.

16 No hablarás contra tu prójimo falso testimonio.

17 No codiciarás la casa de tu prójimo, no codiciarás la mujer de tu prójimo, ni su siervo, ni su criada, ni su buey, ni su asno, ni cosa alguna de tu prójimo. 
                  </p>
               </article>
            </div>
            <div class="principal1" id="op3" style="display:none;">
               <article class="biblegateway">
                  <h2 class="h2_biblegateway">Biblia en línea</h2>
                  <iframe class="ibible" src="https://www.biblegateway.com/versions/Reina-Valera-Antigua-RVA-Biblia/#booklist" frameborder="0"></iframe>
               </article>
            </div>

<!--opciones admin-->
<?php
            if ($registroconsultaid['id_permiso_blog'] == "2") {
            ?>
         <div class="principal1">
            <article class="escuela">
               <div class="imagen"> <img class="imagen_portada" src="../../imagenes/agregar-escuelas.jpg" alt="portada_escuela_sabatica"> </div>
               <div class="editorial">
                  <h2 class="h2_escuela_sabatica">Agregar datos de lecciones de escuela sabática</h2>
                  <p class="particle"> Sección para agregar entradas de lecciones de escuelas sabáticas</p>
                  <a href="agregar-lecciones/agregar-entrada.php"><button class="boton_entrar">Entrar</button></a> 
               </div>
            </article>
         </div>
         <div class="principal1">
            <article class="escuela">
               <div class="imagen"> <img class="imagen_portada" src="../../imagenes/reporte-participantes.png" alt="portada_escuela_sabatica"> </div>
               <div class="editorial">
                  <h2 class="h2_escuela_sabatica">Bitácora de participaciones de usuarios</h2>
                  <p class="particle"> Sección consultar participaciones de los usuarios para evaluar su desempeño</p>
                  <a href="bitacora.php"><button class="boton_entrar">Entrar</button></a> 
               </div>
            </article>
         </div>
         <?php
            }
            ;
            ?>
         </section>
         <!--Inicia footer-->
         <footer>
            <div class="columna-footer">
               <ul class="ul-footer">
                  <li><a class="a-footer" href="contenidos/acerca-de.html">Acerca de ...</a></li>
                  <li><a class="a-footer" href="contenidos/aviso-de-privacidad.html">Aviso de privacidad</a></li>
               </ul>
               <p class="pfooter-1"><a class="link-footer" href="https://miglesiaddios.jimdo.com/" target="_blank">Pagina hermana de iglesia de Dios Valle Verde (miglesiaddios)</a></p>
               <p class="pfooter">Conferencia general de la iglesia de Dios A.R. S.G.A.R.18/93</p>
            </div>
         </footer>
      </div>
   </body>
   <script src="../../javascript/principal-blog.js"></script>
</html>