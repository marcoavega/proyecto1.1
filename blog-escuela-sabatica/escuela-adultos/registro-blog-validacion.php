<?php
//error_reporting(0);
session_start();
/* session_unset();
  session_destroy();
  unset($_POST['nombre']);
  unset($_POST['captcha']);
  unset($_POST['contrasena']); */
include "../conexion-blog.php";
// define variables and set to empty values
$nombreErr = $apellidosErr = $usuarioErr = $contrasenaErr = $contrasena2Err = $captchaErr = "";
$nombreErr2 = $apellidosErr2 = $usuarioErr2 = $contrasenaErr2 = $contrasena2Err2 = $captchaErr2 = "";
$nombre = $apellidos = $usuario = $contrasena = $contrasena2 = $captcha = "";

function test_input($data) {
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
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ ñÑ üÜ]*$/", $nombre)) {
            $nombreErr = "Sólo se permiten letras y espacios en blanco.";
        } else {
            if (strlen($nombre) > 45) {
                $nombreErr = "el nombre debe de ser menor a 45 caracteres";
            } else {
                if (empty($_POST["usuario"])) {
                    $usuarioErr = "Se requiere el nombre de usuario";
                } else {
                    $usuario = test_input($_POST["usuario"]);
                    // check if name only contains letters and whitespace
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
                                                $contrasenaErr = "La contraseña no coincide";
                                                $contrasena2Err = "La contraseña no coincide";
                                            } else {
                                                if (empty($_POST["captcha"])) {
                                                    $captchaErr = "Se requiere captcha";
                                                } else {
                                                    $captcha = test_input($_POST["captcha"]);
                                                    if ($captcha != "" && $_POST['captcha'] == $_SESSION['captcha']) {
                                                        //verificamos que no exista ya ese usuario
                                                        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '$usuario'");
                                                        if (mysqli_num_rows($verificar_usuario) > 0) {
                                                            echo '<script>
                                alert("El usuario ya esta registrado cambie su nombre de usuario");
                                window.history.go(-1);
                             </script>';
                                                            exit;
                                                        }
                                                        $insertar = "INSERT INTO usuario_blog_adultos (nombre, apellidos, nombre_usuario, contrasena, ruta_imagen, id_permiso_blog) VALUES ('$nombre', 
                             '$apellidos', '$usuario', '$contrasena_encriptada', ' ' , '1')";

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
                                window.location.replace("../../index.php");
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
?> 