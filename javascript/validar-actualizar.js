function validarActualizar() {
    //se hace la validacion del formulario de actualizar datos
    var usuarioanterior = document.getElementById('usuarioanterior').value;
    var usuarionuevo = document.getElementById('usuarionuevo').value;
    var contrasenanueva = document.getElementById('contrasenanueva').value;
    var contrasenanueva2 = document.getElementById('contrasenanueva2').value;
    if(usuarioanterior == null || usuarioanterior.length == 0) {
       alert('ERROR: El campo usuario actual no debe ir vacío');
       return false;
       }else{
    if(usuarionuevo == null || usuarionuevo.length == 0 ) {
       alert('ERROR: El campo usuario nuevo no debe ir vacío');
       return false;
       }else{
    if(contrasenanueva == null || contrasenanueva.length == 0 ) {
       alert('ERROR: Debe ingresar una contraseña nueva');
       return false;
       }else{
       if(contrasenanueva2 == null || contrasenanueva2.length == 0 ) {
         alert('ERROR: Debe confirmar la contraseña nueva');
         return false;
         }else{
            if (confirm('¿Está seguro de enviar los datos que ingreso?')){
               document.validar.submit();
               return true;
            }
            return false;

   }
   }
   }
       }

       

}
function ValidateSize(file) {
   var FileSize = file.files[0].size / 1024 / 1024; 
   if (FileSize > 2) {
       alert('El archivo no debe ser mayor a 2 MB');
       return false;
   }else{
      alert('Presione: subir imagen');
      return;
   }
}
