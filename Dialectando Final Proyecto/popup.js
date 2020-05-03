var botonAbrirPopUp = document.getElementById('boton-abrir-popup'),	
	overlay = document.getElementById('overlay'),
	overlayQuiz = document.getElementById('overlayQuiz'),
	popup = document.getElementById('popup'),
	quiz = document.getElementById('quiz'),
	botonCerrarPopup = document.getElementById('boton-cerrar-popup'),
	botonAbrirQuiz = document.getElementById('boton-abrir-quiz'),
	botonCerrarQuiz = document.getElementById('boton-cerrar-quiz');



botonAbrirPopUp.addEventListener('click', function(){
 overlay.classList.add('active');	
 popup.classList.add('active');	
});

botonCerrarPopup.addEventListener('click', function(){
 overlay.classList.remove('active');	
 popup.classList.remove('active');		
});

botonAbrirQuiz.addEventListener('click', function(){
 overlayQuiz.classList.add('active');	
 quiz.classList.add('active');	
});

botonCerrarQuiz.addEventListener('click', function(){
 overlayQuiz.classList.remove('active');	
 quiz.classList.remove('active');		
});




function myFunction() {
	var x = document.getElementById("chat");
	if (x.style.display === "none") {
	  x.style.display = "block";
	} else {	
	  x.style.display = "none";
	}
  }

$(function() {
$("#refresh").click(function() {
	$("#memorama").load("Memorama.php")
	
 return false;
  })
  })
 