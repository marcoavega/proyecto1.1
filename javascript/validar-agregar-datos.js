function validarFecha() {
   var fecha = document.getElementById('fecha').value;
   if(fecha == null || fecha.length == 0 ) {
      alert('ERROR: El campo fecha no debe ir vacío');
      return false;
      }else{
      if (confirm('¿Está seguro de enviar la fecha y lección elegida?')){
        document.validar.submit();
        return true;
     }
     return false;
   }
}
function validarVersiculo(){
   var versiculo = document.getElementById('versiculo').value;
   if(versiculo == null || versiculo.length == 0){
      alert('ERROR: El campo versiculo no debe ir vacío');
      return false;
   }else{
      if (confirm('¿Está seguro de enviar la lección y versiculo?')){
         document.validar.submit();
         return true;
      }
      return false;
   }
}
function validarCitaLectura(){
   var cita = document.getElementById('cita').value;
   var lectura = document.getElementById('lectura').value;
   if(cita == null || cita.length == 0 ) {
      alert('ERROR: El campo cita no debe ir vacío');
      return false;
   }else{
      if(lectura == null || lectura.length == 0 ) {
      alert('ERROR: El campo lectura no debe ir vacío');
      return false;
   }else{
      if (confirm('¿Está seguro de enviar la lección, cita y lectura?')){
         document.validar.submit();
         return true;
      }
      return false;
   }
   }
}
function validarObjetivo(){
   var objetivo = document.getElementById('objetivo').value;
   if(objetivo == null || objetivo.length == 0 ) {
      alert('ERROR: El campo objetivo no debe ir vacío');
      return false;
   }else{
      if (confirm('¿Está seguro de enviar la lección y objetivo?')){
         document.validar.submit();
         return true;
      }
      return false;
   }
}
function validarComentario(){
   var comentario = document.getElementById('comentariolectura').value;
   if(comentario == null || comentario.length == 0 ) {
      alert('ERROR: El campo comentario no debe ir vacío');
      return false;
   }else{
      if (confirm('¿Está seguro de enviar la lección y objetivo?')){
         document.validar.submit();
         return true;
      }
   }
   return false;
}
function validarPregunta1(){
   var pregunta1 = document.getElementById('pregunta1').value;
   var titulo_citas1 = document.getElementById('titulo_citas1').value;
   var citas1 = document.getElementById('citas1').value;
   if(pregunta1 == null || pregunta1.length == 0 ) {
      alert('ERROR: El campo pregunta 1 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas1 == null || titulo_citas1.length == 0 ) {
      alert('ERROR: El campo titulo citas 1 no debe ir vacío');
      return false;
   }else{
      if(citas1 == null || citas1.length == 0 ) {
         alert('ERROR: El campo citas 1 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}
function validarPregunta2(){
   var pregunta2 = document.getElementById('pregunta2').value;
   var titulo_citas2 = document.getElementById('titulo_citas2').value;
   var citas2 = document.getElementById('citas2').value;
   if(pregunta2 == null || pregunta2.length == 0 ) {
      alert('ERROR: El campo pregunta 2 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas2 == null || titulo_citas2.length == 0 ) {
      alert('ERROR: El campo titulo citas 2 no debe ir vacío');
      return false;
   }else{
      if(citas2 == null || citas2.length == 0 ) {
         alert('ERROR: El campo citas 2 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}
function validarPregunta3(){
   var pregunta3 = document.getElementById('pregunta3').value;
   var titulo_citas3 = document.getElementById('titulo_citas3').value;
   var citas3 = document.getElementById('citas3').value;
   if(pregunta3 == null || pregunta3.length == 0 ) {
      alert('ERROR: El campo pregunta 3 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas3 == null || titulo_citas3.length == 0 ) {
      alert('ERROR: El campo titulo citas 3 no debe ir vacío');
      return false;
   }else{
      if(citas3 == null || citas3.length == 0 ) {
         alert('ERROR: El campo citas 3 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}
function validarPregunta4(){
   var pregunta4 = document.getElementById('pregunta4').value;
   var titulo_citas4 = document.getElementById('titulo_citas4').value;
   var citas4 = document.getElementById('citas4').value;
   if(pregunta4 == null || pregunta4.length == 0 ) {
      alert('ERROR: El campo pregunta 4 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas4 == null || titulo_citas4.length == 0 ) {
      alert('ERROR: El campo titulo citas 4 no debe ir vacío');
      return false;
   }else{
      if(citas4 == null || citas4.length == 0 ) {
         alert('ERROR: El campo citas 4 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}
function validarPregunta5(){
   var pregunta5 = document.getElementById('pregunta5').value;
   var titulo_citas5 = document.getElementById('titulo_citas5').value;
   var citas5 = document.getElementById('citas5').value;
   if(pregunta5 == null || pregunta5.length == 0 ) {
      alert('ERROR: El campo pregunta 5 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas5 == null || titulo_citas5.length == 0 ) {
      alert('ERROR: El campo titulo citas 5 no debe ir vacío');
      return false;
   }else{
      if(citas5 == null || citas5.length == 0 ) {
         alert('ERROR: El campo citas 5 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}
function validarPregunta6(){
   var pregunta6 = document.getElementById('pregunta6').value;
   var titulo_citas6 = document.getElementById('titulo_citas6').value;
   var citas6 = document.getElementById('citas6').value;
   if(pregunta6 == null || pregunta6.length == 0 ) {
      alert('ERROR: El campo pregunta 6 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas6 == null || titulo_citas6.length == 0 ) {
      alert('ERROR: El campo titulo citas 6 no debe ir vacío');
      return false;
   }else{
      if(citas6 == null || citas6.length == 0 ) {
         alert('ERROR: El campo citas 6 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}
function validarPregunta7(){
   var pregunta7 = document.getElementById('pregunta7').value;
   var titulo_citas7 = document.getElementById('titulo_citas7').value;
   var citas7 = document.getElementById('citas7').value;
   if(pregunta7 == null || pregunta7.length == 0 ) {
      alert('ERROR: El campo pregunta 7 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas7 == null || titulo_citas7.length == 0 ) {
      alert('ERROR: El campo titulo citas 7 no debe ir vacío');
      return false;
   }else{
      if(citas7 == null || citas7.length == 0 ) {
         alert('ERROR: El campo citas 7 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}
function validarPregunta8(){
   var pregunta8 = document.getElementById('pregunta8').value;
   var titulo_citas8 = document.getElementById('titulo_citas8').value;
   var citas8 = document.getElementById('citas8').value;
   if(pregunta8 == null || pregunta8.length == 0 ) {
      alert('ERROR: El campo pregunta 8 no debe ir vacío');
      return false;
   }else{
   if(titulo_citas8 == null || titulo_citas8.length == 0 ) {
      alert('ERROR: El campo titulo citas 8 no debe ir vacío');
      return false;
   }else{
      if(citas8 == null || citas8.length == 0 ) {
         alert('ERROR: El campo citas 8 no debe ir vacío');
         return false;
      }else{
         if (confirm('¿Está seguro de enviar la lección, la pregunta y citas?')){
            document.validar.submit();
            return true;
         }
         return false;
      }
   }
}
}

function seleccion(opc)
{
	//escondemos todos los contenidos
	document.getElementById("op1").style.display="none";
	document.getElementById("op2").style.display="none";
   document.getElementById("op3").style.display="none";
   document.getElementById("op4").style.display="none";
   document.getElementById("op5").style.display="none";
   document.getElementById("op6").style.display="none";
   document.getElementById("op7").style.display="none";
   document.getElementById("op8").style.display="none";
   document.getElementById("op9").style.display="none";
   document.getElementById("op10").style.display="none";
   document.getElementById("op11").style.display="none";
   document.getElementById("op12").style.display="none";
   document.getElementById("op13").style.display="none";
	switch(opc)
	{
		case 1:
			//mostramos elcontenido de la primera opcion
			document.getElementById("op1").style.display="block";
			break;
		case 2:
			//mostramos elcontenido de la segunda opcion
			document.getElementById("op2").style.display="block";
			break;
		case 3:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op3").style.display="block";
         break;
      case 4:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op4").style.display="block";
         break;
      case 5:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op5").style.display="block";
         break;
      case 6:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op6").style.display="block";
         break;
      case 7:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op7").style.display="block";
         break;
      case 8:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op8").style.display="block";
         break;
      case 9:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op9").style.display="block";
         break;
      case 10:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op10").style.display="block";
         break;
      case 11:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op11").style.display="block";
         break;
      case 12:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op12").style.display="block";
         break;
      case 13:
			//mostramos elcontenido de la tercera opcion
			document.getElementById("op13").style.display="block";
			break;
	}
}