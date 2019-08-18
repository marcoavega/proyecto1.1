<?php
//primer consulta para generar segunda variable de sesion id
$consulta  = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario='" . $_SESSION["nombre_usuario"] . "'";
$resultado = mysqli_query($conexion, $consulta);
$filas     = mysqli_fetch_array($resultado);
$filas["id_usuario_blog_adultos"];
$id                                  = $filas["id_usuario_blog_adultos"];
$_SESSION['id_usuario_blog_adultos'] = $id; //variable de sesion creada con el id
//consultas para cargar los datos
$leccion                             = "SELECT * FROM lecciones_adultos WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadoleccion                    = mysqli_query($conexion, $leccion);
$registroleccion                     = mysqli_fetch_assoc($resultadoleccion);
$fecha                               = "SELECT * FROM fecha_leccion WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadofecha                      = mysqli_query($conexion, $fecha);
$registrofecha                       = mysqli_fetch_assoc($resultadofecha);
$versiculo                           = "SELECT * FROM versiculo_memorizar_adultos WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadoversiculo                  = mysqli_query($conexion, $versiculo);
$registroversiculo                   = mysqli_fetch_assoc($resultadoversiculo);
$lectura                             = "SELECT * FROM lectura_biblica_adultos WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadolectura                    = mysqli_query($conexion, $lectura);
$registrolectura                     = mysqli_fetch_assoc($resultadolectura);
$objetivo                            = "SELECT * FROM objetivo_adultos WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadoobjetivo                   = mysqli_query($conexion, $objetivo);
$registroobjetivo                    = mysqli_fetch_assoc($resultadoobjetivo);
$comentario                          = "SELECT * FROM comentario_adultos WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadocomentario                 = mysqli_query($conexion, $comentario);
$registrocomentario                  = mysqli_fetch_assoc($resultadocomentario);
$pregunta1                           = "SELECT * FROM preguntas_1 WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadopregunta1                  = mysqli_query($conexion, $pregunta1);
$registropregunta1                   = mysqli_fetch_assoc($resultadopregunta1);
$pregunta2                           = "SELECT * FROM preguntas_2 WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadopregunta2                  = mysqli_query($conexion, $pregunta2);
$registropregunta2                   = mysqli_fetch_assoc($resultadopregunta2);
$pregunta3                           = "SELECT * FROM preguntas_3 WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadopregunta3                  = mysqli_query($conexion, $pregunta3);
$registropregunta3                   = mysqli_fetch_assoc($resultadopregunta3);
$pregunta4                           = "SELECT * FROM preguntas_4 WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadopregunta4                  = mysqli_query($conexion, $pregunta4);
$registropregunta4                   = mysqli_fetch_assoc($resultadopregunta4);
$pregunta5                           = "SELECT * FROM preguntas_5 WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadopregunta5                  = mysqli_query($conexion, $pregunta5);
$registropregunta5                   = mysqli_fetch_assoc($resultadopregunta5);
$pregunta6                           = "SELECT * FROM preguntas_6 WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadopregunta6                  = mysqli_query($conexion, $pregunta6);
$registropregunta6                 = mysqli_fetch_assoc($resultadopregunta6);
$pregunta7                           = "SELECT * FROM preguntas_7 WHERE titulo_lecciones_adultos='LECCIÓN 1. DECIDID HOY A QUIEN SEGUIR'";
$resultadopregunta7                  = mysqli_query($conexion, $pregunta7);
$registropregunta7                 = mysqli_fetch_assoc($resultadopregunta7);
$pregunta1 = $registropregunta1['pregunta'];
$pregunta2 = $registropregunta2['pregunta'];
$pregunta3 = $registropregunta3['pregunta'];
$pregunta4 = $registropregunta4['pregunta'];
$pregunta5 = $registropregunta5['pregunta'];
$pregunta6 = $registropregunta6['pregunta'];
$pregunta7 = $registropregunta7['pregunta'];
$datosLeccion = $registroleccion['datos_trimestre'];
?>