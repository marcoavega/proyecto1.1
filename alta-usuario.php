<?php
//error_reporting(0);
session_start();
/*session_unset();
session_destroy();
unset($_POST['nombre']);
unset($_POST['captcha']);
unset($_POST['contrasena']);*/
include "sistema-administracion/conexion-sis-admin.php";
$nombreErr  = $apellidosErr = $usuarioErr = $contrasenaErr = $contrasena2Err = $captchaErr = "";
$nombreErr2 = $apellidosErr2 = $usuarioErr2 = $contrasenaErr2 = $contrasena2Err2 = $captchaErr2 = "";
$nombre     = $apellidos = $usuario = $contrasena = $contrasena2 = $captcha = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["nombre"])) {
        $nombreErr = "Se requiere el nombre";
    } else {
        $nombre = test_input($_POST["nombre"]);
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ ñÑ üÜ]*$/", $nombre)) {
            $nombreErr = "Sólo se permiten letras y espacios en blanco.";
        } else {
            if (strlen($nombre) > 45) {
                $nombreErr = "el nombre debe de ser menor a 45 caracteres";
            } else {
                if (empty($_POST["apellidos"])) {
                    $apellidosErr = "Se requiere apellido";
                } else {
                    $apellidos = test_input($_POST["apellidos"]);
                    if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ ñÑ üÜ]*$/", $apellidos)) {
                        $apellidosErr = "Sólo se permiten letras y espacios en blanco.";
                    } else {
                        if (strlen($apellidos) > 45) {
                            $apellidosErr = "los apellidos deben de ser menores a 45 caracteres";
                        } else {
                            if (empty($_POST["usuario"])) {
                                $usuarioErr = "Se requiere el nombre de usuario";
                            } else {
                                $usuario = test_input($_POST["usuario"]);
                                if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ ñÑ üÜ]*$/", $usuario)) {
                                    $usuarioErr = "Sólo se permiten letras y espacios en blanco.";
                                } else {
                                    if (strlen($usuario) > 45) {
                                        $usuarioErr = "El nombre de usuario deben de ser menor a 45 caracteres";
                                    } else {
                                        if (empty($_POST["contrasena"])) {
                                            $contrasenaErr = "Se requiere contraseña";
                                        } else {
                                            $contrasena = test_input($_POST["contrasena"]);
                                            if (strlen($contrasena) < 5 || strlen($contrasena) > 255) {
                                                $contrasenaErr = "La contraseña debe tener 5 caracteres como mínimo y menos de 255 caracteres";
                                            } else {
                                                $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);
                                                if (empty($_POST["contrasena2"])) {
                                                    $contrasena2Err = "Se requiere confirmar contraseña";
                                                } else {
                                                    $contrasena2 = test_input($_POST["contrasena2"]);
                                                    if (strlen($contrasena2) < 5 || strlen($contrasena2) > 255) {
                                                        $contrasenaErr2 = "La contraseña de confirmación debe tener 5 caracteres como mínimo y menos de 255 caracteres";
                                                    } else {
                                                        $contrasena_encriptada = password_hash($contrasena2, PASSWORD_DEFAULT);
                                                        if ($contrasena != $contrasena2) {
                                                            $contrasenaErr  = "La contraseña no coincide";
                                                            $contrasena2Err = "La contraseña no coincide";
                                                        } else {
                                                            if (empty($_POST["captcha"])) {
                                                                $captchaErr = "Se requiere captcha";
                                                            } else {
                                                                $captcha = test_input($_POST["captcha"]);
                                                                
                                                                if ($captcha != "" && $_POST['captcha'] == $_SESSION['captcha']) {
                                                                    
                                                                    //verificamos que no exista ya ese usuario
                                                                    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario_administrador WHERE nombre_usuario = '$usuario'");
                                                                    if (mysqli_num_rows($verificar_usuario) > 0) {
                                                                        echo '<script>
                                alert("El usuario ya esta registrado cambie su nombre de usuario");
                                window.history.go(-1);
                             </script>';
                                                                        exit;
                                                                    }
                                                                    
                                                                    $insertar = "INSERT INTO usuario_administrador (nombre, apellidos, nombre_usuario, contrasena, id_permisos_usuario_administrador) VALUES ('$nombre', 
                             '$apellidos', '$usuario', '$contrasena_encriptada', '2')";
                                                                    
                                                                    //Ejecutar la consulta de insersion
                                                                    $resultado = mysqli_query($conexion, $insertar);
                                                                    if (!$resultado) {
                                                                        echo '<script>
                                alert("Error al registrarse consulte a su administrador de sistema");
                                window.history.go(-1);
                             </script>';
                                                                        exit;
                                                                    } else {
                                                                        echo '<script>
                                alert("Usuario registrado ingrese con sus usuario y contraseña");
                                window.location.replace("sistema-administracion/login-sis-admin.php");
                             </script>';
                                                                        exit;
                                                                    }
                                                                    mysqli_free_result($resultado);
                                                                    mysqli_close($conexion);
                                                                } else {
                                                                    
                                                                    $captchaErr2 = "Ingrese captcha correcto";
                                                                    
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            
        }
        
    }
    
}
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
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link rel="stylesheet" href="css/estilos-registro-blog.css">
      <script src="../../javascript/validar-registro-blog.js"></script>
      <title>Registro de usuario</title>
   </head>
   <body>
      <div class="contenedor-filas-columnas">
         <!--Inicia header-->
         <header>
            <div class="caja-header">
               <div class="imagen-header">
                  <a href="../../index.html"><img class="logo" src="imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
               </div>
               <div class="titulo-header">
                  <a href="">
                     <h1 class="h1-header">Registro de usuarios escuela sabática adultos</h1>
                  </a>
               </div>
            </div>
         </header>
         <!--Inicia nav-->
         <nav>
            <div class="columna-100-nav">
               <nav class="menu">
                  <ul class="ul-nav">
                     <li class="li-nav">
                        <a class="a-nav" href="login-blog-adultos.php">
                           <h2 class="h2-menu-nav">Login escuela sabática</h2>
                        </a>
                     </li>
                     <li class="li-nav">
                        <a class="a-nav" href="../../sistema-administracion/login-sis-admin.php">
                           <h2 class="h2-menu-nav">Sistema de administración </h2>
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </nav>
         <!--Section con login-->
         <section>
            <div class="login1">
               <form class="formulario-registrologin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validar()">
                  <h3 class="formulario-titulo">Registro de usuarios:</h3>
                  <div class="contenedor-inputs">
                     <span class="input-100"><?php echo $nombreErr;?></span>
                     <span class="input-100"><?php echo $nombreErr2;?></span>
                     <input id="nombre" type="text" name="nombre" placeholder="Nombre" class="input-100">
                     <span class="input-100"><?php echo $apellidosErr;?></span>
                     <span class="input-100"><?php echo $apellidosErr2;?></span>
                     <input id="apellidos" type="text" name="apellidos" placeholder="Apellidos" class="input-100">
                     <span class="input-100"><?php echo $usuarioErr;?></span>
                     <span class="input-100"><?php echo $usuarioErr2;?></span>
                     <input id="usuario" type="text" name="usuario" placeholder="Nombre de usuario" class="input-100">
                     <span class="input-100"><?php echo $contrasenaErr;?></span>
                     <span class="input-100"><?php echo $contrasenaErr2;?></span>
                     <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" class="input-100">
                     <span class="input-100"><?php echo $contrasena2Err;?></span>
                     <span class="input-100"><?php echo $contrasena2Err2;?></span>
                     <input type="password" id="contrasena2" name="contrasena2" placeholder="Confirmar contraseña" class="input-100">
                     <img src="blog-escuela-sabatica/escuela-adultos/captcha_script.php" class="input-100">
                     <span class="input-100"> <?php echo $captchaErr;?></span>
                     <span class="input-100"> <?php echo $captchaErr2;?></span>
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
   </body>
</html>