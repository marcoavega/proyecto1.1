//funcion validar para evitar injeccion de datos capturando las variables y validandolas
function validarPregunta1() {
    var contenido_comentario = document.getElementById('contenido_comentario').value;
    if (contenido_comentario == null || contenido_comentario.length == 0) {
        alert('ERROR: El campo de respuesta 1 no puede ir vacio');
        return false;
    }
    return true;
}
function validarPregunta2() {
    var contenido_comentario2 = document.getElementById('contenido_comentario2').value;
    if (contenido_comentario2 == null || contenido_comentario2.length == 0) {
        alert('ERROR: El campo de respuesta 2 no puede ir vacio');
        return false;
    }
    return true;
}
function validarPregunta3() {
    var contenido_comentario3 = document.getElementById('contenido_comentario3').value;
    if (contenido_comentario3 == null || contenido_comentario3.length == 0) {
        alert('ERROR: El campo de respuesta 3 no puede ir vacio');
        return false;
    }
    return true;
}
function validarPregunta4() {
    var contenido_comentario4 = document.getElementById('contenido_comentario4').value;
    if (contenido_comentario4 == null || contenido_comentario4.length == 0) {
        alert('ERROR: El campo de respuesta 4 no puede ir vacio');
        return false;
    }
    return true;
}
function validarPregunta5() {
    var contenido_comentario5 = document.getElementById('contenido_comentario5').value;
    if (contenido_comentario5 == null || contenido_comentario5.length == 0) {
        alert('ERROR: El campo de respuesta 5 no puede ir vacio');
        return false;
    }
    return true;
}
function validarPregunta6() {
    var contenido_comentario6 = document.getElementById('contenido_comentario6').value;
    if (contenido_comentario6 == null || contenido_comentario6.length == 0) {
        alert('ERROR: El campo de respuesta 6 no puede ir vacio');
        return false;
    }
    return true;
}
function validarPregunta7() {
    var contenido_comentario7 = document.getElementById('contenido_comentario7').value;
    if (contenido_comentario7 == null || contenido_comentario7.length == 0) {
        alert('ERROR: El campo de respuesta 7 no puede ir vacio');
        return false;
    }
    return true;
}
function validarPregunta8() {
    var contenido_comentario8 = document.getElementById('contenido_comentario8').value;
    if (contenido_comentario8 == null || contenido_comentario8.length == 0) {
        alert('ERROR: El campo de respuesta 8 no puede ir vacio');
        return false;
    }
    return true;
}

function seleccion(opc)
{
    //escondemos todos los contenidos
    document.getElementById("op1").style.display = "none";
    document.getElementById("op2").style.display = "none";
    document.getElementById("op3").style.display = "none";
    document.getElementById("op4").style.display = "none";
    document.getElementById("op5").style.display = "none";
    document.getElementById("op6").style.display = "none";
    document.getElementById("op7").style.display = "none";
    document.getElementById("op8").style.display = "none";
    document.getElementById("op9").style.display = "none";
    document.getElementById("op10").style.display = "none";
    document.getElementById("op11").style.display = "none";
    switch (opc)
    {
        case 1:
            //mostramos elcontenido de la primera opcion
            document.getElementById("op1").style.display = "block";
            break;
        case 2:
            //mostramos elcontenido de la segunda opcion
            document.getElementById("op2").style.display = "block";
            break;
        case 3:
            //mostramos elcontenido de la tercera opcion
            document.getElementById("op3").style.display = "block";
            break;
        case 4:
            //mostramos elcontenido de la tercera opcion
            document.getElementById("op4").style.display = "block";
            break;
        case 5:
            //mostramos elcontenido de la tercera opcion
            document.getElementById("op5").style.display = "block";
            break;
        case 6:
            //mostramos elcontenido de la tercera opcion
            document.getElementById("op6").style.display = "block";
            break;
        case 7:
            //mostramos elcontenido de la tercera opcion
            document.getElementById("op7").style.display = "block";
            break;
        case 8:
            //mostramos elcontenido de la tercera opcion
            document.getElementById("op8").style.display = "block";
            break;
            case 9:
            //mostramos elcontenido de la primera opcion
            document.getElementById("op9").style.display = "block";
            break;
        case 10:
            //mostramos elcontenido de la segunda opcion
            document.getElementById("op10").style.display = "block";
            break;
        case 11:
            //mostramos elcontenido de la tercera opcion
            document.getElementById("op11").style.display = "block";
            break;
    }
}