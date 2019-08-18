<?php
session_start();
function captcha($numcaracteres = 5)
{
    
    $caracteres = '23456789bcdfghjkmnpqrstvwxyz';
    $codigo     = '';
    $i          = 0;
    while ($i < $numcaracteres) {
        $codigo .= substr($caracteres, mt_rand(0, strlen($caracteres) - 1), 1);
        $i++;
    }
    
    // Iniciamos sesión
    $_SESSION["captcha"] = $codigo;
    
    // Medidas
    $ancho = 200;
    $alto  = 30;
    
    // Creamos nueva imagen
    $imagen = ImageCreate($ancho, $alto);
    
    // Definimos 3 Colores
    $color1 = ImageColorAllocate($imagen, 255, 255, 255); // blanco
    $color2 = ImageColorAllocate($imagen, 0, 0, 0); // negro
    $color3 = ImageColorAllocate($imagen, 255, 0, 0); //rojo
    $color4 = ImageColorAllocate($imagen, 25, 253, 239);// azul acua
    $color5 = ImageColorAllocate($imagen, 28, 99, 253);// azul
    $color6 = ImageColorAllocate($imagen, 211, 253, 28);// verde
    $color7 = ImageColorAllocate($imagen, 253, 125, 28);//
    
    // Color background
    ImageFill($imagen, 0, 0, $color1);
    
    // Color texto
    ImageString($imagen, 5, 50, 5, $codigo, $color2);
    
    // Líneas diagonales
    imageline($imagen, 0, 5, $ancho, 5, $color3);
    imageline($imagen, $ancho / 4, 0, $ancho / 2, $alto, $color4);
    imageline($imagen, 0, 18, $ancho, 18, $color6);
    imageline($imagen, 46, 0, 86, $alto, $color5);
    imageline($imagen, 90, 0, 80, $alto, $color7);
    
    header("Content-Type: image/png");
    
    // Generamos la nueva imágen jpg
    Imagepng($imagen);
    
    // Liberamos recursos
    ImageDestroy($imagen);
}
// Modo de uso
captcha();
?> 