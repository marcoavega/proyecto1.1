<?php
/*
//local
$principal_blog="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/principal-blog.php";
$lecciones="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/lecciones.php";
$datos_usuario="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/datos-usuario.php";
$bitacora="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/bitacora.php";
$agregar_entrada="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-entrada.php";
$agregar_trimestre="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-trimestre.php";
$agregar_leccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-lecciones.php";
$agregar_datos_lecciones="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-datos-lecciones.php";
$escuelas_trimestres="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/escuelas-trimestres.php";
$primertrimestre_primerleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/leccion1.php";
$primertrimestre_segundaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/leccion2.php";
$primertrimestre_terceraleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/leccion3.php";
$primertrimestre_cuartaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/leccion4.php";
$primertrimestre_quintaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/leccion5.php";
$primertrimestre_sextaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/leccion6.php";
$primertrimestre_septimaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/leccion7.php";
$primertrimestre_octavaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/leccion8.php";
$primertrimestre_novenaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/leccion9.php";
$primertrimestre_decimaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/leccion10.php";
$primertrimestre_onceavaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/leccion11.php";
$primertrimestre_doceavaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/leccion12.php";
$primertrimestre_treceavaleccion="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/leccion13.php";
$login_blog="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/login-blog-adultos.php";
$buscardor="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/buscador.php";
//lecciones 1er trimestre
//leccion 1
$insertar1_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar1.php";
$insertar1_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar2.php";
$insertar1_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar3.php";
$insertar1_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar4.php";
$insertar1_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar5.php";
$insertar1_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar6.php";
//leccion 2
$insertar2_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar1.php";
$insertar2_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar2.php";
$insertar2_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar3.php";
$insertar2_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar4.php";
$insertar2_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar5.php";
$insertar2_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar6.php";
//leccion 3
$insertar3_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar1.php";
$insertar3_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar2.php";
$insertar3_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar3.php";
$insertar3_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar4.php";
$insertar3_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar5.php";
$insertar3_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar6.php";
//leccion 4
$insertar4_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar1.php";
$insertar4_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar2.php";
$insertar4_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar3.php";
$insertar4_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar4.php";
$insertar4_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar5.php";
$insertar4_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar6.php";
//leccion 5
$insertar5_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar1.php";
$insertar5_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar2.php";
$insertar5_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar3.php";
$insertar5_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar4.php";
$insertar5_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar5.php";
$insertar5_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar6.php";
//leccion 6
$insertar6_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar1.php";
$insertar6_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar2.php";
$insertar6_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar3.php";
$insertar6_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar4.php";
$insertar6_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar5.php";
$insertar6_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar6.php";
$insertar6_7="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar7.php";
//leccion 7
$insertar7_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar1.php";
$insertar7_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar2.php";
$insertar7_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar3.php";
$insertar7_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar4.php";
$insertar7_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar5.php";
$insertar7_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar6.php";
//leccion 8
$insertar8_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar1.php";
$insertar8_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar2.php";
$insertar8_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar3.php";
$insertar8_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar4.php";
$insertar8_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar5.php";
$insertar8_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar6.php";
$insertar8_7="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar7.php";
//leccion 9
$insertar9_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar1.php";
$insertar9_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar2.php";
$insertar9_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar3.php";
$insertar9_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar4.php";
$insertar9_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar5.php";
$insertar9_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar6.php";
$insertar9_7="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar7.php";
//leccion 10
$insertar10_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar1.php";
$insertar10_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar2.php";
$insertar10_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar3.php";
$insertar10_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar4.php";
$insertar10_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar5.php";
$insertar10_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar6.php";
$insertar10_7="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar7.php";
//leccion 11
$insertar11_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar1.php";
$insertar11_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar2.php";
$insertar11_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar3.php";
$insertar11_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar4.php";
$insertar11_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar5.php";
$insertar11_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar6.php";
//leccion 12
$insertar12_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar1.php";
$insertar12_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar2.php";
$insertar12_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar3.php";
$insertar12_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar4.php";
$insertar12_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar5.php";
$insertar12_6="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar6.php";
//leccion 13
$insertar13_1="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar1.php";
$insertar13_2="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar2.php";
$insertar13_3="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar3.php";
$insertar13_4="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar4.php";
$insertar13_5="http://localhost/iglesia/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar5.php";

//servidor en línea https://www.iddios.ga/
$principal_blog="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/principal-blog.php";
$lecciones="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/lecciones.php";
$datos_usuario="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/datos-usuario.php";
$bitacora="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/bitacora.php";
$agregar_entrada="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-entrada.php";
$agregar_trimestre="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-trimestre.php";
$agregar_leccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-lecciones.php";
$agregar_datos_lecciones="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/agregar-lecciones/agregar-datos-lecciones.php";
$escuelas_trimestres="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/escuelas-trimestres.php";
$primertrimestre_primerleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/leccion1.php";
$primertrimestre_segundaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/leccion2.php";
$primertrimestre_terceraleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/leccion3.php";
$primertrimestre_cuartaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/leccion4.php";
$primertrimestre_quintaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/leccion5.php";
$primertrimestre_sextaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/leccion6.php";
$primertrimestre_septimaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/leccion7.php";
$primertrimestre_octavaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/leccion8.php";
$primertrimestre_novenaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/leccion9.php";
$primertrimestre_decimaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/leccion10.php";
$primertrimestre_onceavaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/leccion11.php";
$primertrimestre_doceavaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/leccion12.php";
$primertrimestre_treceavaleccion="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/leccion13.php";
$login_blog="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/login-blog-adultos.php";
$buscardor="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/buscador.php";
//lecciones que salen con el buscador
$buscador_leccion1_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/leccion1.php?titulo_lecciones_adultos=LECCI%C3%93N%201.%20DECIDID%20HOY%20A%20QUIEN%20SEGUIR";
$buscador_leccion2_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/leccion2.php?titulo_lecciones_adultos=LECCI%C3%93N%202.%20LUCHANDO%20SIN%20RETORNO";
$buscador_leccion3_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/leccion3.php?titulo_lecciones_adultos=LECCI%C3%93N%203.%20AGUAS%20DULCES,%20AGUAS%20AMARGAS";
$buscador_leccion4_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/leccion4.php?titulo_lecciones_adultos=LECCI%C3%93N%204.%20ESP%C3%8DRITU%20SIN%20MEDIDA";
$buscador_leccion5_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/leccion5.php?titulo_lecciones_adultos=LECCI%C3%93N%205.%20LA%20LUZ%20DEL%20EVANGELIO";
$buscador_leccion6_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/leccion6.php?titulo_lecciones_adultos=LECCI%C3%93N%206.%20El%20QUE%20PERSISTE";
$buscador_leccion7_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/leccion7.php?titulo_lecciones_adultos=LECCI%C3%93N%207.%20%C2%BFQUI%C3%89N%20PODR%C3%81%20SER%20SALVO?";
$buscador_leccion8_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/leccion8.php?titulo_lecciones_adultos=LECCI%C3%93N%208.%20EN%20CONTACTO%20CON%20DIOS";
$buscador_leccion9_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/leccion9.php?titulo_lecciones_adultos=LECCI%C3%93N%209.%20EL%20AMOR%20DE%20DIOS%20ES%20ETERNO";
$buscador_leccion10_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/leccion10.php?titulo_lecciones_adultos=LECCI%C3%93N%2010.%20%C2%BFQUIEN%20SE%20HA%20DE%20PURIFICAR?";
$buscador_leccion11_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/leccion11.php?titulo_lecciones_adultos=LECCI%C3%93N%2011.%20APARTADO%20DESDE%20ANTES%20DE%20LA%20FUNDACION%20DEL%20MUNDO";
$buscador_leccion12_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/leccion12.php?titulo_lecciones_adultos=LECCI%C3%93N%2012.%20JES%C3%9AS:%20EL%20CUMPLIMIENTO%20DE%20LA%20ESPERANZA";
$buscador_leccion13_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/leccion13.php?titulo_lecciones_adultos=LECCI%C3%93N%2013.%20EL%20NACIMIENTO%20DE%20UN%20HIJO%20DE%20DIOS";

$buscador_leccion1_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion1/leccion1.php?titulo_lecciones_adultos=LECCI%C3%93N%201%20ENTENDIMIENTO%20O%20NECEDAD";
$buscador_leccion2_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion2/leccion2.php?titulo_lecciones_adultos=LECCI%C3%93N%202%20BONDAD%20O%20MALDAD";
$buscador_leccion3_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion3/leccion3.php?titulo_lecciones_adultos=LECCI%C3%93N%203%20DISCIPLINA%20O%20LIBERTINAJE";
$buscador_leccion4_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion4/leccion4.php?titulo_lecciones_adultos=LECCI%C3%93N%204%20HUMILDAD%20O%20ALTIVEZ";
$buscador_leccion5_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion5/leccion5.php?titulo_lecciones_adultos=LECCI%C3%93N%205%20AMOR%20U%20ODIO";
$buscador_leccion6_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion6/leccion6.php?titulo_lecciones_adultos=LECCI%C3%93N%206%20UNIDAD%20O%20SEPARACI%C3%93N";
$buscador_leccion7_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion7/leccion7.php?titulo_lecciones_adultos=LECCI%C3%93N%207%20MISERICORDIA%20O%20DUREZA";
$buscador_leccion8_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion8/leccion8.php?titulo_lecciones_adultos=LECCI%C3%93N%208%20GENEROSIDAD%20O%20AVARICIA";
$buscador_leccion9_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion9/leccion9.php?titulo_lecciones_adultos=LECCI%C3%93N%209%20JUSTICIA%20O%20INJUSTICIA";
$buscador_leccion10_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion10/leccion10.php?titulo_lecciones_adultos=LECCI%C3%93N%2010%20VERDAD%20O%20MENTIRA";
$buscador_leccion11_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion11/leccion11.php?titulo_lecciones_adultos=LECCI%C3%93N%2011%20FE%20O%20INCREDULIDAD";
$buscador_leccion12_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion12/leccion12.php?titulo_lecciones_adultos=LECCI%C3%93N%2012%20ESPIRITUALIDAD%20O%20CARNALIDAD";
$buscador_leccion13_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/2do-trimestre-2019/leccion13/leccion13.php?titulo_lecciones_adultos=LECCI%C3%93N%2013%20FORTALEZA%20O%20DEBILIDAD";

//lecciones 1er trimestre
//leccion 1
$insertar1_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar1.php";
$insertar1_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar2.php";
$insertar1_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar3.php";
$insertar1_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar4.php";
$insertar1_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar5.php";
$insertar1_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion1/inserciones/insertar6.php";
//leccion 2
$insertar2_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar1.php";
$insertar2_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar2.php";
$insertar2_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar3.php";
$insertar2_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar4.php";
$insertar2_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar5.php";
$insertar2_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion2/inserciones/insertar6.php";
//leccion 3
$insertar3_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar1.php";
$insertar3_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar2.php";
$insertar3_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar3.php";
$insertar3_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar4.php";
$insertar3_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar5.php";
$insertar3_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion3/inserciones/insertar6.php";
//leccion 4
$insertar4_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar1.php";
$insertar4_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar2.php";
$insertar4_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar3.php";
$insertar4_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar4.php";
$insertar4_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar5.php";
$insertar4_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion4/inserciones/insertar6.php";
//leccion 5
$insertar5_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar1.php";
$insertar5_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar2.php";
$insertar5_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar3.php";
$insertar5_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar4.php";
$insertar5_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar5.php";
$insertar5_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion5/inserciones/insertar6.php";
//leccion 6
$insertar6_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar1.php";
$insertar6_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar2.php";
$insertar6_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar3.php";
$insertar6_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar4.php";
$insertar6_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar5.php";
$insertar6_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar6.php";
$insertar6_7="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion6/inserciones/insertar7.php";
//leccion 7
$insertar7_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar1.php";
$insertar7_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar2.php";
$insertar7_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar3.php";
$insertar7_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar4.php";
$insertar7_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar5.php";
$insertar7_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion7/inserciones/insertar6.php";
//leccion 8
$insertar8_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar1.php";
$insertar8_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar2.php";
$insertar8_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar3.php";
$insertar8_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar4.php";
$insertar8_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar5.php";
$insertar8_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar6.php";
$insertar8_7="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion8/inserciones/insertar7.php";
//leccion 9
$insertar9_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar1.php";
$insertar9_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar2.php";
$insertar9_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar3.php";
$insertar9_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar4.php";
$insertar9_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar5.php";
$insertar9_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar6.php";
$insertar9_7="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion9/inserciones/insertar7.php";
//leccion 10
$insertar10_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar1.php";
$insertar10_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar2.php";
$insertar10_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar3.php";
$insertar10_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar4.php";
$insertar10_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar5.php";
$insertar10_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar6.php";
$insertar10_7="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion10/inserciones/insertar7.php";
//leccion 11
$insertar11_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar1.php";
$insertar11_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar2.php";
$insertar11_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar3.php";
$insertar11_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar4.php";
$insertar11_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar5.php";
$insertar11_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion11/inserciones/insertar6.php";
//leccion 12
$insertar12_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar1.php";
$insertar12_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar2.php";
$insertar12_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar3.php";
$insertar12_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar4.php";
$insertar12_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar5.php";
$insertar12_6="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion12/inserciones/insertar6.php";
//leccion 13
$insertar13_1="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar1.php";
$insertar13_2="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar2.php";
$insertar13_3="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar3.php";
$insertar13_4="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar4.php";
$insertar13_5="https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/trimestres/1er-trimestre-2019/leccion13/inserciones/insertar5.php";


$referrer = $_SERVER['HTTP_REFERER'];
if ($referrer != $principal_blog && $referrer != $lecciones && $referrer != $datos_usuario && $referrer != $bitacora && $referrer != $agregar_entrada && $referrer != $agregar_trimestre && $referrer != $agregar_leccion && $referrer != $agregar_datos_lecciones && $referrer != $escuelas_trimestres && $referrer != $primertrimestre_primerleccion && $referrer != $primertrimestre_segundaleccion && $referrer != $primertrimestre_terceraleccion && $referrer != $primertrimestre_cuartaleccion && $referrer != $primertrimestre_quintaleccion && $referrer != $primertrimestre_sextaleccion && $referrer != $primertrimestre_septimaleccion && $referrer != $primertrimestre_octavaleccion && $referrer != $primertrimestre_novenaleccion && $referrer != $primertrimestre_decimaleccion && $referrer != $primertrimestre_onceavaleccion && $referrer != $primertrimestre_doceavaleccion && $referrer != $primertrimestre_treceavaleccion && $referrer != $login_blog && $referrer != $buscardor && $referrer != $insertar1_1 && $referrer != $insertar1_2 && $referrer != $insertar1_3 && $referrer != $insertar1_4 && $referrer != $insertar1_5 && $referrer != $insertar1_6 && $referrer != $insertar2_1 && $referrer != $insertar2_2 && $referrer != $insertar2_3 && $referrer != $insertar2_4 && $referrer != $insertar2_5 && $referrer != $insertar2_6 && $referrer != $insertar3_1 && $referrer != $insertar3_2 && $referrer != $insertar3_3 && $referrer != $insertar3_4 && $referrer != $insertar3_5 && $referrer != $insertar3_6 && $referrer != $insertar4_1 && $referrer != $insertar4_2 && $referrer != $insertar4_3 && $referrer != $insertar4_4 && $referrer != $insertar4_5 && $referrer != $insertar4_6 && $referrer != $insertar5_1 && $referrer != $insertar5_2 && $referrer != $insertar5_3 && $referrer != $insertar5_4 && $referrer != $insertar5_5 && $referrer != $insertar5_6&& $referrer != $insertar6_1 && $referrer != $insertar6_2 && $referrer != $insertar6_3 && $referrer != $insertar6_4 && $referrer != $insertar6_5 && $referrer != $insertar6_6 && $referrer != $insertar6_7 && $referrer != $insertar7_1 && $referrer != $insertar7_2 && $referrer != $insertar7_3 && $referrer != $insertar7_4 && $referrer != $insertar7_5 && $referrer != $insertar7_6 && $referrer != $insertar8_1 && $referrer != $insertar8_2 && $referrer != $insertar8_3 && $referrer != $insertar8_4 && $referrer != $insertar8_5 && $referrer != $insertar8_6 && $referrer != $insertar8_7 && $referrer != $insertar9_1 && $referrer != $insertar9_2 && $referrer != $insertar9_3 && $referrer != $insertar9_4 && $referrer != $insertar9_5 && $referrer != $insertar9_6 && $referrer != $insertar9_7 && $referrer != $insertar10_1 && $referrer != $insertar10_2 && $referrer != $insertar10_3 && $referrer != $insertar10_4 && $referrer != $insertar10_5 && $referrer != $insertar10_6 && $referrer != $insertar10_7 && $referrer != $insertar11_1 && $referrer != $insertar11_2 && $referrer != $insertar11_3 && $referrer != $insertar11_4 && $referrer != $insertar11_5 && $referrer != $insertar11_6 && $referrer != $insertar12_1 && $referrer != $insertar12_2 && $referrer != $insertar12_3 && $referrer != $insertar12_4 && $referrer != $insertar12_5 && $referrer != $insertar11_6 && $referrer != $insertar12_1 && $referrer != $insertar12_2 && $referrer != $insertar12_3 && $referrer != $insertar12_4 && $referrer != $insertar12_5 && $referrer != $insertar12_6 && $referrer != $insertar13_1 && $referrer != $insertar13_2 && $referrer != $insertar13_3 && $referrer != $insertar13_4 && $referrer != $insertar13_5 && $referrer != $buscador_leccion1_2 && $referrer != $buscador_leccion2_2 && $referrer != $buscador_leccion3_2 && $referrer != $buscador_leccion4_2 && $referrer != $buscador_leccion5_2 && $referrer != $buscador_leccion6_2 && $referrer != $buscador_leccion7_2 && $referrer != $buscador_leccion8_2 && $referrer != $buscador_leccion9_2 && $referrer != $buscador_leccion10_2 && $referrer != $buscador_leccion11_2 && $referrer != $buscador_leccion12_2 && $referrer != $buscador_leccion13_2 && $referrer != $buscador_leccion1_1 && $referrer != $buscador_leccion2_1 && $referrer != $buscador_leccion3_1 && $referrer != $buscador_leccion4_1 && $referrer != $buscador_leccion5_1 && $referrer != $buscador_leccion6_1 && $referrer != $buscador_leccion7_1 && $referrer != $buscador_leccion8_1 && $referrer != $buscador_leccion9_1 && $referrer != $buscador_leccion10_1 && $referrer != $buscador_leccion11_1 && $referrer != $buscador_leccion12_1 && $referrer != $buscador_leccion13_1){
    header('Location: https://www.iddios.ga/blog-escuela-sabatica/escuela-adultos/cerrar-sesion.php');
}
*/
?>

