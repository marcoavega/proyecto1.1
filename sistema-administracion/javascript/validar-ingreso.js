function validarIngreso() {
    //captura de variables
    var txtNombre = document.getElementById('usuario').value;
    var txtcant = document.getElementById('cantidad').value;
    var txtdesc = document.getElementById('descripcion').value;
    var txttipo = document.getElementById('tipo').value;
    var txtnum = document.getElementById('numero').value;
    var txtid = document.getElementById('id').value;
    //Campos obligatorio
    if(txtNombre == null || txtNombre.length == 0) {
       alert('ERROR: El campo nombre no debe ir vacío ni lleno de solamente espacios en blanco');
       return false;
       }else{
    if(txtcant == null || txtcant.length == 0 || isNaN(txtcant) || (txtcant < 0 )) {
       alert('ERROR: Debe ingresar una cantidad y deben ser valor numérico positivo');
       return false;
       }else{
    if(txtdesc == null || txtdesc.length == 0) {
       alert('Agregue una descripción');
       return false;
       }else{
    if(txttipo == null || txttipo.length == 0) {
       alert('Agregue un tipo de comprobante');
       return false;
       }else{
    if(txtnum == null || txtnum.length == 0) {
       alert('Agregue un número de comprobante');
       return false;
       }else{
       if(txtid == null || txtid.length == 0 || isNaN(txtid) || (txtid < 0 )) {
         alert('ERROR: Debe ingresar una cantidad y debe ser valor numérico positivo');
         return false;
         }else{
            if (confirm('¿Está seguro de enviar los datos de ingreso?')){
               document.validar.submit();
               return true;
            }
            return false;

   }
   }
   }
   }
   }
   }

   }