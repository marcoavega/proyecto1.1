<?php
require("login-blog-adultos-validacion.php");
?>
<!--inicia documento html5-->
<!DOCTYPE html>
<!--selecionamos idioma español-->
<html lang="es-MX">
    <head>
        <!--Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133283536-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133283536-1');
        </script>
        <!--inicia encabezado de página con los meta necesarios y link de hoja de estilos-->
        <meta charset="UTF-8">
        <title>Conferencia general de la iglesia de Dios Valle Verde</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="Conferencia general de la iglesia de dios valle verde, escuela sabática">
        <meta name="author" content="iddios.ga">
        <meta name="owner" content="Conferencia general de la iglesia de dios valle verde">
        <meta name="robots" content="index, follow">
        <meta name="description" content="Conferencia general de la iglesia de dios localidad de valle verde Ixtapaluca, página principal con el fin de evangelizar y difundir estudios bíblicos.">
        <link rel="stylesheet" href="css/estilos-pagina-principal.css">
        <script src="javascript/principal-blog.js"></script>
    </head>
    <!--body-->
    <body>
        <div class="contenedor-filas-columnas">
            <header>
                <nav>
                    <div class="nav-header">
                        <div class="div-imagen-header">
                            <img class="imagen-header" src="imagenes/logo_iglesia_de_dios_valle_verde.png" alt="iglesia-de-dios-valle-verde-escuela-sabatica">
                        </div>
                        <div class="div-h1-header">
                            <h1 class="h1-header">Conferencia general de la iglesia de Dios Valle Verde</h1>
                        </div>
                    </div>
                    <div class="div-form">
                        <a class="h1-form">Ingresar a foro de escuela sabática: </a>
                        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validarlogin()">
                            <input id="nombre" type="text" name="nombre" placeholder="Nombre de usuario" class="input-nombre">
                            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" class="input-contrasena">
                            <input type="text" id="captcha" name="captcha" placeholder="Ingrese código captcha en minúsculas" class="input-captcha">
                            <input type="text" id="captcha" name="" placeholder="Ingrese código captcha en minúsculas" class="input-captcha-oculto">
                            <div class="div-imagen-captcha">
                                <img src="blog-escuela-sabatica/escuela-adultos/captcha_script.php" class="imagen-captcha">
                            </div>
                            <button class="boton-form boton" type="submit">Entrar</button>
                            <div class="div-error-form">
                                <span class="error-form"><?php echo $usuarioErr; ?></span>
                                <span class="error-form"><?php echo $usuarioErr2; ?></span>
                                <span class="error-form"><?php echo $contrasenaErr; ?></span>
                                <span class="error-form"><?php echo $contrasenaErr2; ?></span>
                                <span class="error-form"> <?php echo $captchaErr; ?></span>
                                <span class="error-form"> <?php echo $captchaErr2; ?></span>
                                <span class="error-form"> <?php echo $captchaErr3; ?></span>
                            </div>
                            <h3 class="h3-registro">Si no está registrado(a): <a class="a-registro" href="blog-escuela-sabatica/escuela-adultos/registro-blog.php">Registrarse</a></h3>
                        </form>
                    </div>
                </nav>
                <!--div del slider-->
                <div class="div-slider">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="imagenes/congregacion_iglesia_de_dios_valle_verde.jpg" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="imagenes/reunion-ninos-2_1.jpg" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="imagenes/slide5_1.png" style="width:100%">
                            <div class="text">Caption Three</div>
                        </div>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div> 
                </div>
            </header>
            <!--section-->
            <section class="section-main">
                <h2 class="h2-avisos">Avisos</h2>
                <div class="div-tarjetas">
                    <div class="tarjeta">
                        <div class="div-imagen-tarjeta">
                            <img class="imagen-tarjeta" src="imagenes/rio3.jpg" alt="Card image cap">
                        </div>
                        <div class="texto-tarjeta">
                            <h3 class="h3-tarjeta">Próximos eventos de conferencia general de la iglesia de Dios</h3>
                        </div>
                        <div class="div-boton-tarjeta">
                            <a href="contenidos/eventos.html" class=""><button class="boton-tarjeta botontarjeta" type="button">Más información</button></a>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="div-imagen-tarjeta">
                            <img class="imagen-tarjeta" src="imagenes/slide5_1.png" alt="Card image cap">
                        </div>
                        <div class="texto-tarjeta">
                            <h3 class="h3-tarjeta">Manual de usuario.</h3>
                        </div>
                        <div class="div-boton-tarjeta">
                            <a href="contenidos/manual.html" class=""><button class="boton-tarjeta botontarjeta" type="button">Más información</button></a>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="div-imagen-tarjeta">
                            <img class="imagen-tarjeta" src="imagenes/reunion-ninos-2_1.jpg" alt="Card image cap">
                        </div>
                        <div class="texto-tarjeta">
                            <h3 class="h3-tarjeta">Manual de usuario.</h3>
                        </div>
                        <div class="div-boton-tarjeta">
                            <a href="contenidos/reunion-ninos.html" class=""><button class="boton-tarjeta botontarjeta" type="button">Más información</button></a>
                        </div>
                    </div>
                </div>
            </section>
            <!--aside-->
            <aside class="seccion-videos">
                <!--div´s con video en iframe-->
                <h2 class="h2-avisos">Vídeos de himnos de conferencia general de la iglesia de dios</h2>
                <div class="div-tarjetas">
                    <div class="tarjeta-video">
                        <div class="div-iframe">
                            <iframe class="iframe" src="https://www.youtube.com/embed/0HHSVEX6D9w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="texto-tarjeta">
                            <h3 class="h3-tarjeta">Himno: El sacrificio sin igual.</h3>
                        </div>
                        <div class="div-boton-tarjeta">
                            <a href="https://www.youtube.com/channel/UC9pPeUZGPt5dEkartiCLufg" target="_blank" class=""><button class="boton-tarjeta botontarjeta" type="button">Ver más</button></a>
                        </div>
                    </div>
                    <div class="tarjeta-video">
                        <div class="div-iframe">
                            <iframe class="iframe" src="https://www.youtube.com/embed/Q1OViEcN4AI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="texto-tarjeta">
                            <h3 class="h3-tarjeta">Himno: El volvera.</h3>
                        </div>
                        <div class="div-boton-tarjeta">
                            <a href="https://www.youtube.com/channel/UC9pPeUZGPt5dEkartiCLufg" target="_blank" class=""><button class="boton-tarjeta botontarjeta" type="button">Ver más</button></a>
                        </div>
                    </div>
                    <div class="tarjeta-video">
                        <div class="div-iframe">
                            <iframe class="iframe" src="https://www.youtube.com/embed/jrWcfCDhJGU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="texto-tarjeta">
                            <h3 class="h3-tarjeta">Iglesia de Dios en Valle Verde, La gran Jerusalem.</h3>
                        </div>
                        <div class="div-boton-tarjeta">
                            <a href="https://www.youtube.com/channel/UClS0Dl_0t8aatA3VhEOUyNw" target="_blank" class=""><button class="boton-tarjeta botontarjeta" type="button">Ver más</button></a>
                        </div>
                    </div>
                    <div class="tarjeta-video">
                        <div class="div-iframe">
                            <iframe class="iframe" src="https://www.youtube.com/embed/80suDGzGlJA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="texto-tarjeta">
                            <h3 class="h3-tarjeta">Iglesia de Dios en Valle Verde, Gratas bendiciones.</h3>
                        </div>
                        <div class="div-boton-tarjeta">
                            <a href="https://www.youtube.com/channel/UClS0Dl_0t8aatA3VhEOUyNw" target="_blank" class=""><button class="boton-tarjeta botontarjeta" type="button">Ver más</button></a>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="div-mapa">
                <div class="iframe-mapa">
                    <iframe class="mapa-google" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15061.365518732944!2d-98.9122247!3d19.3109873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdceb5ceebbfe9497!2sConferencia+General+De+La+iglesia+De+Dios!5e0!3m2!1ses-419!2smx!4v1547011314037"></iframe>
                </div>
                <div class="direccion">
                    <h3 class="h3-tarjeta">Dirección de la Iglesia de Dios valle verde</h3>
                    <address>
                        <p class="">Dirección de la Iglesia, Conferencia General de la Iglesia de Dios: Calle Oyamel número
                            12 colonia Valle Verde Ixtapaluca, Estado de México.
                            Conferencia general de la iglesia de Dios A.R.
                            S.G.A.R.18/93
                        </p>
                    </address>
                </div>
            </div>
            <footer class="">
                <div class="div-footer">
                    <div class="div-footer-1">
                        <li><a class="" href="contenidos/acerca-de.html" target="_blank"><h4 class="h4-footer">Acerca de ...</h4></a></li>
                    </div>
                    <div class="div-footer-2">
                        <li><a class="" href="contenidos/aviso-de-privacidad.html" target="_blank"><h4 class="h4-footer">Aviso de privacidad</h4></a></li>
                    </div>
                    <div class="">
                        <li><a class="div-footer-3" href="https://miglesiaddios.jimdo.com/" target="_blank"><h4 class="h4-footer">Página hermana de iglesia de Dios Valle Verde (miglesiaddios)</h4></a></li>
                    </div>
                    <div class="div-footer-4">
                        <div class="h4-footer"><h3>Conferencia general de la iglesia de Dios A.R. S.G.A.R.18/93</h3></div>
                    </div>
                </div>
            </footer>
        </div><!--div de contenedor-filas-columnas-->
        <script src="javascript/principal-blog.js"></script>
    </body>
</html>