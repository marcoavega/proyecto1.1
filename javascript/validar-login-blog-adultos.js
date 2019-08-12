//funcion validar para evitar injeccion de datos capturando las variables y validandolas
function validarlogin() {
    var nombre = document.getElementById('nombre').value;
    var contrasena = document.getElementById('contrasena').value;
    var captcha = document.getElementById('captcha').value;
    if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) || nombre.length > 30 ) {
       alert('ERROR: El usuario no debe ir vacío ni solamente espacios en blanco o numeros');
       return false;
       }
    if (contrasena == null || contrasena.length == 0 || /^\s+$/.test(nombre) || nombre.length > 30 ) {
       alert('ERROR: Debe ingresar una contraseña');
       return false;
       }
       if (captcha == null || captcha.length == 0 || /^\s+$/.test(nombre) || nombre.length > 30 ) {
         alert('ERROR: Debe ingresar el codigo captcha');
         return false;
         }
    return true;
    }
    