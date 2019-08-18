<?php
//error_reporting(0);
session_start();
/* session_unset();
  session_destroy();
  unset($_POST['nombre']);
  unset($_POST['captcha']);
  unset($_POST['contrasena']); */
include "conexion-blog.php";
// define variables and set to empty values
$usuarioErr = $contrasenaErr = $captchaErr = "";
$usuarioErr2 = $contrasenaErr2 = $captchaErr2 = $captchaErr3 = "";
$usuario = $contrasena = $captcha = "";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        $usuarioErr = "Se requiere el nombre de usuario";
    } else {
        $usuario = test_input($_POST["nombre"]);
        if (!preg_match("/^[a-zA-Z áéíóú ÁÉÍÓÚ ñÑ üÜ]*$/", $usuario)) {
            $usuarioErr = "Sólo se permiten letras y espacios en blanco.";
        } else {
            if (strlen($usuario) > 45) {
                $usuarioErr = "El usuario debe tener menos de 45 caracteres.";
            } else {
                if (empty($_POST["contrasena"])) {
                    $contrasenaErr = "Se requiere contraseña";
                } else {
                    $contrasena = test_input($_POST["contrasena"]);
                    if (strlen($contrasena) < 5 || strlen($contrasena) > 255) {
                        $contrasenaErr = "La contraseña debe tener 5 caracteres como mínimo y menos de 255 caracteres";
                    } else {
                        if (empty($_POST["captcha"])) {
                            $captchaErr = "Se requiere captcha";
                        } else {
                            $captcha = test_input($_POST["captcha"]);
                            if (strlen($captcha) != 3) {
                                $captchaErr3 = "El captcha debe tener una longitud exacta de 5 caracteres";
                            } else {
                                if ($captcha != "" && $_POST['captcha'] == $_SESSION['captcha']) {
                                    $consulta = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario='$usuario'";
                                    $resultado = mysqli_query($conexion, $consulta);
                                    $filas = mysqli_fetch_array($resultado);
                                    if ($usuario != "" && $filas['nombre_usuario'] == $usuario) {
                                        if ($filas > 0 && password_verify($contrasena, $filas["contrasena"])) {
                                            $_SESSION['nombre_usuario'] = $usuario;
                                            $id = $filas["id_usuario_blog_adultos"];
                                            header("location: principal-blog.php");
                                        } else {
                                            if ($contrasena != "") {
                                                $contrasenaErr2 = "Ingrese la contraseña correcta";
                                            }
                                        }
                                    } else {
                                        if ($usuario != "") {
                                            $usuarioErr2 = "Ingrese nombre de usuario correcto";
                                        }
                                    }
                                    mysqli_free_result($resultado);
                                    mysqli_close($conexion);
                                } else {
                                    if ($captcha != "") {
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
?>