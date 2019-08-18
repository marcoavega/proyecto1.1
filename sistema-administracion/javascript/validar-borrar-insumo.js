function validarBorrar(){
    var txtId = document.getElementById('id_detalle_entrada_insumos').value;
    if(txtId == null || txtId.length == 0 || isNaN(txtId) || (txtId < 0 )) {
        alert('ERROR: Debe seleccionar un registro valido con id valido.');
        return false;
        }else{
           if (confirm('¿Está seguro de que desea borrar el registro seleccionado?')){
              document.validar.submit();
              return true;
           }
           return false;
}
}