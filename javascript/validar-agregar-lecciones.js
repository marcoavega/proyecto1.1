function validarLecciones() {
    //captura de variables
    var titulo = document.getElementById('titulo').value;
    //Campos obligatorio
    if(titulo == null || titulo.length == 0 ) {
       alert('ERROR: El campo titulo no debe ir vacío o lleno de solamente espacios en blanco');
       return false;
       }
    return true;
    }