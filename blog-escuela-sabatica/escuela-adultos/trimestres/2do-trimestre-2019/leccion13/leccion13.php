<?php
require("../../sesiones.php");
include "../../../../conexion-blog.php";
include "consultas/consulta13.php";
require("../../../lista-url-seguras.php");
/* Consulta para sacar el id de usuario de la tabla usuario_blog_adultos */
$consultaid = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoconsultaid = mysqli_query($conexion, $consultaid);
$registroconsultaid = mysqli_fetch_assoc($resultadoconsultaid);
/* Consulta para traernos el nombre de la imagen de el campo ruta_imagen se encuentra en la tabla usuario_blog_adultos */
$consultaImagen = "SELECT * FROM usuario_blog_adultos WHERE nombre_usuario = '" . $_SESSION['nombre_usuario'] . "'";
$resultadoConsultaImagen = mysqli_query($conexion, $consultaImagen);
while ($row = mysqli_fetch_array($resultadoConsultaImagen)) {
    /* almacenamos el nombre de la ruta en la variable $ruta_img */
    $ruta_img = $row["ruta_imagen"];
}
/* date default para la hora de registro en el servidor */
date_default_timezone_set("America/Mexico_City");
?>
<!DOCTYPE html>
<html lang="es-MX">
    <!--Head con metas y link de hoja de estilo-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-
              scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Pagina de leccion 1 de escuela sabatica por trimestre de blog de escuela sabatica de adultos">
        <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, estudio bíblico de escuela sabática.">
        <meta name="author" content="iddios.ga">
        <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" href="estilos-leccion1.css">
        <script src="validar-pregunta.js"></script>
        <title>Página de lección 13 de escuela sabática</title>
    </head>
    <body>
    <!--<script type="text/javascript">document.oncontextmenu = function(){return false;}</script>-->
        <div class="contenedor-filas-columnas">
            <!--primerdiv-->
            <!--Inicia header-->
            <header>
                <div class="caja-header">
                    <div class="imagen-header">
                        <a href="../../../principal-blog.php"><img class="logo" src="../../../../../imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica"></a>
                    </div>
                    <div class="titulo-header">
                        <a href="">
                            <h1 class="h1-header">Página de lección 13 de escuela sabática</h1>
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
                            <a href="../../../principal-blog.php">
                                <h3>Inicio</h3>
                            </a>
                        </li>
                        <li>
                            <a href="../../../datos-usuario.php">
                                <h3>Datos de usuario</h3>
                            </a>
                        </li>
                        <li>
                            <a href="../../../cerrar-sesion.php">
                                <h3>Cerrar sesión</h3>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--mapa de navegacion-->
            <div class="columnamapa">
                <div class="mapa">
                    <ul>
                        <li class="amapa">Usted está aquí 
                        </li>
                        <label>>></label>
                        <li><a  class="amapa" href="../../../principal-blog.php">Principal</a>
                        </li>
                        <label>>></label>
                        <li><a  class="amapa" href="../../../principal-blog.php">Seleccionar trimestre</a>
                        </li>
                        <label>>></label>
                        <li><a  class="amapa" href="../../../lecciones-2.php">Seleccionar lección</a>
                        </li>
                        <label>>></label>
                        <li><a  class="amapa" href="">Lección 13</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="boton_regresar">
                <a href="../../../lecciones-2.php"><button class="span_pregunta">Regresar</button></a>
            </div>

            <!--secciones de la leccion-->
            <div class="principal1">
                <h2 class="h2_titulo_principal"><?php
                    echo ($registroleccion['titulo_lecciones_adultos']);
                    ?></h2>
                <h3 class="h3fecha">Fecha:<?php
                    echo ($registrofecha['fecha']);
                    ?></h3>
                <div class="objetivo">
                    <h4 class="h4tituloobjetivo">Objetivo</h4>
                    <p class="particleobjetivo"><?php
                        echo ($registroobjetivo['objetivo_adultos']);
                        ?></p>
                </div>

                <aside class="aside">
                    <!--Contenido-->
                    <h2 class="h2preguntas">Contenido</h2>
                    <div class="div_preguntas_botones2">
                        <a href='javascript:seleccion(9);'><button class="span_pregunta2">Versículo</button></a>
                        <a href='javascript:seleccion(10);'><button class="span_pregunta2">Lectura bíblica</button></a>
                        <a href='javascript:seleccion(11);'><button class="span_pregunta2">Comentario</button></a>
                    </div>

                    <!--Preguntas-->
                    <h2 class="h2preguntas">Preguntas</h2>
                    <div class="div_preguntas_botones2">
                        <a href='javascript:seleccion(1);'><button class="span_pregunta2">Pregunta 1</button></a>
                        <a href='javascript:seleccion(2);'><button class="span_pregunta2">Pregunta 2</button></a>
                        <a href='javascript:seleccion(3);'><button class="span_pregunta2">Pregunta 3</button></a>
                        <a href='javascript:seleccion(4);'><button class="span_pregunta2">Pregunta 4</button></a>
                        <a href='javascript:seleccion(5);'><button class="span_pregunta2">Pregunta 5</button></a>
                        <a href='javascript:seleccion(6);'><button class="span_pregunta2">Pregunta 6</button></a>
                        <a href='javascript:seleccion(7);'><button class="span_pregunta2">Pregunta 7</button></a>
                        <a href='javascript:seleccion(8);'><button class="span_pregunta2">Pregunta 8</button></a>
                    </div>
                </aside>
                <section class="section">
                    <div class="div_pregunta" id="op9" style="display:none;">
                        <article class="escuela">
                            <div class="versiculo_memoria">
                                <h4 class="h4versiculo">Versículo para memorizar</h4>
                                <p class="particlecentrado"><?php
                                    echo ($registroversiculo['versiculo_adultos']);
                                    ?></p>
                            </div>
                    </div>
                    <div class="div_pregunta" id="op10" style="display:none;">
                        <h4 class="h4titulolectura">Lectura bíblica</h4>
                        <p class="particle"><?php
                            echo ($registrolectura['titulo_lectura_biblica']);
                            ?></p>
                        <p class="particle"><?php
                            echo ($registrolectura['lectura_biblica_adultos']);
                            ?></p>
                    </div>
                    <div class="div_pregunta" id="op11" style="display:none;">
                        <h4 class="h4titulocomentario">Comentario</h4>
                        <p class="particle"><?php
                            echo ($registrocomentario['comentario_adultos']);
                            ?></p>
                    </div>



                    <div class="div_pregunta" id="op1" style="display:none;">
                        <h2 class="h2preguntas">Pregunta 1</h2>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta1['pregunta']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta1['nombre_citas']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta1['citas']);
                            ?></h3>
                        <div class="comentarios">
                            <?php
                            $respuesta1 = "SELECT * FROM respuestas_1  WHERE pregunta='" . $pregunta1 . "' AND datos_trimestre='" . $datosLeccion . "' ORDER BY fecha_comentario desc";
                            if ($resultadopregunta1 = mysqli_query($conexion, $respuesta1)) {
                                while ($registropregunta1 = mysqli_fetch_assoc($resultadopregunta1)) {
                                    ?>
                                    <?php
                                    echo "<div class='h4comentario'>
                                          <div class='div-actualizar-imagen'><img class='actualizar-imagen' src='/imagenes/imagenes2/" . $registropregunta1['ruta_imagen'] . "' alt='' /></div>
                                          <div class='div-actualizar-imagen'><p>usuario que realiza comentario: <p class='h4comentario-p'> " . $registropregunta1['nombre_usuario'] . "</p></p></div>
                                          <div class='div-actualizar-imagen'><p>fecha en que se realizó el comentario: <p class='h4comentario-p'> " . $registropregunta1['fecha_comentario'] . "</p></div>
                                          <div class='div-actualizar-imagen'><p>Comentario: <p class='h4comentario-p'> " . $registropregunta1['comentario'] . "</div></p></div>";
                                    if ($registroconsultaid['id_permiso_blog'] == "2") {
                                        ?>
                                        <div class="principal1">
                                            <form method='post' action='eliminar/eliminar1.php'>
                                                <input type='hidden' name='comentario' value='<?php
                                                echo ($registropregunta1['comentario']);
                                                ?>'>
                                                <input type='submit' value='Eliminar' class='boton_entrar'>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ;
                                }
                            }
                            ?>
                        </div>
                        <form class="respuesta" action="inserciones/insertar1.php" method="post" onsubmit="return validarPregunta1()">
                            <label class="label_contestar" for="comentar1">Favor de contestar en esta área: </label>
                            <div class="row">
                                <div class="col-25">
                                    <label class="fname" for="fname">Nombre de usuario:</label>
                                </div>
                                <div class="col-75">
                                    <input class="inputname" id="nombre_usuario1" name="nombre_usuario1" type="text" value="<?php
                                    echo $_SESSION['nombre_usuario'];
                                    ?>" readonly="readonly">
                                </div>
                            </div>
                            <!--imagen en formulario-->
                            <div class="actualizar">
                                <img class="actualizar-imagen" src="/imagenes/imagenes2/<?php
                                echo $ruta_img;
                                ?>" alt="" />
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="imagen1" id="imagen1" name="imagen1" type="text" value="<?php
                                    echo $ruta_img;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="id_usuario1" id="id_usuario1" name="id_usuario1" type="text" value="<?php
                                    echo $_SESSION['id_usuario_blog_adultos'];
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="pregunta1" id="pregunta1" name="pregunta1" type="text" value="<?php
                                    echo $pregunta1;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="datos_trimestre1" id="datos_trimestre1" name="datos_trimestre1" type="text" value="<?php
                                    echo $datosLeccion;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="label_comentario" for="comentario">Ingrese su comentario o respuesta...</label>
                                </div>
                                <div class="col-75">
                                    <textarea class="textarea" id="contenido_comentario1" name="contenido_comentario1" placeholder="Comentario o respuesta." ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input class="boton_entrar" type="submit" value="Contestar 1er pregunta">
                            </div>
                        </form>
                    </div>
                    <div class="div_pregunta" id="op2" style="display:none;">
                        <!--Pregunta 2-->
                        <h2 class="h2preguntas">Pregunta 2</h2>
                        <h3 class="h3preguntas"><?php
                            echo "2.- Algo similar a Moisés se presenta con David, cuando escribe David un cántico para agradecer a Dios su manifestación poderosa, meditemos en las expresiones que hace y cómo considera el apoyo de Dios en el momento difícil que él vivió. 2o Samuel 22:1-7 (en casa medite todo el cántico de David). ¿Esto puede ser aplicable para nosotros?";
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta2['nombre_citas']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta2['citas']);
                            ?></h3>
                        <div class="comentarios">
                            <?php
                            $respuesta2 = "SELECT * FROM respuestas_2  WHERE pregunta='" . $pregunta2 . "' AND datos_trimestre='" . $datosLeccion . "' ORDER BY fecha_comentario desc";
                            if ($resultadopregunta2 = mysqli_query($conexion, $respuesta2)) {
                                while ($registropregunta2 = mysqli_fetch_assoc($resultadopregunta2)) {
                                    echo "<div class='h4comentario'>
                                                <div class='div-actualizar-imagen'><img class='actualizar-imagen' src='/imagenes/imagenes2/" . $registropregunta2['ruta_imagen'] . "' alt='' /></div>
                                                <div class='div-actualizar-imagen'><p>usuario que realiza comentario: <p class='h4comentario-p'> " . $registropregunta2['nombre_usuario'] . "</p></p></div>
                                                <div class='div-actualizar-imagen'><p>fecha en que se realizó el comentario: <p class='h4comentario-p'> " . $registropregunta2['fecha_comentario'] . "</p></div>
                                                <div class='div-actualizar-imagen'><p>Comentario: <p class='h4comentario-p'> " . $registropregunta2['comentario'] . "</div></p></div>";
                                    if ($registroconsultaid['id_permiso_blog'] == "2") {
                                        ?>
                                        <div class="principal1">
                                            <form method='post' action='eliminar/eliminar2.php'>
                                                <input type='hidden' name='comentario' value='<?php
                                                echo ($registropregunta2['comentario']);
                                                ?>'>
                                                <input type='submit' value='Eliminar' class='boton_entrar'>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ;
                                }
                            }
                            ?>
                        </div>
                        <form class="respuesta" action="inserciones/insertar2.php" method="post" onsubmit="return validarPregunta2()">
                            <label class="label_contestar" for="comentar1">Favor de contestar en esta área: </label>
                            <div class="row">
                                <div class="col-25">
                                    <label class="fname" for="fname">Nombre de usuario:</label>
                                </div>
                                <div class="col-75">
                                    <input class="inputname" id="nombre_usuario2" name="nombre_usuario2" type="text" value="<?php
                                    echo $_SESSION['nombre_usuario'];
                                    ?>" readonly="readonly">
                                </div>
                            </div>
                            <!--imagen en formulario-->
                            <div class="actualizar">
                                <img class="actualizar-imagen" src="/imagenes/imagenes2/<?php
                                echo $ruta_img;
                                ?>" alt="" />
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="imagen1" id="imagen2" name="imagen2" type="text" value="<?php
                                    echo $ruta_img;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="id_usuario1" id="id_usuario2" name="id_usuario2" type="text" value="<?php
                                    echo $_SESSION['id_usuario_blog_adultos'];
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="pregunta1" id="pregunta2" name="pregunta2" type="text" value="<?php
                                    echo $pregunta2;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="datos_trimestre1" id="datos_trimestre2" name="datos_trimestre2" type="text" value="<?php
                                    echo $datosLeccion;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="label_comentario" for="comentario">Ingrese su comentario o respuesta...</label>
                                </div>
                                <div class="col-75">
                                    <textarea class="textarea" id="contenido_comentario2" name="contenido_comentario2" placeholder="Comentario o respuesta." ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input class="boton_entrar" type="submit" value="Contestar 2da pregunta">
                            </div>
                        </form>
                    </div>
                    <div class="div_pregunta" id="op3" style="display:none;">
                        <!--Pregunta 3-->
                        <h2 class="h2preguntas">Pregunta 3</h2>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta3['pregunta']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta3['nombre_citas']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta3['citas']);
                            ?></h3>
                        <div class="comentarios">
                            <?php
                            $respuesta3 = "SELECT * FROM respuestas_3  WHERE pregunta='" . $pregunta3 . "' AND datos_trimestre='" . $datosLeccion . "' ORDER BY fecha_comentario desc";
                            if ($resultadopregunta3 = mysqli_query($conexion, $respuesta3)) {
                                while ($registropregunta3 = mysqli_fetch_assoc($resultadopregunta3)) {
                                    echo "<div class='h4comentario'>
                                                <div class='div-actualizar-imagen'><img class='actualizar-imagen' src='/imagenes/imagenes2/" . $registropregunta3['ruta_imagen'] . "' alt='' /></div>
                                                <div class='div-actualizar-imagen'><p>usuario que realiza comentario: <p class='h4comentario-p'> " . $registropregunta3['nombre_usuario'] . "</p></p></div>
                                                <div class='div-actualizar-imagen'><p>fecha en que se realizó el comentario: <p class='h4comentario-p'> " . $registropregunta3['fecha_comentario'] . "</p></div>
                                                <div class='div-actualizar-imagen'><p>Comentario: <p class='h4comentario-p'> " . $registropregunta3['comentario'] . "</div></p></div>";
                                    if ($registroconsultaid['id_permiso_blog'] == "2") {
                                        ?>
                                        <div class="principal1">
                                            <form method='post' action='eliminar/eliminar3.php'>
                                                <input type='hidden' name='comentario' value='<?php
                                                echo ($registropregunta3['comentario']);
                                                ?>'>
                                                <input type='submit' value='Eliminar' class='boton_entrar'>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ;
                                }
                            }
                            ?>
                        </div>
                        <form class="respuesta" action="inserciones/insertar3.php" method="post" onsubmit="return validarPregunta3()">
                            <label class="label_contestar" for="comentar1">Favor de contestar en esta área: </label>
                            <div class="row">
                                <div class="col-25">
                                    <label class="fname" for="fname">Nombre de usuario:</label>
                                </div>
                                <div class="col-75">
                                    <input class="inputname" id="nombre_usuario3" name="nombre_usuario3" type="text" value="<?php
                                    echo $_SESSION['nombre_usuario'];
                                    ?>" readonly="readonly">
                                </div>
                            </div>
                            <!--imagen en formulario-->
                            <div class="actualizar">
                                <img class="actualizar-imagen" src="/imagenes/imagenes2/<?php
                                echo $ruta_img;
                                ?>" alt="" />
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="imagen1" id="imagen3" name="imagen3" type="text" value="<?php
                                    echo $ruta_img;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="id_usuario1" id="id_usuario3" name="id_usuario3" type="text" value="<?php
                                    echo $_SESSION['id_usuario_blog_adultos'];
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="pregunta1" id="pregunta3" name="pregunta3" type="text" value="<?php
                                    echo $pregunta3;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="datos_trimestre1" id="datos_trimestre3" name="datos_trimestre3" type="text" value="<?php
                                    echo $datosLeccion;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="label_comentario" for="comentario">Ingrese su comentario o respuesta...</label>
                                </div>
                                <div class="col-75">
                                    <textarea class="textarea" id="contenido_comentario3" name="contenido_comentario3" placeholder="Comentario o respuesta." ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input class="boton_entrar" type="submit" value="Contestar 3ra pregunta">
                            </div>
                        </form>
                    </div>
                    <div class="div_pregunta" id="op4" style="display:none;">
                        <!--Pregunta 4-->
                        <h2 class="h2preguntas">Pregunta 4</h2>
                        <h3 class="h3preguntas"><?php
                            echo "4.- Efesios 6:10 afirma que debemos confortarnos en el Señor y en la potencia de su fortaleza. Al enfrentar los momentos difíciles y asechanzas del maligno, ¿Qué respaldo y elementos tenemos para poder triunfar? O ¿Estamos desprotegidos? Comente su respuesta y apóyese de Efesios 6:11-17, considere también Salmos 27:1-3.";
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta4['nombre_citas']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta4['citas']);
                            ?></h3>
                        <div class="comentarios">
                            <?php
                            $respuesta4 = "SELECT * FROM respuestas_4  WHERE pregunta='" . $pregunta4 . "' AND datos_trimestre='" . $datosLeccion . "' ORDER BY fecha_comentario desc";
                            if ($resultadopregunta4 = mysqli_query($conexion, $respuesta4)) {
                                while ($registropregunta4 = mysqli_fetch_assoc($resultadopregunta4)) {
                                    echo "<div class='h4comentario'>
                                                <div class='div-actualizar-imagen'><img class='actualizar-imagen' src='/imagenes/imagenes2/" . $registropregunta4['ruta_imagen'] . "' alt='' /></div>
                                                <div class='div-actualizar-imagen'><p>usuario que realiza comentario: <p class='h4comentario-p'> " . $registropregunta4['nombre_usuario'] . "</p></p></div>
                                                <div class='div-actualizar-imagen'><p>fecha en que se realizó el comentario: <p class='h4comentario-p'> " . $registropregunta4['fecha_comentario'] . "</p></div>
                                                <div class='div-actualizar-imagen'><p>Comentario: <p class='h4comentario-p'> " . $registropregunta4['comentario'] . "</div></p></div>";
                                    if ($registroconsultaid['id_permiso_blog'] == "2") {
                                        ?>
                                        <div class="principal1">
                                            <form method='post' action='eliminar/eliminar4.php'>
                                                <input type='hidden' name='comentario' value='<?php
                                                echo ($registropregunta4['comentario']);
                                                ?>'>
                                                <input type='submit' value='Eliminar' class='boton_entrar'>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ;
                                }
                            }
                            ?>
                        </div>
                        <form class="respuesta" action="inserciones/insertar4.php" method="post" onsubmit="return validarPregunta4()">
                            <label class="label_contestar" for="comentar1">Favor de contestar en esta área: </label>
                            <div class="row">
                                <div class="col-25">
                                    <label class="fname" for="fname">Nombre de usuario:</label>
                                </div>
                                <div class="col-75">
                                    <input class="inputname" id="nombre_usuario4" name="nombre_usuario4" type="text" value="<?php
                                    echo $_SESSION['nombre_usuario'];
                                    ?>" readonly="readonly">
                                </div>
                            </div>
                            <!--imagen en formulario-->
                            <div class="actualizar">
                                <img class="actualizar-imagen" src="/imagenes/imagenes2/<?php
                                echo $ruta_img;
                                ?>" alt="" />
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="imagen1" id="imagen4" name="imagen4" type="text" value="<?php
                                    echo $ruta_img;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="id_usuario1" id="id_usuario4" name="id_usuario4" type="text" value="<?php
                                    echo $_SESSION['id_usuario_blog_adultos'];
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="pregunta1" id="pregunta4" name="pregunta4" type="text" value="<?php
                                    echo $pregunta4;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="datos_trimestre1" id="datos_trimestre4" name="datos_trimestre4" type="text" value="<?php
                                    echo $datosLeccion;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="label_comentario" for="comentario">Ingrese su comentario o respuesta...</label>
                                </div>
                                <div class="col-75">
                                    <textarea class="textarea" id="contenido_comentario4" name="contenido_comentario4" placeholder="Comentario o respuesta." ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input class="boton_entrar" type="submit" value="Contestar 4ta pregunta">
                            </div>
                        </form>
                    </div>
                    <div class="div_pregunta" id="op5" style="display:none;">
                        <!--Pregunta 5-->
                        <h2 class="h2preguntas">Pregunta 5</h2>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta5['pregunta']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta5['nombre_citas']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta5['citas']);
                            ?></h3>
                        <div class="comentarios">
                            <?php
                            $respuesta5 = "SELECT * FROM respuestas_5  WHERE pregunta='" . $pregunta5 . "' AND datos_trimestre='" . $datosLeccion . "' ORDER BY fecha_comentario desc";
                            if ($resultadopregunta5 = mysqli_query($conexion, $respuesta5)) {
                                while ($registropregunta5 = mysqli_fetch_assoc($resultadopregunta5)) {
                                    echo "<div class='h4comentario'>
                                                <div class='div-actualizar-imagen'><img class='actualizar-imagen' src='/imagenes/imagenes2/" . $registropregunta5['ruta_imagen'] . "' alt='' /></div>
                                                <div class='div-actualizar-imagen'><p>usuario que realiza comentario: <p class='h4comentario-p'> " . $registropregunta5['nombre_usuario'] . "</p></p></div>
                                                <div class='div-actualizar-imagen'><p>fecha en que se realizó el comentario: <p class='h4comentario-p'> " . $registropregunta5['fecha_comentario'] . "</p></div>
                                                <div class='div-actualizar-imagen'><p>Comentario: <p class='h4comentario-p'> " . $registropregunta5['comentario'] . "</div></p></div>";
                                    if ($registroconsultaid['id_permiso_blog'] == "2") {
                                        ?>
                                        <div class="principal1">
                                            <form method='post' action='eliminar/eliminar5.php'>
                                                <input type='hidden' name='comentario' value='<?php
                                                echo ($registropregunta5['comentario']);
                                                ?>'>
                                                <input type='submit' value='Eliminar' class='boton_entrar'>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ;
                                }
                            }
                            ?>
                        </div>
                        <form class="respuesta" action="inserciones/insertar5.php" method="post" onsubmit="return validarPregunta5()">
                            <label class="label_contestar" for="comentar1">Favor de contestar en esta área: </label>
                            <div class="row">
                                <div class="col-25">
                                    <label class="fname" for="fname">Nombre de usuario:</label>
                                </div>
                                <div class="col-75">
                                    <input class="inputname" id="nombre_usuario5" name="nombre_usuario5" type="text" value="<?php
                                    echo $_SESSION['nombre_usuario'];
                                    ?>" readonly="readonly">
                                </div>
                            </div>
                            <!--imagen en formulario-->
                            <div class="actualizar">
                                <img class="actualizar-imagen" src="/imagenes/imagenes2/<?php
                                echo $ruta_img;
                                ?>" alt="" />
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="imagen1" id="imagen5" name="imagen5" type="text" value="<?php
                                    echo $ruta_img;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="id_usuario1" id="id_usuario5" name="id_usuario5" type="text" value="<?php
                                    echo $_SESSION['id_usuario_blog_adultos'];
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="pregunta1" id="pregunta5" name="pregunta5" type="text" value="<?php
                                    echo $pregunta5;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="datos_trimestre1" id="datos_trimestre5" name="datos_trimestre5" type="text" value="<?php
                                    echo $datosLeccion;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="label_comentario" for="comentario">Ingrese su comentario o respuesta...</label>
                                </div>
                                <div class="col-75">
                                    <textarea class="textarea" id="contenido_comentario5" name="contenido_comentario5" placeholder="Comentario o respuesta." ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input class="boton_entrar" type="submit" value="Contestar 5ta pregunta">
                            </div>
                        </form>
                    </div>
                    <div class="div_pregunta" id="op6" style="display:none;">
                        <!--Pregunta 6-->
                        <h2 class="h2preguntas">Pregunta 6</h2>
                        <h3 class="h3preguntas"><?php
                            echo "6.- Reflexionemos las siguientes citas: Salmos 46:1-3; Salmos 91:1-7; Salmos 23: 3-4 y considere si estas afirmaciones se podrán cumplir en nosotros, si es así exprese qué necesitamos para que se cumplan estas palabras cuando atravesamos por momentos difíciles y complicados";
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta6['nombre_citas']);
                            ?></h3>
                        <h3 class="h3preguntas"><?php
                            echo ($registropregunta6['citas']);
                            ?></h3>
                        <div class="comentarios">
                            <?php
                            $respuesta6 = "SELECT * FROM respuestas_6  WHERE pregunta='" . $pregunta6 . "' AND datos_trimestre='" . $datosLeccion . "' ORDER BY fecha_comentario desc";
                            if ($resultadopregunta6 = mysqli_query($conexion, $respuesta6)) {
                                while ($registropregunta6 = mysqli_fetch_assoc($resultadopregunta6)) {
                                    echo "<div class='h4comentario'>
                                                <div class='div-actualizar-imagen'><img class='actualizar-imagen' src='/imagenes/imagenes2/" . $registropregunta6['ruta_imagen'] . "' alt='' /></div>
                                                <div class='div-actualizar-imagen'><p>usuario que realiza comentario: <p class='h4comentario-p'> " . $registropregunta6['nombre_usuario'] . "</p></p></div>
                                                <div class='div-actualizar-imagen'><p>fecha en que se realizó el comentario: <p class='h4comentario-p'> " . $registropregunta6['fecha_comentario'] . "</p></div>
                                                <div class='div-actualizar-imagen'><p>Comentario: <p class='h4comentario-p'> " . $registropregunta6['comentario'] . "</div></p></div>";
                                    if ($registroconsultaid['id_permiso_blog'] == "2") {
                                        ?>
                                        <div class="principal1">
                                            <form method='post' action='eliminar/eliminar6.php'>
                                                <input type='hidden' name='comentario' value='<?php
                                                echo ($registropregunta6['comentario']);
                                                ?>'>
                                                <input type='submit' value='Eliminar' class='boton_entrar'>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                    ;
                                }
                            }
                            ?>
                        </div>
                        <form class="respuesta" action="inserciones/insertar6.php" method="post" onsubmit="return validarPregunta6()">
                            <label class="label_contestar" for="comentar1">Favor de contestar en esta área: </label>
                            <div class="row">
                                <div class="col-25">
                                    <label class="fname" for="fname">Nombre de usuario:</label>
                                </div>
                                <div class="col-75">
                                    <input class="inputname" id="nombre_usuario6" name="nombre_usuario6" type="text" value="<?php
                                    echo $_SESSION['nombre_usuario'];
                                    ?>" readonly="readonly">
                                </div>
                            </div>
                            <!--imagen en formulario-->
                            <div class="actualizar">
                                <img class="actualizar-imagen" src="/imagenes/imagenes2/<?php
                                echo $ruta_img;
                                ?>" alt="" />
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="imagen1" id="imagen6" name="imagen6" type="text" value="<?php
                                    echo $ruta_img;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="id_usuario1" id="id_usuario6" name="id_usuario6" type="text" value="<?php
                                    echo $_SESSION['id_usuario_blog_adultos'];
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="pregunta1" id="pregunta6" name="pregunta6" type="text" value="<?php
                                    echo $pregunta6;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-75">
                                    <input class="datos_trimestre1" id="datos_trimestre6" name="datos_trimestre6" type="text" value="<?php
                                    echo $datosLeccion;
                                    ?>" readonly="readonly" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="label_comentario" for="comentario">Ingrese su comentario o respuesta...</label>
                                </div>
                                <div class="col-75">
                                    <textarea class="textarea" id="contenido_comentario6" name="contenido_comentario6" placeholder="Comentario o respuesta." ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input class="boton_entrar" type="submit" value="Contestar 6ta pregunta">
                            </div>
                        </form>
                        </article>
                    </div>
            </div>

            <div class="div_pregunta" id="op7" style="display:none;">
                <div class="sin_pregunta"> Sin pregunta. </div>
            </div>
            <div class="div_pregunta" id="op8" style="display:none;">
                <div class="sin_pregunta"> Sin pregunta. </div>
            </div>

        </section>

        <!--Inicia footer-->
        <footer>
            <div class="columna-footer">
                <ul class="ul-footer">
                    <li><a class="a-footer" href="../../../../../contenidos/acerca-de.html">Acerca de ...</a></li>
                    <li><a class="a-footer" href="../../../../../contenidos/aviso-de-privacidad.html">Aviso de privacidad</a></li>
                </ul>
                <p class="pfooter-1"><a class="link-footer" href="https://miglesiaddios.jimdo.com/" target="_blank">Página hermana de iglesia de Dios Valle Verde (miglesiaddios)</a></p>
                <p class="pfooter">Conferencia general de la iglesia de Dios A.R. S.G.A.R.18/93</p>
            </div>
        </footer>
    </div>
    <!--primerdiv-->
</body>
</html>