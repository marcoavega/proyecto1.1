<?php
require("lista-url-seguras.php");
//incluir archivo de conexion
include "conexion-sis-admin.php";
//error_reporting(0);
require("sesiones.php");
//require("lista-url-seguras.php");

$consultaid          = "SELECT * FROM usuario_administrador WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);
?>
<?php
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
$usuarioanteriorErr = $usuarionuevoErr = $contrasenanuevaErr = $contrasenanueva2Err = $contrasenaErr = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (empty($_POST["usuarioanterior"])) {
        $usuarioanteriorErr = "Se requiere el nombre";
    } else {//
        
        $usuarioanterior = test_input($_POST["usuarioanterior"]);
        
        if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9]*$/", $usuarioanterior)) {
            $usuarioanteriorErr = "Sólo se permiten letras y espacios en blanco.";
        } else {//
            
            if (strlen($usuarioanterior) > 30) {
                $usuarioanteriorErr = "el nombre debe de ser menor a 30 caracteres";
            } else {//
                if (empty($_POST["usuarionuevo"])) {
                    $usuarionuevoErr = "Se requiere el nombre de usuario";
                } else {//
                    $usuarionuevo = test_input($_POST["usuarionuevo"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9]*$/", $usuarionuevo)) {
                        $usuarionuevoErr = "Sólo se permiten letras y espacios en blanco.";
                    }
                    if (strlen($usuarionuevo) > 30) {
                        $usuarionuevoErr = "El nombre de usuario deben de ser menor a 30 caracteres";
                    } else {//
                        if (empty($_POST["contrasenanueva"])) {
                            $contrasenanuevaErr = "Se requiere contraseña";
                        } else {//
                            $contrasenanueva            = test_input($_POST["contrasenanueva"]);
                            $contrasenanueva_encriptada = password_hash($contrasenanueva, PASSWORD_DEFAULT);
                            if (empty($_POST["contrasenanueva2"])) {
                                $contrasenanueva2Err = "Se requiere contraseña";
                            } else {//
                                $contrasenanueva2           = test_input($_POST["contrasenanueva2"]);
                                $contrasena_encriptada = password_hash($contrasenanueva2, PASSWORD_DEFAULT);
                                
                                if ($contrasenanueva == $contrasenanueva2 && $usuarioanterior == $_SESSION['nombre_usuario']) {
                                    
                                    
                                 $sql                   = "UPDATE usuario_administrador SET nombre_usuario='$usuarionuevo', contrasena='$contrasena_encriptada' WHERE nombre_usuario='$usuarioanterior'";
                                 //verificamos que no exista ya ese usuario
                                 $verificar_usuario     = mysqli_query($conexion, "SELECT * FROM usuario_administrador WHERE nombre_usuario = '$usuarionuevo'");
                                 if (mysqli_num_rows($verificar_usuario) > 0) {
                                     echo '<script>
                                    alert("El usuario ya esta registrado");
                                    window.history.go(-1);
                                    </script>';
                                     exit;
                                 }
                                 if (mysqli_query($conexion, $sql)) {
                                     echo '<script>
                                        alert("Cambio realizado con éxito ingrese con sus usuario y contraseña nuevos");
                                        window.location.replace("login-sis-admin.php");
                                        </script>';
                                 } else {
                                     echo "Error updating record: " . mysqli_error($conexion);
                                 }
                                 mysqli_close($conexion);
                                    } 
                                 else {
                                    $contrasenaErr  = "La contraseña o y el usuario no coincide";
                                    
                                
                                 }
                              
                              }//
                            }//
                        }//
                    }//
                }//
            }//
            
         
            
        
        
    }//
    
    
}//
?>