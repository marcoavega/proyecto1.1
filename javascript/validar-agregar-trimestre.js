function validarAgregar() {
   //captura de variables
   var datos = document.getElementById('datos_trimestre').value;
   var titulo = document.getElementById('titulo').value;
   
   //Campos obligatorio
   if(datos == null || datos.length == 0 ) {
      alert('ERROR: El campo datos no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
      }
   if(titulo == null || titulo.length == 0 ) {
      alert('ERROR: El campo titulo no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
      }
   return true;
   }