<?php
require("sesiones.php");
include "../conexion-blog.php";
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
      <meta name="description" content="Pagina de busqueda de lecciones">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-buscador-blog.css">
      <title>Página de búsqueda de lecciones</title>
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
                     <h1 class="h1-header">Página de búsqueda de lecciones</h1>
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
                        <h3>Opciones</h3>
                     </a>
                  </li>
                  <li>
                     <a href="cerrar-sesion.php">
                        <h3>Cerrar sesión</h3>
                     </a>
                  </li>
                  <li>
                     <form id="buscador" name="buscador" method="post" action="buscador.php"> 
                        <input class="input-100" id="buscar" name="palabra" type="search" placeholder="Buscar..." autofocus >
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
                  <li><a class="amapa" href="principal-blog.php">Principal</a></li>
                  <label>>></label>
                  <li><a class="amapa" href="">Buscador</a></li>
               </ul>
            </div>
         </div>
         <div class="principal1">
 <?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['buscador'])) {
    // Se toma el valor ingresado
    $buscar = mysqli_real_escape_string($conexion, $_POST['palabra']);
    // Si está vacío, informa, sino realiza búsqueda
    if (empty($buscar)) {
        echo "<p class='enlaces'>No se ha ingresado una cadena a buscar</p>";
    } else {
      $buscar = test_input($_POST["palabra"]);
        $sql    = "SELECT * FROM lecciones_adultos WHERE titulo_lecciones_adultos like '%$buscar%'";
        $result = mysqli_query($conexion, $sql);
        if ($result === false) {
            echo mysqli_error($conexion);
        } else {
            $total = mysqli_num_rows($result);
            // imprimir los resultados
            if ($row = mysqli_fetch_array($result)) {
                echo "<h3 class='h3_escuela_sabatica'>Resultados para: $buscar</h3>";
                do {
                    //resultados de acuerdo a lo ingresado con su link
?>
               <?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion1/leccion1.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 2. LUCHANDO SIN RETORNO") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion2/leccion2.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 3. AGUAS DULCES, AGUAS AMARGAS") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion3/leccion3.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 4. ESPÍRITU SIN MEDIDA") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion4/leccion4.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 5. LA LUZ DEL EVANGELIO") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion5/leccion5.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 6. El QUE PERSISTE") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion6/leccion6.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 7. ¿QUIÉN PODRÁ SER SALVO?") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion7/leccion7.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 8. EN CONTACTO CON DIOS") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion8/leccion8.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 9. EL AMOR DE DIOS ES ETERNO") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion9/leccion9.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 10. ¿QUIEN SE HA DE PURIFICAR?") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion10/leccion10.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 11. APARTADO DESDE ANTES DE LA FUNDACION DEL MUNDO") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion11/leccion11.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 12. JESÚS: EL CUMPLIMIENTO DE LA ESPERANZA") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion12/leccion12.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 13. EL NACIMIENTO DE UN HIJO DE DIOS") {
?>
               <a class="enlaces" href="trimestres/1er-trimestre-2019/leccion13/leccion13.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 1 ENTENDIMIENTO O NECEDAD") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion1/leccion1.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 2 BONDAD O MALDAD") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion2/leccion2.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 3 DISCIPLINA O LIBERTINAJE") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion3/leccion3.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 4 HUMILDAD O ALTIVEZ") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion4/leccion4.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 5 AMOR U ODIO") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion5/leccion5.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 6 UNIDAD O SEPARACIÓN") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion6/leccion6.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 7 MISERICORDIA O DUREZA") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion7/leccion7.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 8 GENEROSIDAD O AVARICIA") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion8/leccion8.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 9 JUSTICIA O INJUSTICIA") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion9/leccion9.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 10 VERDAD O MENTIRA") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion10/leccion10.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 11 FE O INCREDULIDAD") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion11/leccion11.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 12 ESPIRITUALIDAD O CARNALIDAD") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion12/leccion12.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
<?php
                    if ($row['titulo_lecciones_adultos'] == "LECCIÓN 13 FORTALEZA O DEBILIDAD") {
?>
               <a class="enlaces" href="trimestres/2do-trimestre-2019/leccion13/leccion13.php?titulo_lecciones_adultos=<?= $row['titulo_lecciones_adultos']; ?>"><?= $row['titulo_lecciones_adultos']; ?></a>
            <?php
                    }
?>
                <?php
                } while ($row = mysqli_fetch_array($result));
                echo "<p class='enlaces'>Resultados: $total</p>";
            } else {
                // En caso de no encontrar resultados
                echo "<p class='enlaces'>No se encontraron resultados para: $buscar</p>";
            }
        }
    }
}
?> 
</div>
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

