<?php
require("agregar-datos-lecciones-validacion.php");
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
      <script src="../../../javascript/validar-agregar-datos.js"></script>
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
         
         <!--contenedor con el fomulario que envia la informaicon tanto a la base de datos con php con metodo post como a el archivo javascript por medio de id-->
         <div class="container">
            <h2 class="h2formulario">Captura de datos de lecciones</h2>
</div>
         <div class="div_preguntas_botones">
               <a href='javascript:seleccion(1);'><button class="span_pregunta">Fecha</button></a>
	            <a href='javascript:seleccion(2);'><button class="span_pregunta">Versículo</button></a>
               <a href='javascript:seleccion(3);'><button class="span_pregunta">Cita bíblica</button></a>
               <a href='javascript:seleccion(4);'><button class="span_pregunta">Objetivo</button></a>
               <a href='javascript:seleccion(5);'><button class="span_pregunta">Comentario</button></a>
               <a href='javascript:seleccion(6);'><button class="span_pregunta">Pregunta 1</button></a>
               <a href='javascript:seleccion(7);'><button class="span_pregunta">Pregunta 2</button></a>
               <a href='javascript:seleccion(8);'><button class="span_pregunta">Pregunta 3</button></a>
               <a href='javascript:seleccion(9);'><button class="span_pregunta">Pregunta 4</button></a>
               <a href='javascript:seleccion(10);'><button class="span_pregunta">Pregunta 5</button></a>
               <a href='javascript:seleccion(11);'><button class="span_pregunta">Pregunta 6</button></a>
               <a href='javascript:seleccion(12);'><button class="span_pregunta">Pregunta 7</button></a>
               <a href='javascript:seleccion(13);'><button class="span_pregunta">Pregunta 8</button></a>
            </div>
         <div class="container">
            <label for="comentar" class="labelform1">Favor de ingresar los datos de lecciones:</label>

            

<div class="div_pregunta" id="op1" style="display:none;">
<label for="comentar" class="labelform1">Seleccione lección y fecha:</label>
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarFecha()" class="formulario">
               <div class="columna1">
                  <label for="fname">Selección el título de la lección:</label>
               </div>
               <div class="columna2">
                  <?php
                     //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                     $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                     $result = mysqli_query($conexion, $sSQL);
                     echo '<select name="titulo_lecciones_adultos" class="input">';
                     //menu desplegable con la informacion solicitada
                     while ($row = mysqli_fetch_array($result)) {
                         echo '<option>' . $row["titulo_lecciones_adultos"];
                     }
                     ?>
                  </select>
                  <span class="input-100"><?php echo $tituloErr;?></span>
               </div>
               <!--formulario para ingresar los datos de lecciones-->
               <div class="columna1">
                  <label for="comentario">Ingrese la fecha:</label>
               </div>
               <div class="columna2">
                  <input type="date" name="fecha" id="fecha" class="input">
                  <span class="input-100"><?php echo $fechaErr;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de fecha" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio1;?></span>
                  </form>
</div>

<div class="div_pregunta" id="op2" style="display:none;">
                  <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarVersiculo()" class="formulario">
                  <label for="comentar" class="labelform">seleccione lección y capture versículo:</label>
                  <div class="columna1">
                  <label for="fname">Selección el título de la lección:</label>
               </div>
               <div class="columna2">
                  <?php
                     //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                     $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                     $result = mysqli_query($conexion, $sSQL);
                     echo '<select name="titulo_lecciones_adultos" class="input">';
                     //menu desplegable con la informacion solicitada
                     while ($row = mysqli_fetch_array($result)) {
                         echo '<option>' . $row["titulo_lecciones_adultos"];
                     }
                     ?>
                  </select>
                  <span class="input-100"><?php echo $tituloErr;?></span>
               </div>
                  <div class="columna1">
                  <label for="comentario">Ingrese el versículo a memorizar:</label>
               </div>
               <div class="columna2">
                  <input id="versiculo" name="versiculo" type="text" placeholder="Ingrese versiculo..." class="input">
                  <span class="input-100"><?php echo $versiculoErr;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de versiculo" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio2;?></span>
                  </form>
</div>

<div class="div_pregunta" id="op3" style="display:none;">
                  <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarCitaLectura()" class="formulario">
                  <label for="comentar" class="labelform">seleccione lección y capture cita bíblica:</label>
                  <div class="columna1">
                  <label for="fname">Selección el título de la lección:</label>
               </div>
               <div class="columna2">
                  <?php
                     //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                     $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                     $result = mysqli_query($conexion, $sSQL);
                     echo '<select name="titulo_lecciones_adultos" class="input">';
                     //menu desplegable con la informacion solicitada
                     while ($row = mysqli_fetch_array($result)) {
                         echo '<option>' . $row["titulo_lecciones_adultos"];
                     }
                     ?>
                  </select>
                  <span class="input-100"><?php echo $tituloErr;?></span>
               </div>
                  <div class="columna1">
                  <label for="comentario">Ingrese la cita de lectura bíblica:</label>
               </div>
               <div class="columna2">
                  <input id="cita" name="cita" type="text" placeholder="Ingrese cita..." class="input">
                  <span class="input-100"><?php echo $citaErr;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la lectura bíblica:</label>
               </div>
               <div class="columna2">
                  <textarea id="lectura" name="lectura"  placeholder="Ingrese versiculo..." class="input_textarea"></textarea>
                  <span class="input-100"><?php echo $lecturaErr;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de lectura bíblica" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio3;?></span>
                  </form>
</div>

<div class="div_pregunta" id="op4" style="display:none;">
                  <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarObjetivo()" class="formulario">
                  <label for="comentar" class="labelform">seleccione lección y capture objetivo:</label>
                  <div class="columna1">
                  <label for="fname">Selección el título de la lección:</label>
               </div>
               <div class="columna2">
                  <?php
                     //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                     $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                     $result = mysqli_query($conexion, $sSQL);
                     echo '<select name="titulo_lecciones_adultos" class="input">';
                     //menu desplegable con la informacion solicitada
                     while ($row = mysqli_fetch_array($result)) {
                         echo '<option>' . $row["titulo_lecciones_adultos"];
                     }
                     ?>
                  </select>
                  <span class="input-100"><?php echo $tituloErr;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese el objetivo de la lección:</label>
               </div>
               <div class="columna2">
                  <input id="objetivo" name="objetivo" type="text" placeholder="Ingrese objetivo..." class="input">
                  <span class="input-100"><?php echo $objetivoErr;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de objetivo" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio4;?></span>
                  </form>
</div>

<div class="div_pregunta" id="op5" style="display:none;">
                  <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarComentario()" class="formulario">
                  <label for="comentar" class="labelform">seleccione lección y capture comentario de la lección:</label>
                  <div class="columna1">
                  <label for="fname">Selección el título de la lección:</label>
               </div>
               <div class="columna2">
                  <?php
                     //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                     $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                     $result = mysqli_query($conexion, $sSQL);
                     echo '<select name="titulo_lecciones_adultos" class="input">';
                     //menu desplegable con la informacion solicitada
                     while ($row = mysqli_fetch_array($result)) {
                         echo '<option>' . $row["titulo_lecciones_adultos"];
                     }
                     ?>
                  </select>
                  <span class="input-100"><?php echo $tituloErr;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese el comentario de la lección:</label>
               </div>
               <div class="columna2">
                  <textarea id="comentariolectura" name="comentariolectura"  placeholder="Ingrese comentario..." class="input_textarea"></textarea>
                  <span class="input-100"><?php echo $comentarioErr;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de comentario" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio5;?></span>
                  </form>
</div>
         <!--formularios para capturar preguntas-->
         <!--pregunta 1-->
        
<div class="div_pregunta" id="op6" style="display:none;">
            <h2 class="h2formulario">Captura de datos de pregunta 1</h2>
            
               <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta1()" class="formulario">
               
                  <div class="columna1">
                  <label for="fname">Selección el título de la lección:</label>
               </div>
               <div class="columna2">
                  <?php
                     //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                     $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                     $result = mysqli_query($conexion, $sSQL);
                     echo '<select name="titulo_lecciones_adultos" class="input">';
                     //menu desplegable con la informacion solicitada
                     while ($row = mysqli_fetch_array($result)) {
                         echo '<option>' . $row["titulo_lecciones_adultos"];
                     }
                     ?>
                  </select>
                  <span class="input-100"><?php echo $tituloErr;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 1:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta1" name="pregunta1" type="text" placeholder="Ingrese pregunta..." class="input">
                  <span class="input-100"><?php echo $pregunta1Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 1:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas1" name="titulo_citas1" type="text" placeholder="Ingrese nombre de citas..." class="input">
                  <span class="input-100"><?php echo $titulocitas1Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 1:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas1" name="citas1"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
                  <span class="input-100"><?php echo $citas1Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 1" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio6;?></span>
                  </form>
</div>
           
         <!--pregunta 2-->
         <div class="div_pregunta" id="op7" style="display:none;">
            <h2 class="h2formulario">Captura de datos de pregunta 2</h2>
            
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta2()" class="formulario">
               
               <div class="columna1">
               <label for="fname">Selección el título de la lección:</label>
            </div>
            <div class="columna2">
               <?php
                  //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                  $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                  $result = mysqli_query($conexion, $sSQL);
                  echo '<select name="titulo_lecciones_adultos" class="input">';
                  //menu desplegable con la informacion solicitada
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<option>' . $row["titulo_lecciones_adultos"];
                  }
                  ?>
               </select>
               <span class="input-100"><?php echo $tituloErr;?></span>
            </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 2:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta2" name="pregunta2" type="text" placeholder="Ingrese pregunta..." class="input">
                  <span class="input-100"><?php echo $pregunta2Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 2:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas2" name="titulo_citas2" type="text" placeholder="Ingrese nombre de citas..." class="input">
                  <span class="input-100"><?php echo $titulocitas2Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 2:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas2" name="citas2"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
                  <span class="input-100"><?php echo $citas2Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 2" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio7;?></span>
                  </form>
</div>

         <!--pregunta 3-->
         <div class="div_pregunta" id="op8" style="display:none;">
            <h2 class="h2formulario">Captura de datos de pregunta 3</h2>
            
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta3()" class="formulario">
               
               <div class="columna1">
               <label for="fname">Selección el título de la lección:</label>
            </div>
            <div class="columna2">
               <?php
                  //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                  $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                  $result = mysqli_query($conexion, $sSQL);
                  echo '<select name="titulo_lecciones_adultos" class="input">';
                  //menu desplegable con la informacion solicitada
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<option>' . $row["titulo_lecciones_adultos"];
                  }
                  ?>
               </select>
               <span class="input-100"><?php echo $tituloErr;?></span>
            </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 3:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta3" name="pregunta3" type="text" placeholder="Ingrese pregunta..." class="input">
               <span class="input-100"><?php echo $pregunta3Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 3:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas3" name="titulo_citas3" type="text" placeholder="Ingrese nombre de citas..." class="input">
               <span class="input-100"><?php echo $titulocitas3Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 3:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas3" name="citas3"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
               <span class="input-100"><?php echo $citas3Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 3" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio8;?></span>
                  </form>
</div>

         <!--pregunta 4-->
         <div class="div_pregunta" id="op9" style="display:none;">
            <h2 class="h2formulario">Captura de datos de pregunta 4</h2>
            
               
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta4()" class="formulario">
               
               <div class="columna1">
               <label for="fname">Selección el título de la lección:</label>
            </div>
            <div class="columna2">
               <?php
                  //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                  $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                  $result = mysqli_query($conexion, $sSQL);
                  echo '<select name="titulo_lecciones_adultos" class="input">';
                  //menu desplegable con la informacion solicitada
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<option>' . $row["titulo_lecciones_adultos"];
                  }
                  ?>
               </select>
               <span class="input-100"><?php echo $tituloErr;?></span>
            </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 4:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta4" name="pregunta4" type="text" placeholder="Ingrese pregunta..." class="input">
               <span class="input-100"><?php echo $pregunta4Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 4:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas4" name="titulo_citas4" type="text" placeholder="Ingrese nombre de citas..." class="input">
               <span class="input-100"><?php echo $titulocitas4Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 4:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas4" name="citas4"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
               <span class="input-100"><?php echo $citas4Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 4" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio9;?></span>
                  </form>
</div>

         <!--pregunta 5-->
         <div class="div_pregunta" id="op10" style="display:none;">
            <h2 class="h2formulario">Captura de datos de pregunta 5</h2>
           
               
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta5()" class="formulario">
               
               <div class="columna1">
               <label for="fname">Selección el título de la lección:</label>
            </div>
            <div class="columna2">
               <?php
                  //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                  $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                  $result = mysqli_query($conexion, $sSQL);
                  echo '<select name="titulo_lecciones_adultos" class="input">';
                  //menu desplegable con la informacion solicitada
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<option>' . $row["titulo_lecciones_adultos"];
                  }
                  ?>
               </select>
               <span class="input-100"><?php echo $tituloErr;?></span>
            </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 5:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta5" name="pregunta5" type="text" placeholder="Ingrese pregunta..." class="input">
               <span class="input-100"><?php echo $pregunta5Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 5:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas5" name="titulo_citas5" type="text" placeholder="Ingrese nombre de citas..." class="input">
               <span class="input-100"><?php echo $titulocitas5Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 5:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas5" name="citas5"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
               <span class="input-100"><?php echo $citas5Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 5" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio10;?></span>
                  </form>
</div>

         <!--pregunta 6-->
         <div class="div_pregunta" id="op11" style="display:none;">
            <h2 class="h2formulario">Captura de datos de pregunta 6</h2>
           
               
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta6()" class="formulario">
               
               <div class="columna1">
               <label for="fname">Selección el título de la lección:</label>
            </div>
            <div class="columna2">
               <?php
                  //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                  $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                  $result = mysqli_query($conexion, $sSQL);
                  echo '<select name="titulo_lecciones_adultos" class="input">';
                  //menu desplegable con la informacion solicitada
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<option>' . $row["titulo_lecciones_adultos"];
                  }
                  ?>
               </select>
               <span class="input-100"><?php echo $tituloErr;?></span>
            </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 6:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta6" name="pregunta6" type="text" placeholder="Ingrese pregunta..." class="input">
               <span class="input-100"><?php echo $pregunta6Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 6:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas6" name="titulo_citas6" type="text" placeholder="Ingrese nombre de citas..." class="input">
               <span class="input-100"><?php echo $titulocitas6Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 6:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas6" name="citas6"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
               <span class="input-100"><?php echo $citas6Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 6" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio11;?></span>
                  </form>
</div>

         <!--pregunta 7-->
         <div class="div_pregunta" id="op12" style="display:none;">
            <h2 class="h2formulario">Captura de datos de pregunta 7</h2>
            
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta7()" class="formulario">
               
               <div class="columna1">
               <label for="fname">Selección el título de la lección:</label>
            </div>
            <div class="columna2">
               <?php
                  //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                  $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                  $result = mysqli_query($conexion, $sSQL);
                  echo '<select name="titulo_lecciones_adultos" class="input">';
                  //menu desplegable con la informacion solicitada
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<option>' . $row["titulo_lecciones_adultos"];
                  }
                  ?>
               </select>
               <span class="input-100"><?php echo $tituloErr;?></span>
            </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 7:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta7" name="pregunta7" type="text" placeholder="Ingrese pregunta..." class="input">
               <span class="input-100"><?php echo $pregunta7Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 7:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas7" name="titulo_citas7" type="text" placeholder="Ingrese nombre de citas..." class="input">
               <span class="input-100"><?php echo $titulocitas7Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 7:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas7" name="citas7"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
               <span class="input-100"><?php echo $citas7Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 7" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio12;?></span>
                  </form>
</div>

<!--pregunta 8-->
<div class="div_pregunta" id="op13" style="display:none;">
<h2 class="h2formulario">Captura de datos de pregunta 8</h2>
            
            <form name="validar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validarPregunta8()" class="formulario">
               
               <div class="columna1">
               <label for="fname">Selección el título de la lección:</label>
            </div>
            <div class="columna2">
               <?php
                  //sentencia SQL y la ejecutamos para obtener la informacion de título de lecciones
                  $sSQL   = "Select titulo_lecciones_adultos From lecciones_adultos";
                  $result = mysqli_query($conexion, $sSQL);
                  echo '<select name="titulo_lecciones_adultos" class="input">';
                  //menu desplegable con la informacion solicitada
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<option>' . $row["titulo_lecciones_adultos"];
                  }
                  ?>
               </select>
               <span class="input-100"><?php echo $tituloErr;?></span>
            </div>
               <div class="columna1">
                  <label for="comentario">Ingrese la pregunta 8:</label>
               </div>
               <div class="columna2">
                  <input id="pregunta8" name="pregunta8" type="text" placeholder="Ingrese pregunta..." class="input">
               <span class="input-100"><?php echo $pregunta8Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Nombre de las citas de pregunta 8:</label>
               </div>
               <div class="columna2">
                  <input id="titulo_citas8" name="titulo_citas8" type="text" placeholder="Ingrese nombre de citas..." class="input">
               <span class="input-100"><?php echo $titulocitas8Err;?></span>
               </div>
               <div class="columna1">
                  <label for="comentario">Ingrese las citas de la pregunta 8:</label>
               </div>
               <div class="columna2">
                  <textarea id="citas8" name="citas8"  placeholder="Ingrese citas..." class="input_textarea"></textarea>
               <span class="input-100"><?php echo $citas8Err;?></span>
               </div>
               <div class="boton_submit">
                  <input type="submit" value="Guardar datos de pregunta 8" class="btn-enviar">
                  </div>
                  <span class="input-100"><?php echo $envio12;?></span>
                  </form>
</div>
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