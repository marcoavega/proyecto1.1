<?php
   //realizamos conexion a base de datos con las siguientes variables y datos de las mismas.
       $usuario="id6034323_blog_escuela_sabatica";
       $contrasena="cwrlv3298";
       $servidor="localhost";
       $basededatos="id6034323_blog_escuela_sabatica";
       $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se conecto");
       $db = mysqli_select_db( $conexion, $basededatos ) or die ("Ups error de conexion a base de datos");
       return $conexion;
   ?>
   <?php
   //conexion a base de datos remota de sistema de administracion
   $servidor="localhost";
   $usuario="id6034323_sistema_administracion";
   $contrasena="cwrlv3298";
   $basededatos="id6034323_sistema_administracion";
   $conexion=mysqli_connect($usuario,$contrasena,$servidor,$basededatos) or die ("No se conecto");
   $db=mysqli_select_db($conexion,$basededatos); or die ("Error de conexion");
   return $conexion;
   ?>