<?php

//incluir archivo de conexion

include "../../conexion-blog.php";

require("sesiones.php");

//require("../lista-url-seguras.php");

//error_reporting(0);

//validar sesion de usuario actual para el acceso.

$consultaid          = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";

$resultadoconsultaid = mysqli_query($conexion, $consultaid);

$registroconsultaid  = mysqli_fetch_assoc($resultadoconsultaid);

//variable de sesion para acceso y permisos

$varsesion           = $_SESSION['nombre_usuario'];

if ($varsesion == null || $varsesion = '' || $registroconsultaid['id_permiso_blog'] == "1") {

    echo '<script>

        alert("No es un usuario registrado o acutorizado favor de pedir autorización.");

        window.location.href="loginblog.html";

        </script>';

    die();

}

;





$tituloErr = $fechaErr = $versiculoErr = $citaErr = $lecturaErr = $objetivoErr = $comentarioErr = $pregunta1Err = $titulocitas1Err = $citas1Err = $pregunta2Err = $titulocitas2Err = $citas2Err = $pregunta3Err = $titulocitas3Err = $citas3Err = $pregunta4Err = $titulocitas4Err = $citas4Err = $pregunta5Err = $titulocitas5Err = $citas5Err = $pregunta6Err = $titulocitas6Err = $citas6Err = $pregunta7Err = $titulocitas7Err = $citas7Err =$pregunta8Err = $titulocitas8Err = $citas8Err = $envioErr = $envio1 = $envio2 = $envio3 = $envio4 = $envio5 = $envio6 = $envio7 = $envio8 = $envio9 = $envio10 = $envio11 = $envio12 = $envio13 = "";

$titulo    = $fecha = $versiculo = $cita = $lectura = $objetivo = $comentario = $pregunta1 = $titulocitas1 = $citas1 = $pregunta2 = $titulocitas2 = $citas2 = $pregunta3 = $titulocitas3 = $citas3 = $pregunta4 = $titulocitas4 = $citas4 = $pregunta5 = $titulocitas5 = $citas5 = $pregunta6 = $titulocitas6 = $citas6 = $pregunta7 = $titulocitas7 = $citas7 =$pregunta8 = $titulocitas8 = $citas8 = "";



function test_input($data)

{

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["fecha"])) {

                $fechaErr = "Se requiere fecha";

            } else {

                $fecha = test_input($_POST["fecha"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^([0-9]{4})[\/.-]([0-9]{1,2})[\/.-]([0-9]{1,2})$/', $fecha)) {

                    $fechaErr = "Sólo se permite formato de fecha";

                } else {

                    $verificar_fecha = mysqli_query($conexion, "SELECT * FROM fecha_leccion WHERE fecha = '$fecha'");

                    if (mysqli_num_rows($verificar_fecha) > 0) {

                        $fechaErr = "La fecha de lección ya existen";

                    } else {

                        $miconsulta = "INSERT INTO fecha_leccion ( fecha, titulo_lecciones_adultos) VALUES ('" . $fecha . "', '" . $titulo . "')";

                        $resultado  = mysqli_query($conexion, $miconsulta);

                        $envio1     = "La fecha se guardo con éxito";

                    }

                }

            }

            

        }

    }

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü 0-9 î â • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["versiculo"])) {

                $versiculoErr = "Se requiere versículo";

            } else {

                $versiculo = test_input($_POST["versiculo"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $versiculo)) {

                    $versiculoErr = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    $verificar_versiculo = mysqli_query($conexion, "SELECT * FROM versiculo_memorizar_adultos WHERE versiculo_adultos = '$versiculo'");

                    if (mysqli_num_rows($verificar_versiculo) > 0) {

                        $versiculoErr = "El versículo de lección ya existen";

                    } else {

                        $miconsulta = "INSERT INTO versiculo_memorizar_adultos ( versiculo_adultos, titulo_lecciones_adultos) VALUES ('" . $versiculo . "', '" . $titulo . "')";

                        $resultado  = mysqli_query($conexion, $miconsulta);

                        $envio2     = "El versículo se guardó con éxito";

                    }

                }

            }

            

        }

    }

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü 0-9 î â • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["cita"])) {

                $citaErr = "Se requiere cita";

            } else {

                $cita = test_input($_POST["cita"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $cita)) {

                    $citaErr = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["lectura"])) {

                        $lecturaErr = "Se requiere lectura";

                    } else {

                        $lectura = test_input($_POST["lectura"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $lectura)) {

                            $lecturaErr = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            

                            $verificar_cita_lectura = mysqli_query($conexion, "SELECT * FROM lectura_biblica_adultos WHERE titulo_lectura_biblica = '$cita' OR lectura_biblica_adultos = '$lectura'");

                            if (mysqli_num_rows($verificar_cita_lectura) > 0) {

                                $lecturaErr = "La cita y o lectura de la lectura bíblica ya existe";

                            } else {

                                $miconsulta = "INSERT INTO lectura_biblica_adultos ( titulo_lectura_biblica, lectura_biblica_adultos, titulo_lecciones_adultos) VALUES ('" . $cita . "','" . $lectura . "', '" . $titulo . "')";

                                $resultado  = mysqli_query($conexion, $miconsulta);

                                $envio3     = "La cita y lectura de la lectura bíblica se agregaron correctamente";

                            }

                            

                        }

                        

                    }

                }

                

            }

        }

    }

    

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü 0-9 î â • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["objetivo"])) {

                $objetivoErr = "Se requiere objetivo";

            } else {

                $objetivo = test_input($_POST["objetivo"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " ” “  : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $objetivo)) {

                    $objetivoErr = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    

                    $verificar_objetivo = mysqli_query($conexion, "SELECT * FROM objetivo_adultos WHERE objetivo_adultos = '$objetivo'");

                    if (mysqli_num_rows($verificar_objetivo) > 0) {

                        $objetivoErr = "El objetivo ya existe";

                    } else {

                        $miconsulta = "INSERT INTO objetivo_adultos ( objetivo_adultos, titulo_lecciones_adultos) VALUES ('" . $objetivo . "', '" . $titulo . "')";

                        $resultado  = mysqli_query($conexion, $miconsulta);

                        $envio4     = "El objetivo se agregó correctamente";

                    }

                    

                }

                

            }

        }

    }

    

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü 0-9 î â • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["comentariolectura"])) {

                $comentarioErr = "Se requiere comentario";

            } else {

                $comentario = test_input($_POST["comentariolectura"]);

                // check if name only contains letters and whitespace

                if (preg_match('/^[ < > = { } # $ + % [ ]  ]*$/', $comentario)) {

                    $comentarioErr = "No se permiten los siguientes caracteres: < > = { } # $ + % [ ] .";

                } else {

                    

                    $verificar_comentario = mysqli_query($conexion, "SELECT * FROM comentario_adultos WHERE comentario_adultos = '$comentario'");

                    if (mysqli_num_rows($verificar_comentario) > 0) {

                        $comentarioErr = "El comentario ya existe";

                    } else {

                        $miconsulta = "INSERT INTO comentario_adultos ( comentario_adultos, titulo_lecciones_adultos) VALUES ('" . $comentario . "', '" . $titulo . "')";

                        $resultado  = mysqli_query($conexion, $miconsulta);

                        $envio5     = "El comenatario se agregó correctamente";

                    }

                }

                

                

            }

        }

    }

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta1"])) {

                $pregunta1Err = "Se requiere pregunta";

            } else {

                $pregunta1 = test_input($_POST["pregunta1"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta1)) {

                    $pregunta1Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas1"])) {

                        $titulocitas1Err = "Se requieren citas";

                    } else {

                        $titulocitas1 = test_input($_POST["titulo_citas1"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î 0-9 â • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas1)) {

                            $titulocitas1Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas1"])) {

                                $citas1Err = "Se requiere textos de citas";

                            } else {

                                $citas1 = test_input($_POST["citas1"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , î . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas1)) {

                                    $citas1Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta1 = mysqli_query($conexion, "SELECT * FROM preguntas_1 WHERE pregunta = '$pregunta1'");

                                    if (mysqli_num_rows($verificar_pregunta1) > 0) {

                                        $pregunta1Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_1 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta1 . "', '" . $titulocitas1 . "', '" . $citas1 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio6     = "La pregunta 1 y sus citas se agregaron correctamente";

                                    }

                                    

                                }

                            }

                        }

                        

                    }

                }

            }

        }

    }

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta2"])) {

                $pregunta2Err = "Se requiere pregunta";

            } else {

                $pregunta2 = test_input($_POST["pregunta2"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta2)) {

                    $pregunta2Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas2"])) {

                        $titulocitas2Err = "Se requieren citas";

                    } else {

                        $titulocitas2 = test_input($_POST["titulo_citas2"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú â ñ Ñ ü Ü î 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas2)) {

                            $titulocitas2Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas2"])) {

                                $citas2Err = "Se requiere textos de citas";

                            } else {

                                $citas2 = test_input($_POST["citas2"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas2)) {

                                    $citas2Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta2 = mysqli_query($conexion, "SELECT * FROM preguntas_2 WHERE pregunta = '$pregunta2'");

                                    if (mysqli_num_rows($verificar_pregunta2) > 0) {

                                        $pregunta2Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_2 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta2 . "', '" . $titulocitas2 . "', '" . $citas2 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio7     = "La pregunta 2 y sus citas se agregaron correctamente";

                                    }

                                    

                                }

                            }

                        }

                        

                    }

                }

            }

        }

    }

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta3"])) {

                $pregunta3Err = "Se requiere pregunta";

            } else {

                $pregunta3 = test_input($_POST["pregunta3"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta3)) {

                    $pregunta3Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas3"])) {

                        $titulocitas3Err = "Se requieren citas";

                    } else {

                        $titulocitas3 = test_input($_POST["titulo_citas3"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas3)) {

                            $titulocitas3Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas3"])) {

                                $citas3Err = "Se requiere textos de citas";

                            } else {

                                $citas3 = test_input($_POST["citas3"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas3)) {

                                    $citas3Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta3 = mysqli_query($conexion, "SELECT * FROM preguntas_3 WHERE pregunta = '$pregunta3'");

                                    if (mysqli_num_rows($verificar_pregunta3) > 0) {

                                        $pregunta3Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_3 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta3 . "', '" . $titulocitas3 . "', '" . $citas3 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio8     = "La pregunta 3 y sus citas se agregaron correctamente";

                                    }

                                    

                                }

                            }

                        }

                        

                    }

                }

            }

        }

    }

    

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta4"])) {

                $pregunta4Err = "Se requiere pregunta";

            } else {

                $pregunta4 = test_input($_POST["pregunta4"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta4)) {

                    $pregunta4Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas4"])) {

                        $titulocitas4Err = "Se requieren citas";

                    } else {

                        $titulocitas4 = test_input($_POST["titulo_citas4"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü â Ü î 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas4)) {

                            $titulocitas4Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas4"])) {

                                $citas4Err = "Se requiere textos de citas";

                            } else {

                                $citas4 = test_input($_POST["citas4"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas4)) {

                                    $citas4Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta4 = mysqli_query($conexion, "SELECT * FROM preguntas_4 WHERE pregunta = '$pregunta4'");

                                    if (mysqli_num_rows($verificar_pregunta4) > 0) {

                                        $pregunta4Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_4 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta4 . "', '" . $titulocitas4 . "', '" . $citas4 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio9     = "La pregunta 4 y sus citas se agregaron correctamente";

                                    }

                                    

                                }

                            }

                        }

                        

                    }

                }

            }

        }

    }

    

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta5"])) {

                $pregunta5Err = "Se requiere pregunta";

            } else {

                $pregunta5 = test_input($_POST["pregunta5"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta5)) {

                    $pregunta5Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas5"])) {

                        $titulocitas5Err = "Se requieren citas";

                    } else {

                        $titulocitas5 = test_input($_POST["titulo_citas5"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas5)) {

                            $titulocitas5Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas5"])) {

                                $citas5Err = "Se requiere textos de citas";

                            } else {

                                $citas5 = test_input($_POST["citas5"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas5)) {

                                    $citas5Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta5 = mysqli_query($conexion, "SELECT * FROM preguntas_5 WHERE pregunta = '$pregunta5'");

                                    if (mysqli_num_rows($verificar_pregunta5) > 0) {

                                        $pregunta5Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_5 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta5 . "', '" . $titulocitas5 . "', '" . $citas5 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio10    = "La pregunta 5 y sus citas se agregaron correctamente";

                                    }

                                    

                                }

                            }

                        }

                        

                    }

                }

            }

        }

    }

    

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta6"])) {

                $pregunta6Err = "Se requiere pregunta";

            } else {

                $pregunta6 = test_input($_POST["pregunta6"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta6)) {

                    $pregunta6Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas6"])) {

                        $titulocitas6Err = "Se requieren citas";

                    } else {

                        $titulocitas6 = test_input($_POST["titulo_citas6"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas6)) {

                            $titulocitas6Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas6"])) {

                                $citas6Err = "Se requiere textos de citas";

                            } else {

                                $citas6 = test_input($_POST["citas6"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas6)) {

                                    $citas6Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta6 = mysqli_query($conexion, "SELECT * FROM preguntas_6 WHERE pregunta = '$pregunta6'");

                                    if (mysqli_num_rows($verificar_pregunta6) > 0) {

                                        $pregunta6Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_6 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta6 . "', '" . $titulocitas6 . "', '" . $citas6 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio11    = "La pregunta 6 y sus citas se agregaron correctamente";

                                    }

                                    

                                }

                            }

                        }

                        

                    }

                }

            }

        }

    }

    

    

    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta7"])) {

                $pregunta7Err = "Se requiere pregunta";

            } else {

                $pregunta7 = test_input($_POST["pregunta7"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta7)) {

                    $pregunta7Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas7"])) {

                        $titulocitas7Err = "Se requieren citas";

                    } else {

                        $titulocitas7 = test_input($_POST["titulo_citas7"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas7)) {

                            $titulocitas7Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas7"])) {

                                $citas7Err = "Se requiere textos de citas";

                            } else {

                                $citas7 = test_input($_POST["citas7"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas7)) {

                                    $citas7Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta7 = mysqli_query($conexion, "SELECT * FROM preguntas_7 WHERE pregunta = '$pregunta7'");

                                    if (mysqli_num_rows($verificar_pregunta7) > 0) {

                                        $pregunta7Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_7 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta7 . "', '" . $titulocitas7 . "', '" . $citas7 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio12    = "La pregunta 7 y sus citas se agregaron correctamente";

                                    }

                                    

                                }

                            }

                        }

                        

                    }

                }

            }

        }

    }

    

    



    if (empty($_POST["titulo_lecciones_adultos"])) {

        $tituloErr = "Se requiere título";

    } else {

        $titulo = test_input($_POST["titulo_lecciones_adultos"]);

        // check if name only contains letters and whitespace

        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulo)) {

            $tituloErr = "Sólo se permiten letras numeros y espacios en blanco.";

        } else {

            if (empty($_POST["pregunta8"])) {

                $pregunta8Err = "Se requiere pregunta";

            } else {

                $pregunta8 = test_input($_POST["pregunta8"]);

                // check if name only contains letters and whitespace

                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $pregunta8)) {

                    $pregunta8Err = "Sólo se permiten caracteres de la escritura básica.";

                } else {

                    if (empty($_POST["titulo_citas8"])) {

                        $titulocitas8Err = "Se requieren citas";

                    } else {

                        $titulocitas8 = test_input($_POST["titulo_citas8"]);

                        // check if name only contains letters and whitespace

                        if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $titulocitas8)) {

                            $titulocitas8Err = "Sólo se permiten caracteres de la escritura básica.";

                        } else {

                            if (empty($_POST["citas8"])) {

                                $citas8Err = "Se requiere textos de citas";

                            } else {

                                $citas8 = test_input($_POST["citas8"]);

                                // check if name only contains letters and whitespace

                                if (!preg_match('/^[a-z A-Z á é í ó ú Á É Í Ó Ú ñ Ñ ü Ü î â 0-9 • ° , . ( ) “ ” " " : ¿ ? ! ¡ º ª - ; \-\s ]*$/', $citas8)) {

                                    $citas8Err = "Sólo se permiten caracteres de la escritura básica.";

                                } else {

                                    

                                    $verificar_pregunta8 = mysqli_query($conexion, "SELECT * FROM preguntas_8 WHERE pregunta = '$pregunta8'");

                                    if (mysqli_num_rows($verificar_pregunta8) > 0) {

                                        $pregunta8Err = "La pregunta ya existe";

                                    } else {

                                        $miconsulta = "INSERT INTO preguntas_8 ( pregunta, nombre_citas, citas, titulo_lecciones_adultos) VALUES ('" . $pregunta8 . "', '" . $titulocitas8 . "', '" . $citas8 . "', '" . $titulo . "')";

                                        $resultado  = mysqli_query($conexion, $miconsulta);

                                        $envio13    = "La pregunta 8 y sus citas se agregaron correctamente";

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