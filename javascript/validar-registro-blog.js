//funcion validar las variables y validandolas
function validar() {
   var nombre = document.getElementById('nombre').value;
   var usuario = document.getElementById('usuario').value;
   var contrasena = document.getElementById('contrasena').value;
   var contrasena2 = document.getElementById('contrasena2').value;
   var captcha = document.getElementById('captcha').value;
   if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) || nombre.length > 30 ) {
     alert('ERROR: El nombre no debe ir vacío, con numeros ni mayor a 30 caracteres');
     return false;
     }
        if (usuario == null || usuario.length == 0 || /^\s+$/.test(usuario) || usuario.length > 30 ) {
           alert('ERROR: El usuario no debe ir vacío, con numeros ni mayor a 30 caracteres');
           return false;
           }
     if (contrasena == null || contrasena.length == 0 || /^\s+$/.test(usuario) || usuario.length > 30 ) {
        alert('ERROR: Debe ingresar una contraseña');
        return false;
        }
        if (contrasena2 == null || contrasena2.length == 0 || /^\s+$/.test(usuario) || usuario.length > 30 ) {
           alert('ERROR: Debe confirmar la contraseña');
           return false;
           }
        if (captcha == null || captcha.length == 0 || /^\s+$/.test(usuario) || usuario.length > 30 ) {
          alert('ERROR: Debe ingresar el codigo captcha');
          return false;
          }
     return true;
}