function validarEntradaSalida() {
    //captura de variables
    var txtCantidad = document.getElementById('cantidad').value;
    //Campos obligatorio
    if(txtCantidad == null || txtCantidad.length == 0 || isNaN(txtCantidad) || (txtCantidad < 0 )) {
       alert('ERROR: El campo cantidad no debe ir vacío y deben ser números positivos');
       return false;
       }
    return true;
    }