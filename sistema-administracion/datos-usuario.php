<?php
require("lista-url-seguras.php");
//incluir archivo de conexion
require("datos-usuario-validar.php");
//se inicia sesion con el usuario logeado.
//error_reporting(0);
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
      <meta name="description" content="Pagina de datos de usuario de sistema de administración">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-datos-usuario.css">
      <script src="javascript/validar-actualizar.js" ></script>
      <title>Página de datos de usuarios</title>
   </head>
   <body>
      <div class="contenedor-filas-columnas">
         <!--primerdiv-->
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="principal-sis-admin.php"><img class="logo" src="../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="datos-usuario.php">
                     <h1 class="h1-header">Datos de usuario</h1>
                  </a>
               </div>
            </div>
         </header>
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
                     <a href="principal-sis-admin.php">
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
                  
               </ul>
            </nav>
         </div>
         <div class="columnamapa">
            <div class="mapa">
               <ul>
                  <li class="amapa">Usted está aquí 
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="principal-sis-admin.php">Principal</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="#">Datos de usuario</a>
                  </li>
               </ul>
            </div>
         </div>
         <!--Body con la consulta de los datos del usuario y el formulario para cambiar datos-->
         <div class="mensaje-principal">
            <h1>Datos de usuario.</h1>
         </div>
         <?php
            $usuario  = $_SESSION['nombre_usuario'];
            $consulta = "SELECT * FROM usuario_administrador WHERE nombre_usuario='$usuario'";
            if ($resultado = mysqli_query($conexion, $consulta)) {
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<div class='datos'> <h4 class='h4datos'>Nombre de usuario:</h4>" . "<h4 class='h4datos2'>" . $registro['nombre'] . "</h4>";
                    echo "<h4 class='h4datos'>Apellidos:</h4>" . "<h4 class='h4datos2'>" . $registro['apellidos'] . "</h4>";
                    echo "<h4 class='h4datos'>Usuario:</h4>" . "<h4 class='h4datos2'>" . $registro['nombre_usuario'] . "</h4>";
                    echo "<h4 class='h4datos'>ID de usuario:</h4>" . "<h4 class='h4datos2'>" . $registro['id_usuario_administrador'] . "</h4></div>";
                }
            }
            ?>
         <div class="actualizar">
            <div class="h2actualizar">
               <h2>Actualizar datos</h2>
            </div>
            <form class="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validarActualizar()">
               <div class="usuario_datos_nuevos">  
                  <label class="label" for="usuarioact">Usuario actual:</label>
               </div>
               <div class="usuario_datos_nuevos2">
                  <input class="input" id="usuarioanterior" name="usuarioanterior" type="text">
                  <span class="input-100-2"><?php echo $usuarioanteriorErr;?></span>
               </div>
               <div class="usuario_datos_nuevos">
                  <label class="label" for="usuarionue">Usuario nuevo:</label>
               </div>
               <div class="usuario_datos_nuevos2">
                  <input class="input" id="usuarionuevo" name="usuarionuevo" type="text">
                  <span class="input-100-2"><?php echo $usuarionuevoErr;?></span>
               </div>
               <div class="usuario_datos_nuevos">
                  <label class="label" for="contraseñanue">Contraseña nueva:</label>
               </div>
               <div class="usuario_datos_nuevos2">
                  <input class="input" id="contrasenanueva" name="contrasenanueva" type="password">
                  <span class="input-100-2"><?php echo $contrasenanuevaErr;?></span>
               </div>
               <div class="usuario_datos_nuevos">
                  <label class="label" for="contraseñanue">Confirmar contraseña nueva:</label>
               </div>
               <div class="usuario_datos_nuevos2">
                  <input class="input" id="contrasenanueva2" name="contrasenanueva2" type="password">
                  <span class="input-100-2"><?php echo $contrasenanueva2Err;?></span>
                  <span class="input-100-2"><?php echo $contrasenaErr;?></span>
               </div>
               <div class="botondiv">
                  <input type="submit" value="Actualizar" class="botonactualizar">
               </div>
            </form>
         </div>
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
      <!--Div principal-->
   </body>
</html>