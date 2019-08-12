<?php
require("datos-usuario-validar.php");
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
      <meta name="description" content="Pagina de datos de usuario de escuela sabatica">
      <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
      <meta name="author" content="iddios.ga">
      <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="css/estilos-datos-usuarios.css">
      <script src="../../javascript/validar-actualizar.js"></script>
      <title>Página de datos de usuarios</title>
   </head>
   <body>
      <div class="contenedor-filas-columnas">
         <!--primerdiv-->
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="principal-blog.php"><img class="logo" src="../../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="">
                     <h1 class="h1-header">Datos de usuario escuela sabática</h1>
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
                     <form id="buscador" name="buscador" method="post" action="buscador.php" > 
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
                  <li class="amapa">Usted está aquí 
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="principal-blog.php">Principal</a>
                  </li>
                  <label>>></label>
                  <li><a  class="amapa" href="">Opciones</a>
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
            $consulta = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario='$usuario'";
            if ($resultado = mysqli_query($conexion, $consulta)) {
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<div class='datos'> <h4 class='h4datos'>Nombre:</h4>" . "<h4 class='h4datos2'>" . $registro['nombre'] . "</h4>";
                    echo "<h4 class='h4datos'>Apellidos:</h4>" . "<h4 class='h4datos2'>" . $registro['apellidos'] . "</h4>";
                    echo "<h4 class='h4datos'>Usuario:</h4>" . "<h4 class='h4datos2'>" . $registro['nombre_usuario'] . "</h4>";
                    echo "<h4 class='h4datos'>ID de usuario:</h4>" . "<h4 class='h4datos2'>" . $registro['id_usuario_blog_adultos'] . "</h4></div>";
                }
            }
            ?>

<div class="actualizar">
<form action="cambiodatospersonales.php" enctype="multipart/form-data" method="post" onsubmit="return validarImagen()">
  <label class="label-imagen" for="imagen">Subir imagen:</label> 
  <input class="label-imagen" onchange="ValidateSize(this)" id="imagen" name="imagen" type="file" >
  <input type="submit" value="Cargar imagen" class="botonactualizar-imagen">
</form>
</div>


   <?php
/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso 
el campo ruta_imagen se encuentra en la tabla usuarios */ 
$consultaid          = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
while ($row=mysqli_fetch_array($resultadoconsultaid)) 
{ 
    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $ruta_img = $row["ruta_imagen"]; 
}
?>

<div class="actualizar">
   <img class="actualizar-imagen" src="/imagenes/imagenes2/<?php echo $ruta_img; ?>" alt="" />
</div>

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
               </div>
               <span class="input-100-2"><?php echo $usuarioanteriorErr;?></span>
               <div class="usuario_datos_nuevos">
                  <label class="label" for="usuarionue">Usuario nuevo:</label>
               </div>
               <div class="usuario_datos_nuevos2">
                  <input class="input" id="usuarionuevo" name="usuarionuevo" type="text">
               </div>
               <span class="input-100-2"><?php echo $usuarionuevoErr;?></span>
               <div class="usuario_datos_nuevos">
                  <label class="label" for="contraseñanue">Contraseña nueva:</label>
               </div>
               <div class="usuario_datos_nuevos2">
                  <input class="input" id="contrasenanueva" name="contrasenanueva" type="password">
               </div>
               <span class="input-100-2"><?php echo $contrasenanuevaErr;?></span>
               <div class="usuario_datos_nuevos">
                  <label class="label" for="contraseñanue">Confirmar contraseña nueva:</label>
               </div>
               <div class="usuario_datos_nuevos2">
                  <input class="input" id="contrasenanueva2" name="contrasenanueva2" type="password">
               </div>
               <span class="input-100-2"><?php echo $contrasenanueva2Err;?></span>
                  <span class="input-100-2"><?php echo $contrasenaErr;?></span>
               <div class="botondiv">
                  <input type="submit" value="Actualizar" class="botonactualizar">
               </div>
            </form>
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
      <!--Div principal-->
   </body>
</html>

