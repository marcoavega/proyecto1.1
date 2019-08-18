var slideIndex = 1;
showSlides(slideIndex);
// Next/previous controles
function plusSlides(n) {
    showSlides(slideIndex += n);
}
// Thumbnail imagen controles
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 4000); // Cambio de las imagenes cada X segundos.
}

function seleccion(opc)
{
	//escondemos todos los contenidos
	document.getElementById("op1").style.display="none";
	document.getElementById("op2").style.display="none";
    document.getElementById("op3").style.display="none";
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
	}
}